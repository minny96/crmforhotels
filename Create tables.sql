-- Drop table

-- DROP TABLE hotelcrm.address
CREATE TABLE hotelcrm.address (
	guest_no bigserial NOT NULL,
	country varchar(80) NULL,
	city varchar(80) NULL,
	street varchar(80) NULL,
	reg_data date NULL,
	descr text NULL,
	CONSTRAINT address_pkey PRIMARY KEY (guest_no),
	CONSTRAINT address_guest_no_fkey FOREIGN KEY (guest_no) REFERENCES guest(guest_no) ON DELETE CASCADE
);
-- Drop table

-- DROP TABLE hotelcrm.guest

CREATE TABLE hotelcrm.guest (
	guest_no bigserial NOT NULL,
	firstname varchar(80) NULL,
	"name" varchar(80) NULL,
	secondname varchar(80) NULL,
	birthday date NULL,
	descr text NULL,
	CONSTRAINT guest_pkey PRIMARY KEY (guest_no)
)
WITH (
	OIDS=FALSE
);

-- Drop table

-- DROP TABLE hotelcrm.hotels

CREATE TABLE hotelcrm.hotels (
	hotel_no bigserial NOT NULL,
	hotel_name varchar(40) NULL,
	hotel_address varchar(40) NULL,
	CONSTRAINT hotels_pkey PRIMARY KEY (hotel_no)
)
WITH (
	OIDS=FALSE
);
-- Drop table

-- DROP TABLE hotelcrm.manager

CREATE TABLE hotelcrm.manager (
	manager_no bigserial NOT NULL,
	firstname varchar(80) NULL,
	"name" varchar(80) NULL,
	hotel_no int4 NULL,
	CONSTRAINT manager_pkey PRIMARY KEY (manager_no),
	CONSTRAINT manager_hotel_no_fkey FOREIGN KEY (hotel_no) REFERENCES hotels(hotel_no)
)
WITH (
	OIDS=FALSE
);
-- Drop table

-- DROP TABLE hotelcrm.passports

CREATE TABLE hotelcrm.passports (
	guest_no bigserial NOT NULL,
	series int4 NULL,
	"number" int4 NULL,
	givedate date NULL,
	who_give text NULL,
	descr text NULL,
	CONSTRAINT passports_pkey PRIMARY KEY (guest_no),
	CONSTRAINT passports_guest_no_fkey FOREIGN KEY (guest_no) REFERENCES guest(guest_no) ON DELETE CASCADE
)
WITH (
	OIDS=FALSE
);
-- Drop table

-- DROP TABLE hotelcrm.pay_info

CREATE TABLE hotelcrm.pay_info (
	pay_no bigserial NOT NULL,
	guest_no int4 NULL,
	room_no int4 NULL,
	manager_no int4 NULL,
	datein timestamp NULL,
	dateout timestamp NULL,
	CONSTRAINT pay_info_pkey PRIMARY KEY (pay_no),
	CONSTRAINT manager_pkey FOREIGN KEY (manager_no) REFERENCES manager(manager_no) ON DELETE CASCADE,
	CONSTRAINT pays_pkey FOREIGN KEY (guest_no) REFERENCES guest(guest_no) ON DELETE CASCADE,
	CONSTRAINT room_pkey FOREIGN KEY (room_no) REFERENCES rooms(room_no) ON DELETE CASCADE
)
WITH (
	OIDS=FALSE
);

--- НОВЫЕ
-- Drop table

-- DROP TABLE hotelcrm.rooms

CREATE TABLE hotelcrm.rooms (
	room_no bigserial NOT NULL,
	number int4 NULL,
	room_type varchar(40) NULL,
    capacity int4 null,
	price int4 NULL DEFAULT 0,
	descr text NULL,
	hotel_no int4 NULL,
	is_booked bool NULL DEFAULT false,
	CONSTRAINT rooms_pkey PRIMARY KEY (room_no),
)
WITH (
	OIDS=FALSE
);


CREATE TABLE bookings (
	booking_no bigserial NOT NULL,
	firstname varchar(80) NULL,
	lastname varchar(80) NULL,
	email text NULL,
	gender varchar(40) NULL,
	phone varchar(40) NULL,
	arrive timestamp NULL,
	depart timestamp NULL, 
	no_of_persons int4 NULL,
	is_payment bool NULL  DEFAULT false,
	room_no int4 null,
	constraint bookings_pkey PRIMARY KEY (booking_no),
	CONSTRAINT bookking_room_no_fkey FOREIGN KEY (room_no) REFERENCES rooms(room_no) on delete cascade)

