drop table if exists `bautizados`;
create table `bautizados` (
	`id` int primary key auto_increment,
	`nombre` varchar(50) not null,
	`apellido` varchar(50) not null,
	`fecha_bautismo` date not null,
	`pastor_bautismo` varchar(50) not null
);

drop table if exists `defunciones`;
create table `defunciones` (
	`id` int primary key auto_increment,
	`nombre` varchar(50) not null,
	`apellido` varchar(50) not null,
	`fecha_fallecido` date not null
);

drop table if exists `eventos`;
create table `eventos` (
	`id` int primary key auto_increment,
	`programa` varchar(50) not null,
	`fecha` date not null
);

drop table if exists `matrimonios`;
create table `matrimonios` (
	`id` int primary key auto_increment,
	`nombre-esposo` varchar(50) null,
	`nombre-esposa` varchar(50) null,
	`tiempo-casados` int(3) null,
	`fecha-casados` date not null
);

drop table if exists `membresias`;
create table `membresias` (
	`id` int primary key auto_increment,
	`cedula` int(11) not null,
	`nombre` varchar(50) not null,
	`nacimiento` date null,
	`ec` varchar(10) not null,
	`telefono` varchar(11) null,
	`direccion` varchar(50) not null,
	`barrio` varchar(50) not null,
	`profesion` varchar(50) null
);

drop table if exists `pastor`;
create table `pastor` (
	`id` int primary key auto_increment,
	`tipo_licencia` int(11) not null,
	`nombre` varchar(50) not null,
	`nacimiento` date not null,
	`correo` varchar(80) not null,
	`telefono` varchar(11) not null
);

drop table if exists `presentacion_niños`;
create table `presentacion_niños` (
	`id` int primary key auto_increment,
	`fecha_nacimiento` date not null,
	`nombre_padre` varchar(50) not null,
	`nombre_madre` varchar(50) not null
);

drop table if exists `registros`;
create table `registros` (
	`id` int primary key auto_increment,
	`rg_pastor` varchar(50) not null,
	`rg_feligrez` varchar(50) not null
);

drop table if exists `tipo_licencia`;
create table `tipo_licencia` (
	`id` int primary key auto_increment,
	`predicador` int(11) not null,
	`local` int(11) not null,
	`general` int(11) not null,
	`ordenacion` int(11) not null
);

drop table if exists `usuarios`;
create table `usuarios` (
	`id` int primary key auto_increment,
	`nombre` varchar(50) not null,
	`apellido` varchar(50) not null,
	`usuario` varchar(10) not null,
	`password` varchar(10) not null,
	`tipo_usu` varchar(1) not null
);
