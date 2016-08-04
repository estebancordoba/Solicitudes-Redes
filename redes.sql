CREATE TABLE permisos (
  idpermiso char(20) PRIMARY KEY,
  nombFunc varchar(30),
  cedulaFunc varchar(10),
  tipoDisp varchar(30),
  nui varchar(20),
  descrip varchar(30),
  tipoCon varchar(20),
  mac varchar(20),
  ip varchar(20),
  justi varchar(150),
  observ varchar(150) DEFAULT 'NINGUNA'
);

CREATE TABLE puntosred (
  idpuntoRed char(20) PRIMARY KEY,
  lugar varchar(30),
  numeroPuntos smallint,
  observ varchar(150) DEFAULT 'NINGUNA'
);

CREATE TABLE registros (
  idregistro char(20) PRIMARY KEY,
  tipoDisp varchar(30),
  nui varchar(20),
  descripcion varchar(30),
  tipoCon varchar(20),
  mac varchar(20),
  obser varchar(150) DEFAULT 'NINGUNA'
);

CREATE TABLE solicitudes (
  idsolicitud char(20) PRIMARY KEY,
  fecha date,
  hora time,
  cedula varchar(10),
  nombre varchar(50),
  correo varchar(30),
  cargo varchar(30),
  sitio varchar(20),
  numDep varchar(10),
  nombDep varchar(100),
  tipoSol varchar(100),
  idregistro char(20),
  idpermiso char(20),
  idvideoConferencia char(20),
  idpuntoRed char(20)
);

CREATE TABLE usuarios (
  user varchar(50) PRIMARY KEY,
  password varchar(300),
  nombre varchar(50),
  apellido varchar(50)
);

CREATE TABLE videoconferencias (
  idvideoConferencia char(20) PRIMARY KEY,
  servicio varchar(30),
  lugarEvento varchar(30),
  entidadDestino varchar(30),
  correoDestino varchar(30),
  fechaPrueba date,
  horaPrueba time,
  fechaEvento date,
  horaEvento time,
  observ varchar(150) DEFAULT 'NINGUNA' 
);

INSERT INTO usuarios VALUES ("admin1",md5("admin1"),"Administrador","1");
INSERT INTO usuarios VALUES ("admin2",md5("admin2"),"Administrador","2");
INSERT INTO usuarios VALUES ("admin3",md5("admin3"),"Administrador","3");