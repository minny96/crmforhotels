--добавление отеля
CREATE OR REPLACE FUNCTION hotelcrm.add_hotel(x character varying, y character varying)
 RETURNS boolean
 LANGUAGE plpgsql
AS $function$
	begin
		insert into hotels(hotel_name, hotel_address) values(x, y);
		return true;
	end;
$function$;

--привязка менеджера к отелю
CREATE OR REPLACE FUNCTION hotelcrm.add_manager_to_hotel(xFirstname varchar, xName varchar, xHotel_no integer)
 RETURNS boolean
 LANGUAGE plpgsql
AS $function$
	begin
		INSERT INTO hotelcrm.manager (firstname, "name", hotel_no) VALUES(xFirstname, xName, xHotel_no);
		return true;
	end;
$function$;

--функция раскидывания данных по таблицам в БД
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
		xRes = hotelcrm.add_address(xGuest_no, xCountry, xCity, xStreet, xRegDate);
		if xRes <> 0 Then
			raise exception 'Ошибка при добавлении адреса!';
		end if;
		return xGuest_no; 
	end;
$function$;

--добавление информации о госте
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
$function$;

--добавление прописки
CREATE OR REPLACE FUNCTION hotelcrm.add_address(xGuest_no bigint, xCountry varchar, xCity varchar, xStreet varchar, xRegDate date)
RETURNS bigint
 LANGUAGE plpgsql
AS $function$
declare
	xRes bigint;
	begin
		INSERT INTO hotelcrm.address(guest_no, country, city, street, reg_data) VALUES(xGuest_no, xCountry, xCity, xStreet, xRegDate);
		RETURN xRes = 1;
	end;
$function$;

--добавление паспорта
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
$function$;

--получение номера последнего гостя
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


CREATE OR REPLACE FUNCTION hotelcrm.add_room(xSize integer, xFloor integer, xCategory varchar, xPrice money, xDescr text, xHotel_no integer, xBooking boolean)
RETURNS boolean
 LANGUAGE plpgsql
AS $function$
	declare 
		xRes boolean;
	begin
		xRes = INSERT INTO hotelcrm.rooms ("size", floor, category, price, descr, hotel_no, is_booked) VALUES(xSize, xFloor, xCategory, xPrice, xDescr, xHotel_no, xBooking);
		if xRes <> 0 Then
			raise exception 'Ошибка при добавлении комнаты!';
			xRes = false;
		end if;
		xRes = true;
		return xRes; 
	end;
$function$;