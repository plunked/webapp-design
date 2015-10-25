use f33ee;

/*Going to use a simple model to store the data as it's a pain otherwise.*/

create table if not exists packages(
	packageid int unsigned not null auto_increment primary key,
	packagename char(140) not null,
	package_cost tinyint not null, 
	main_1_choices char(140) not null,
	main_2_choices char(140) not null,
	opt_1_choices char(140) not null,
	opt_2_choices char(140) not null
);

create table if not exists transactions(
	transactionid int unsigned not null auto_increment primary key,
	contact_name char(140) not null, 
	contact_number int(10) not null,
	contact_email char(140) not null,
	delivery_address char(140) not null,
	delivery_time char(140) not null,
	collection_time char(140) not null,
	payment_method char(140) not null,
	payment_amount tinyint unsigned not null,
	package_content text not null	
);

create table if not exists dishes(
	dish_id int unsigned not null auto_increment primary key, 
	dish_type char(140) not null,
	dish_name char(140) not null,
	dish_description char(140) not null,
	dish_img_location char(255) not null
);