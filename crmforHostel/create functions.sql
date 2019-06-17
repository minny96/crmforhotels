--Функция добавления номера

CREATE OR REPLACE FUNCTION hotelcrm.add_room(xnumber integer, xtype character varying, xcapacity integer, xprice integer, xdescr text, xhotel_no integer, xbooking boolean)
 RETURNS boolean
 LANGUAGE plpgsql
AS $function$
	begin
		INSERT INTO hotelcrm.rooms ("number", room_type, capacity, price, descr, hotel_no, is_booked) VALUES(xnumber, xtype, xcapacity, xprice, xdescr, xhotel_no, xbooking);	
		return true; 
	end;
$function$;

--Функция добавления бронирования
CREATE OR REPLACE FUNCTION hotelcrm.add_bookings(xfirstname character varying, xlastname character varying, xemail text, xgender character varying, xphone character varying, xarrive timestamp without time zone, xdepart timestamp without time zone, xno_of_persons integer, xis_payment boolean, xroom_no integer)
 RETURNS boolean
 LANGUAGE plpgsql
AS $function$
	begin
		INSERT INTO hotelcrm.bookings (firstname, lastname, email, gender, phone, arrive, depart, no_of_persons, is_payment, room_no) VALUES(xfirstname, xlastname, xemail, xgender, xphone, xarrive, xdepart, xno_of_persons, false, xroom_no);
		return true; 
	end;
$function$;


-- функция добавления 
CREATE OR REPLACE FUNCTION hotelcrm.add_employees(xfirstname character varying, xlastname character varying, xposition character varying, xdateofin date, xcountofhours integer)
 RETURNS boolean
 LANGUAGE plpgsql
AS $function$
	begin
		INSERT INTO hotelcrm.employees (firstname, lastname, position, dateofin, countofhours) VALUES((xfirstname, xlastname, xposition, xdateofin, xcountofhours);
		return true; 
	end;
$function$;


