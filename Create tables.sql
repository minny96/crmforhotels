create table hotels (
	hotel_no bigserial not null primary key,
	name varchar(40) null,
	address varchar(40) null
);
create table manager (
	manager_no bigserial not null primary key,
	firstname varchar(80) null,
	name varchar(80) null,
	hotel_no integer references hotels(hotel_no)
);
create table rooms (
	room_no bigserial not null primary key,
	size integer null,
	floor integer null,
	category varchar(20) null,
	price money default(0),
	descr text null
);
create table guest (
	guest_no bigserial not null primary key,
	firstname varchar(80) null,
	name varchar(80) null,
	secondname varchar(80) null,
	birthday date null,
	descr text null
);

create table passports (
	guest_no bigserial not null primary key,
	series integer null,
	number integer null,
	givedate date null,
	who_give text null,
	descr text null
);
create table address (
	guest_no bigserial not null primary key,
	country varchar(80) null,
	city varchar(80) null,
	street varchar(80) null,
	reg_data date null,
	descr text null
);
alter table passports
add foreign key(guest_no) references guest(guest_no)
on delete cascade

alter table address
add foreign key(guest_no) references guest(guest_no)
on delete cascade

create table pay_info(
	pay_no bigserial not null primary key,
	guest_no integer null,
	room_no integer null,
	manager_no integer null,
	datein timestamp null,
	dateout timestamp null
);
alter table pay_info
add constraint pays_pkey 
foreign key(guest_no) references guest(guest_no)
on delete cascade

alter table pay_info
add constraint room_pkey 
foreign key(room_no) references rooms(room_no)
on delete cascade

alter table pay_info 
add constraint manager_pkey
foreign key(manager_no) references manager(manager_no) 
on delete cascade

--create view
create view manager_of_hotel as 
	select m.firstname, m.name, h.hotel_name, h.hotel_address from manager m, hotels h 
	where h.hotel_no = m.hotel_no;