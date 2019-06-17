-- Drop table

-- DROP TABLE hotelcrm.bookings

CREATE TABLE hotelcrm.bookings (
	booking_no bigserial NOT NULL,
	firstname varchar(80) NULL,
	lastname varchar(80) NULL,
	email text NULL,
	gender varchar(40) NULL,
	phone varchar(40) NULL,
	arrive timestamp NULL,
	depart timestamp NULL,
	no_of_persons int4 NULL,
	is_payment bool NULL DEFAULT false,
	room_no int4 NULL,
	CONSTRAINT bookings_pkey PRIMARY KEY (booking_no),
	CONSTRAINT bookking_room_no_fkey FOREIGN KEY (room_no) REFERENCES rooms(room_no) ON DELETE CASCADE
)
WITH (
	OIDS=FALSE
);

-- Drop table

-- DROP TABLE hotelcrm.employees

CREATE TABLE hotelcrm.employees (
	employee_no bigserial NOT NULL,
	firstname varchar(80) NULL,
	lastname varchar(80) NULL,
	CONSTRAINT employees_pkey PRIMARY KEY (employee_no)
)
WITH (
	OIDS=FALSE
);

-- Drop table

-- DROP TABLE hotelcrm.rooms

CREATE TABLE hotelcrm.rooms (
	room_no bigserial NOT NULL,
	"number" int4 NULL,
	room_type varchar(40) NULL,
	capacity int4 NULL,
	price int4 NULL DEFAULT 0,
	descr text NULL,
	hotel_no int4 NULL,
	is_booked bool NULL DEFAULT false,
	CONSTRAINT rooms_pkey PRIMARY KEY (room_no)
)
WITH (
	OIDS=FALSE
);
