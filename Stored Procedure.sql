USE sistema_planilla;

DROP procedure IF EXISTS plan_det;

DELIMITER $$

Create Procedure plan_det(planX varchar (50), emp int)
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
    DECLARE bonTot DEC (10,2) default 0.0;
    DECLARE 14vo DEC (10,2) default 0.0;
    DECLARE 13vo DEC (10,2) default 0.0;
    DECLARE FechaIngreso int default 0;
    
    SET x = (SELECT COUNT(*) FROM sistema_planilla.empleados where Empresas_idEmpresas = emp and empleados.Estados_idEstado = 1);
    
	while i <= x DO
		
        #Obtencion de Datos
        
		set salary = (	SELECT		Salario
						FROM		sistema_planilla.empleados inner join sistema_planilla.cargos on
									sistema_planilla.cargos.idCargo = sistema_planilla.empleados.Cargos_idCargos
						where 		Empresas_idEmpresas = emp and empleados.Estados_idEstado = 1
						order by 	idEmpleados
						LIMIT j, 1);
		
		set ID = ( 	SELECT		idEmpleados
					FROM		sistema_planilla.empleados inner join sistema_planilla.cargos on
								sistema_planilla.cargos.idCargo = sistema_planilla.empleados.Cargos_idCargos
					where 		Empresas_idEmpresas = emp and empleados.Estados_idEstado = 1
					order by 	idEmpleados
					LIMIT j, 1);
			
		set FechaIngreso = ( SELECT	MONTH(fechaIngreso)
							FROM		sistema_planilla.empleados inner join sistema_planilla.cargos on
										sistema_planilla.cargos.idCargo = sistema_planilla.empleados.Cargos_idCargos
							where 		Empresas_idEmpresas = emp and empleados.Estados_idEstado = 1
							order by 	idEmpleados
							LIMIT j, 1);
                        
		select FechaIngreso;
		
        #Calculo de Datos independiente
        #Calculo de IHSS Seguro De prevision Social
        
        IF salary <= 9849.70 then 
			set ihss = (salary * 0.025) * 2;
		else
			set ihss = (9849.70 * 0.025) * 2;
		end if;
        
        #Calculo de RAP Seguro De prevision 
        
        set rap = salary * 0.015;
        
        #Calculo de Impuesto sobre la renta
        
        set IngresoAnual = (salary * 12) - ((rap * 12) + (ihss * 12));
        
        if IngresoAnual > 642817.64 then
			set isr = 	(((276411.57 - 181274.56) * 0.15) + 
						((642817.64 - 276411.57) * 0.20)+
                        ((IngresoAnual - 642817.64) * 0.25))/12;
            
		elseif IngresoAnual > 276411.58 AND IngresoAnual < 642817.64 then
			set isr = 	(((276411.57 - 181274.56) * 0.15) + 
						((IngresoAnual - 276411.58) * 0.20))/12;
            
		elseif IngresoAnual > 181274.57 AND IngresoAnual < 276411.58 then
			set isr =	((IngresoAnual - 181274.57) * 0.15)/12;
            
		else
            set isr = 0;
        end if;
        
        #Calculo de Deduccion Total
        
        set dedTot = isr + rap + ihss;
        
        set netSalary = salary - dedTot;
        
        IF (FechaIngreso > 2) THEN
			IF(month(curdate()) = 6) THEN
				set 13vo = salary + netSalary;
			END IF;
		END IF;
        
        IF (FechaIngreso < 2) THEN
			IF(month(curdate()) = 12) THEN
				set 14vo = salary + netSalary;
			END IF;
		END IF;
        
        set bonTot = 14vo + 13vo;
        
        set i = i + 1;
        set j = j + 1;
        
        insert into `detalleplanillas`
        values (planX, ID, salary, ihss, rap, isr, dedTot, 14vo, 13vo, bonTot, netSalary);
        
	end while;
    
    SET i = 0;
    
End $$

-- Call plan_det(69, 2);

-- select * from sistema_planilla.detalleplanillas;