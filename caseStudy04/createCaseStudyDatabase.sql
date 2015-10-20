use f33ee;

create table if not exists customers(
	customerid int unsigned not null auto_increment primary key,
	name char(50) not null,
	address char(100) not null,
	city char(30) not null
);

create table if not exists orders(
	orderid int unsigned not null auto_increment primary key,
	customerid int unsigned not null,
	amount float,
	date date not null
);

create table if not exists products(
	productid int unsigned not null auto_increment primary key,
	name char(50) not null,
	description char(140) not null,
	price float not null
);

create table if not exists order_items(
	orderid int unsigned not null,
	productid int not null,
	quantity tinyint unsigned, 
	
	primary key(orderid, productid)
);

