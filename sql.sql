create table data_alumno(
matricula int primary key,
nombre varchar(200),
paterno varchar(200),
materno varchar(200),
curp varchar(18),
telefono varchar(8));

create table procesos(
no_proceso int primary key auto_increment,
matricula int,
proceso varchar(40),
estado varchar(40),
cuatrimestre varchar(40),
ciclo varchar(100),
periodo varchar(10),
total_horas int,
idempresa int,
idcarrera int,
fecha_inicio varchar(40),
fecha_termino varchar(40),
calificacion float);

create table procesos_documentos(
matricula int,
proceso varchar(40),
formato varchar(40),
no_documento int primary key auto_increment,
documento varchar(40),
estado varchar(40));

create table empresas(
idempresa int primary key auto_increment,
empresa varchar(100),
nombre_encargado varchar(100),
titulo_prof varchar(40),
puesto varchar(100),
nombre_proyecto varchar(40),
sector varchar(40),
direccion varchar(100),
telefono varchar(40),
correo varchar(100));

create table carreras(
idcarrera int primary key auto_increment,
carrera varchar(100),
director varchar(100),
asesor varchar(100),
profesor varchar(100));

ALTER TABLE data_alumno ADD FOREIGN KEY (matricula) REFERENCES procesos(matricula);

delimiter //
CREATE TRIGGER insert_in_procesos_inf_basic BEFORE INSERT ON data_alumno
FOR EACH ROW
BEGIN	
	INSERT INTO procesos VALUES(null,NEW.matricula,'Estancias 1','No aprobado','4° Cuatrimestre','Primer ciclo de formacion','-',null,null,null,'-','-',null);
	INSERT INTO procesos VALUES(null,NEW.matricula,'Estancias 2','No aprobado','7° Cuatrimestre','Segundo ciclo de formacion','-',null,null,null,'-','-',null);
	INSERT INTO procesos VALUES(null,NEW.matricula,'Estadias','No aprobado','10° Cuatrimestre','Tercer ciclo de formacion','-',null,null,null,'-','-',null);
END; //
delimiter ;


drop TRIGGER insert_in_procesos_inf_basic;
delimiter //
CREATE TRIGGER insert_in_procesos_inf_basic BEFORE INSERT ON data_alumno
FOR EACH ROW
BEGIN	
	INSERT INTO procesos VALUES(null,NEW.matricula,'Estancias 1','No aprobado','4° Cuatrimestre','Primer ciclo de formacion','-',null,null,null,'-','-',null);
	INSERT INTO procesos VALUES(null,NEW.matricula,'Estancias 2','No aprobado','7° Cuatrimestre','Segundo ciclo de formacion','-',null,null,null,'-','-',null);
	INSERT INTO procesos VALUES(null,NEW.matricula,'Estadias','No aprobado','10° Cuatrimestre','Tercer ciclo de formacion','-',null,null,null,'-','-',null);
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias1',null,'205BK20100/03(F03)','Carta comprimiso','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias1',null,'205BK20100/03(F02)','Carta de presentación','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias1',null,'205BK20100/03(F04)','Carta de aceptación','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias1',null,'205BK20100/03(F05)','Reporte quincenal R1','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias1',null,'205BK20100/03(F05)','Reporte quincenal R2','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias1',null,'205BK20100/03(F05)','Reporte quincenal R3','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias1',null,'205BK20100/03(F05)','Reporte quincenal R4','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias1',null,'205BK20100/03(F05)','Reporte quincenal R5','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias1',null,'205BK20100/03(F05)','Reporte quincenal R6','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias1',null,'205BK20100/03(F01)','Proyecto de cooperación','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias1',null,'205BK20100/03(F06)','Carta de terminación','Desactivado');
	
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias2',null,'205BK20100/03(F03)','Carta comprimiso','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias2',null,'205BK20100/03(F02)','Carta de presentación','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias2',null,'205BK20100/03(F04)','Carta de aceptación','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias2',null,'205BK20100/03(F05)','Reporte quincenal R1','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias2',null,'205BK20100/03(F05)','Reporte quincenal R2','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias2',null,'205BK20100/03(F05)','Reporte quincenal R3','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias2',null,'205BK20100/03(F05)','Reporte quincenal R4','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias2',null,'205BK20100/03(F05)','Reporte quincenal R5','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias2',null,'205BK20100/03(F05)','Reporte quincenal R6','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias2',null,'205BK20100/03(F01)','Proyecto de cooperación','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estancias2',null,'205BK20100/03(F06)','Carta de terminación','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estadias',null,'205BK20000/03(F03)','Carta comprimiso','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estadias',null,'205BK20000/03(F02)','Carta de presentación','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estadias',null,'205BK20000/03(F04)','Carta de aceptación','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estadias',null,'205BK20000/03(F05)','Reporte quincenal R1','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estadias',null,'205BK20000/03(F05)','Reporte quincenal R2','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estadias',null,'205BK20000/03(F05)','Reporte quincenal R3','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estadias',null,'205BK20000/03(F05)','Reporte quincenal R4','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estadias',null,'205BK20000/03(F05)','Reporte quincenal R5','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estadias',null,'205BK20000/03(F05)','Reporte quincenal R6','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estadias',null,'205BK20000/03(F01)','Proyecto de cooperación','Desactivado');
	INSERT INTO procesos_documentos VALUES(New.matricula,'Estadias',null,'205BK20000/03(F06)','Carta de terminación','Desactivado');
END; //
delimiter ;

delimiter $$
CREATE procedure generate_documents(IN  materia int, IN idprocesoEnt int)     /* Parámetro de entrada */
  begin
    case materia
     when 1 then INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F01)','Proyecto de cooperación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F02)','Carta de presentación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F03)','Carta comprimiso','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F04)','Carta de aceptación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F05)','Reporte quincenal R1','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F05)','Reporte quincenal R2','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F05)','Reporte quincenal R3','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F05)','Reporte quincenal R4','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F06)','Carta de terminación','GENERADO');
     			 UPDATE procesos SET estado_pro='VALIDADO' WHERE idproceso=idprocesoEnt;
     			 
     when 2 then INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F01)','Proyecto de cooperación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F02)','Carta de presentación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F03)','Carta comprimiso','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F04)','Carta de aceptación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F05)','Reporte quincenal R1','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F05)','Reporte quincenal R2','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F05)','Reporte quincenal R3','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F05)','Reporte quincenal R4','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20100/03(F06)','Carta de terminación','GENERADO');
     			 UPDATE procesos SET estado_pro='VALIDADO' WHERE idproceso=idprocesoEnt;

     when 3 then INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F01)','Proyecto de cooperación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F02)','Carta de presentación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F03)','Carta comprimiso','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F04)','Carta de aceptación','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F05)','Reporte quincenal R1','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F05)','Reporte quincenal R2','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F05)','Reporte quincenal R3','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F05)','Reporte quincenal R4','GENERADO');
     			 INSERT INTO procesos_documentos VALUES(null,idprocesoEnt,'205BK20000/03(F06)','Carta de terminación','GENERADO'); 
     			 UPDATE procesos SET estado_pro='VALIDADO' WHERE idproceso=idprocesoEnt;
    end case;
  end$$
delimiter ;