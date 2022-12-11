create table user
(username varchar(25) not null,
email varchar(30),
fullNameUser varchar(30),
password varchar(30),
birthDate date,
constraint user_PK primary key (username));

create table event
(kdEvent char(5) not null,
username varchar(30) not null,
namaEvent varchar(30),
tanggalEvent date,
lokasiEvent varchar(100),
deskripsi text,
poster text,
statusEvent varchar(25),
constraint event_PK primary key (kdEvent),
constraint user_event_FK foreign key (username) references user(username)
);