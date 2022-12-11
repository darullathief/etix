create or replace database etix;

use etix;

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

/* Table Ticket Chategory */

create table ticketChategory
(kdJenis char(5) not null,
jenisTiket varchar (10) not null,
kdEvent char(5) not null,
harga int (8),
kapasitasTiket int(3),
constraint ticketChategory_PK primary key (kdJenis), 
constraint  event_FK foreign key (kdEvent) references event(kdEvent)
);

/* Table Ticket */

create table ticket
(kdTiket char(13) not null,
kdJenis char(5) not null,
constraint ticket_PK primary key (kdTiket),
constraint ticketChategory_FK foreign key (kdJenis) references ticketChategory (kdJenis)
);


/* Table Order Detail */

create table orderDetail
(kdTiket char(13) not null,
kdPemesanan char(10) not null,
constraint orderDetail_PK primary key (kdTiket, kdPemesanan),
constraint ticket_FK foreign key (kdTiket) references ticket (kdTiket),
constraint order_FK foreign key (kdPemesanan) references order (kdPemesanan)

);

/* Table Order */

create table order
(kdPemesanan char(10) not null,
username varchar(25) not null,
fullNameOrder varchar(30),
statusBayar varchar(15),
totalBayar int(9), 
metodePembayaran varchar(15),
buktiBayar text,
noRek int(18) not null,
constraint order_PK primary key (kdPemesanan),
constraint user_FK foreign key (username) references user (username)
);