CREATE OR REPLACE FUNCTION hotelcrm.add_hotel(x varchar, y varchar)
 RETURNS void
 LANGUAGE plpgsql
AS $function$
	begin
		insert into hotels (hotel_name, hotel_address) values(x, y);
	end;
$function$
;



CREATE OR REPLACE FUNCTION hotelcrm.add_guest_all(xSurname varchar, xName varchar, xLastname varchar, xBday date, xDescr text,
xSerie integer, xNumber integer, xGivedate date, xWhogive text, xCountry varchar, xCity varchar, xStreet varchar, xRegDate date)
RETURNS bigint
 LANGUAGE plpgsql
AS $function$
	declare 
		xGuest_no bigint;
		xRes bigint;
	begin
		xRes = hotelcrm.add_guest(xSurname, xName, xLastname, xBday, xDescr);
		if xRes <> 0 Then
			raise exception 'Ошибка при добавлении гостя!';
		end if;
		xGuest_no = hotelcrm.get_last_guest_no();
		xRes = hotelcrm.add_passport(xGuest_no, xSerie, xNumber, xGivedate, xWhogive);
		if xRes <> 0 Then
			raise exception 'Ошибка при добавлении паспорта!';
		end if;
		xRes = hotelcrm.add_address(xCountry, xCity, xStreet, xRegDate)
		if xRes <> 0 Then
			raise exception 'Ошибка при добавлении адреса!';
		end if;
		return xGuest_no; 
	end;
$function$
;

CREATE OR REPLACE FUNCTION hotelcrm.add_guest(xSurname varchar, xName varchar, xLastname varchar, xBday date, xDescr text)
RETURNS bigint
 LANGUAGE plpgsql
AS $function$
declare
	xRes bigint;
	begin
		INSERT INTO hotelcrm.guest(firstname, "name", secondname, birthday, descr) VALUES(xSurname, xName, xLastname, xBday, xDescr);
		RETURN xRes = 1;
	end;
$function$
;

CREATE OR REPLACE FUNCTION hotelcrm.add_address(xCountry varchar, xCity varchar, xStreet varchar, xRegDate date)
RETURNS bigint
 LANGUAGE plpgsql
AS $function$
declare
	xRes bigint;
	begin
		INSERT INTO hotelcrm.address(guest_no, country, city, street, reg_data) VALUES(xCountry, xCity, xStreet, xRegDate);
		RETURN xRes = 1;
	end;
$function$
;


CREATE OR REPLACE FUNCTION hotelcrm.add_passport(xGuest_no bigint, xSerie integer, xNumber integer, xGivedate date, xWhogive text)
RETURNS bigint
 LANGUAGE plpgsql
AS $function$
declare
	xRes bigint;
	begin
		INSERT INTO hotelcrm.passports (guest_no, series, "number", givedate, who_give) VALUES(xGuest_no, xSerie, xNumber, xGivedate, xWhogive);
		RETURN xRes = 1;
	end;
$function$
;

create or REPLACE function hotelcrm.get_last_guest_no() 
	returns bigint
	LANGUAGE plpgsql
as $function$
	declare
		xGuest_no bigint;
	begin
		select guest_no into xGuest_no from hotelcrm.guest where guest_no = lastval();
		return coalesce(xGuest_no, 0);
	end
$function$;


