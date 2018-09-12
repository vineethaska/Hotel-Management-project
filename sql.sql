create table room1(
firstname varchar(20),
lastname varchar(39),
mobile bigint(10),
email varchar(20),
adult varchar(20),
childs varchar(20)
)
alter table rooms modify moblie number(10); 
alter table room1 add dates date;
 create table image(image longblob);
insert into room1(firstname,lastname,mobile,email,adult,childs,dates)
 values('','','','','','','');
select * from room1;
