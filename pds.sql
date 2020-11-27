mysql -u root;

Sprint1: PDS represents Pickup Delivery System;
Sprint2: changed into LoveLifePDS;
drop table users; //delete previous user table

create table users(
	user_id serial primary key,
	username varchar(20),
	password char(40),
	firstname varchar(20) NOT NULL,
	lastname varchar(40) NOT NULL,
	phone INT(10),
	address varchar(40) NOT NULL,
	postcode INT(4),
	email varchar(50),
	reg_date datetime,
	user_type varchar(20)
);

create table orders(
	order_number serial primary key,
	customer_id varchar(20) NOT NULL,
	customer_name varchar(20) NOT NULL,
	start_location varchar(40) NOT NULL,
	start_postcode INT(4),
	destination_customer varchar(20) NOT NULL,
	phone varchar(10),
	destination_location varchar(40) NOT NULL,
	destination_postcode INT(4),
	parcelstatus varchar(20),
	paymentstatus varchar(10),
	cost int(10),
	driver_id INT(10) ,
	order_date datetime
);


create table admins(
	admin_id serial primary key,
	admin_username varchar(20) NOT NULL,
	admin_password char(40) NOT NULL,
	user_type varchar(20) NOT NULL
);

//Manually create Administrators
insert into admins values(null,'alber',SHA('abc123'),'admin');
insert into admins values(null,'fiona',SHA('abc123'),'admin');