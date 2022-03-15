USE sistema_planilla;

DELIMITER $$

Create Procedure RAP ()
Begin
	DECLARE x int default 0;
    DECLARE ISV DEC (10,2) default 0.0;
    DECLARE EM DEC (10,2) default 0.0;
    
    SET @ISV = 8882.3*0.0025;
    set @x = (SELECT COUNT(*) FROM sistema_planilla.empleados);
    
	while i>0 DO
		SELECT	idEmpleados,
		concat(PrimerNombre,' ', PrimerApellido),
        Salario
		FROM sistema_planilla.empleados
		inner join sistema_planilla.cargos on
		sistema_planilla.cargos.idCargo = sistema_planilla.empleados.Cargos_idCargos;
	end while;
End