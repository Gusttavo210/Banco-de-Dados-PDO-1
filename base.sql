create database if not exists agencyGH;

use agencyGH;

create table Home(
id int primary key auto_increment,
imagem varchar(255) not null,
titulo varchar(255) not null,
subheading text not null);

create table post(
id int primary key auto_increment,
post_title varchar(255) not null,
post_subtitle varchar(255) not null,
data varchar(30) not null);


create table about(
id int primary key auto_increment,
descricao text not null);

insert into Home (imagem, titulo, subheading) values 
('home-bg.jpg','Clean Blog', 'A Blog Theme by Start Bootstrap');

insert into post(post_title, post_subtitle, data) values
('Man must explore, and this is exploration at its greatest', 'Problems look mighty small from 150 miles up',  'Posted by Start Bootstrap on September 24, 2021'), 
("I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.", NULL, 'Posted by Start Bootstrap on September 18, 2021'), 
('Science has not yet mastered prophecy', 'We predict too much for the next year and yet far too little for the next ten.', 'Posted by Start Bootstrap  on August 24, 2021'), 
('Failure is not an option', 'Many say exploration is part of our destiny, but it’s actually our duty to future generations.', 'Posted by Start Bootstrap on July 8, 2021');

insert into about(descricao) values 
('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?'),
('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!'),
('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!');