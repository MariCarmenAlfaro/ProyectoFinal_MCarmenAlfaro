drop database if exists horseClubDB;

Create database if not exists horseClubDB;
use horseClubDB;

create table classes(
classId int primary key,
classDay enum("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado") not null,
classHour enum("10","12","16","18") not null,
classLevel enum("Bajo","Medio","Alto")
);

create table userProfile(
userId int primary key,
userName varchar(255) not null,
userType enum("Alumno","Dueño","Admin") not null,
registrationDate date not null,
emailAddress varchar(255) not null,
psswdUser varchar(255) not null,
constraint ck_emailAddress check (emailAddress regexp '%[a-zA-Z0-9_\-]+@([a-zA-Z0-9_\-]+\.)+(com|org|es|nz|net])%')
);

create table classUser(
id int primary key,
userId int,
classId int,
foreign key (userId) references userProfile(userId),
foreign key (classId) references classes(classId)
);
create table horses(
horseId int primary key,
horseName varchar(255) not null,
barnNum int,
foodType varchar(255),
horseType enum("Clase","Privado") not null,
importantData varchar(255),
cameraUrl varchar(255),
registrationDate date not null,
ownerId int,
foreign key (ownerId) references userProfile(userId)
);
create table prices(
priceId int primary key,
typeService enum("Clase","Establo","Excursion Playa","Excursion Montaña","Fiesta Cumpleaños") not null,
price int not null
);

create table payments(
payId int primary key,
userId int,
payDate date not null,
priceId int not null,
payMethod enum("Tarjeta","Efectivo")not null,
foreign key (userId) references userProfile(userId),
foreign key (priceId) references prices(priceId)
);


create table menuBar(
menuId int primary key,
menuName varchar(255) not null,
menuDate enum("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"), 
menuPrice float
);

create table reservationExc(
reservationId int primary key,
reservationName varchar(255) not null,
emailAddress varchar(255) not null,
numPeople int not null,
dateExcursion date unique,
excursionType enum("Playa", "Montaña") not null,
constraint ck_emailAddress1 check (emailAddress regexp '%[a-zA-Z0-9_\-]+@([a-zA-Z0-9_\-]+\.)+(com|org|es|nz|net])%')

);

