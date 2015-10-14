use f33ee;
create table authorized_users ( name varchar(20), 
                                password varchar(40),
                                        primary key     (name)
                              );
insert into authorized_users values ( 'username', 
                                      'password' );

insert into authorized_users values ( 'testuser', 
                                      sha1('password') );

flush privileges;
