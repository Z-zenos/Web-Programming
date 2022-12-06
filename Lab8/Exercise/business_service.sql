DROP DATABASE IF EXISTS BUSINESS_SERVICE;
CREATE DATABASE BUSINESS_SERVICE;
USE BUSINESS_SERVICE;

CREATE TABLE Businesses
(
    Business_ID int not null primary key auto_increment,
    Name varchar(100) unique not null,
    Address varchar(100) not null,
    City varchar(20) not null,
    Telephone varchar(15) not null,
    URL varchar(50)
);

CREATE TABLE Categories
(
    Category_ID varchar(20) primary key,
    Title varchar(100) not null,
    Description varchar(256)
);

CREATE TABLE Biz_Categories
(
    Business_ID int not null auto_increment,
    Category_ID varchar(20),
    primary key (Business_ID, Category_ID),
    constraint fk_bcb foreign key (Business_ID) references Businesses(Business_ID) on update cascade on delete cascade ,
    constraint fk_bcc foreign key (Category_ID) references Categories(Category_ID) on update cascade on delete cascade
);

insert into Categories (Category_ID, Title, Description)
values
    ("AUTO", "Automotive Parts and Supplies", "Accessories for your car"),
    ("FISH", "Seafood Stores and Restaurants", "Place to get your fish"),
    ("HEALTH", "Health And Beauty", "Everything for the body"),
    ("SCHOOL", "Schools and Colleges", "Public and Private Learning"),
    ("SPORTS", "Community Sports and Recreation", "Guide to Parks and Leagues");