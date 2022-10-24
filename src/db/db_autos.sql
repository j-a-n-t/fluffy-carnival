create table cat_marcas
(
    id           int                        not null auto_increment,
    inicial      varchar(45)                not null,
    marca        varchar(45)                not null unique,
    estatus      enum ('activo','inactivo') not null default 'activo',
    creacion     datetime                   not null default localtime,
    modificacion datetime                   not null default localtime,
    primary key (id)
);

create table cat_modelos
(
    id           int                        not null auto_increment,
    inicial      varchar(45)                not null,
    modelo       varchar(45)                not null unique,
    estatus      enum ('activo','inactivo') not null default 'activo',
    creacion     datetime                   not null default localtime,
    modificacion datetime                   not null default localtime,
    primary key (id)
);

create table cat_anios
(
    id           int                        not null auto_increment,
    anio         varchar(45)                not null unique,
    estatus      enum ('activo','inactivo') not null default 'activo',
    creacion     datetime                   not null default localtime,
    modificacion datetime                   not null default localtime,
    primary key (id)
);

create table cat_submodelos
(
    id           int                        not null auto_increment,
    inicial      varchar(45)                not null,
    vehiculo     varchar(45)                not null,
    marcaID      int                        not null,
    modeloID     int                        not null,
    estatus      enum ('activo','inactivo') not null default 'activo',
    creacion     datetime                   not null default localtime,
    modificacion datetime                   not null default localtime,
    primary key (id),
    constraint FK_submodelo_marca foreign key (marcaID) references cat_marcas (id) on delete restrict on update restrict,
    constraint FK_submodelo_modelo foreign key (modeloID) references cat_modelos (id) on delete restrict on update restrict
);

create table tb_autos
(
    id           int                        not null auto_increment,
    submodeloID  int                        not null,
    anioID       int                        not null,
    precio       float                      not null,
    kilometraje  bigint                     not null,
    color        varchar(45)                null,
    email        varchar(45)                not null,
    estatus      enum ('activo','inactivo') not null default 'activo',
    creacion     datetime                   not null default localtime,
    modificacion datetime                   not null default localtime,
    primary key (id),
    constraint FK_submodelo_auto foreign key (submodeloID) references cat_modelos (id) on delete restrict on update restrict,
    constraint FK_anio_auto foreign key (anioID) references cat_anios (id) on delete restrict on update restrict
);
