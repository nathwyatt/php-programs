CREATE DATABASE user_management; 

CREATE TABLE user (
UserId int NOT NULL IDENTITY,
UserName varchar (15) NOT NULL ,
Password varchar (25) NOT NULL ,
userRole varchar (25) NOT NULL ,
) ON PRIMARY;