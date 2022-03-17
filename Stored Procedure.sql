USE sistema_planilla;

DROP procedure IF EXISTS plan_det;

DELIMITER $$

Create Procedure plan_det(planX int)
Begin
	DECLARE x int default 0;
    DECLARE i int default 1;
    DECLARE j int default 0;
    DECLARE ID int default 0;
    DECLARE IngresoAnual DEC (10,2) default 0.0;
    DECLARE ihss DEC (10,2) default 0.0;
    DECLARE rap DEC (10,2) default 0.0;
    DECLARE salary DEC (10,2) default 0.0;
    DECLARE netSalary DEC (10,2) default 0.0;
    DECLARE isr DEC (10,2) default 0.0;
    DECLARE dedTot DEC (10,2) default 0.0;
    
    SET x = (SELECT COUNT(*) FROM sistema_planilla.empleados);

	CREATE temporary table if not exists `aux_planilla` as (SELECT * FROM sistema_planilla.detalleplanillas);
    
	while i <= x DO
		
        #Obtencion de Datos
        
        set salary = (	SELECT	Salario
						FROM	sistema_planilla.empleados inner join sistema_planilla.cargos on
								sistema_planilla.cargos.idCargo = sistema_planilla.empleados.Cargos_idCargos
						LIMIT j, 1);
		
		set ID = ( SELECT	idEmpleados
					FROM	sistema_planilla.empleados inner join sistema_planilla.cargos on
							sistema_planilla.cargos.idCargo = sistema_planilla.empleados.Cargos_idCargos
					LIMIT j, 1);
		
        #Calculo de Datos independiente
        #Calculo de IHSS Seguro De prevision Social
        
        IF salary <= 9779.86 then 
			set ihss = salary * 0.0141;
		else
			set ihss = 141.81;
		end if;
        
        #Calculo de RAP Seguro De prevision 
        
        set rap = salary * 0.04;
        
        #Calculo de Impuesto sobre la renta
        
        set IngresoAnual = (salary * 12) - (ihss * 12) - (rap * 12);
        
        if IngresoAnual > 642817.63 then
			set isr = 	(((181274.56 - 0.01) * 0.15) + 
						((276411.57 - 181274.57) * 0.20)+
                        ((IngresoAnual - 642817.64) * 0.25))/12;
            
		elseif IngresoAnual > 276411.57 then
			set isr =	(((181274.56 - 0.01) * 0.15) + 
						((IngresoAnual - 642817.63) * 0.20))/12;
            
		elseif IngresoAnual > 181274.56 then
			set isr =	(((IngresoAnual-181274.56) * 0.15))/12;
            
		else
            set isr = 0;
        end if;
        
        set dedTot = isr + rap + ihss;
        
        set netSalary = salary - dedTot;
        
        set i = i + 1;
        set j = j + 1;
        
        insert into aux_planilla
        values (planX, ID, salary, ihss, rap, isr, dedTot, 0, 0, 0, netSalary);
        
	end while;
    
    SELECT * FROM aux_planilla;
    
    DROP TABLE aux_planilla;
    SET i = 0;
    
End $$

CALL plan_det(1);