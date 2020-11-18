create database ibm_site
default character set utf8
default collate utf8_general_ci;

use ibm_site;

create table videos(
id int not null auto_increment,
link varchar(120) not null,
title varchar(60),
dates date,
minister varchar(40),
image varchar(15),
primary key (id)
) default charset = utf8;

insert into videos
(link, title, dates, minister, image)
values
('9kp6v7wmdwA', 'A Essência do discipulado', '2020-05-03', 'Prª Vânia Magny', 'AEDD.png');

insert into videos
(link, title, dates, minister, image)
values
('jfE3dsD7RtQ', 'O milagre no tanque de Betesda', '2020-05-10', 'Prª Josileia Abreu', 'generic.jpg');

insert into videos
(link, title, dates, minister, image)
values
('https://www.youtube.com/watch?v=cxAwlCyWTp4', 'Onde Está o Seu Olhar?', '2020-05-17', 'Pr. Luciano Magny', 'OESO.png');

insert into videos
(link, title, dates, minister, image)
values
('lVjczcf7wHU', 'Reconhecendo a importância do seu chamado', '2020-05-24', 'Prª Vânia Magny', 'generic.jpg');

insert into videos
(link, title, dates, minister, image)
values
('tcuRLLadRdw', 'Paulo, um Exemplo de Quem Persevera', '2020-06-14', 'Pr. Luciano Magny', 'PUEDQP.png');

insert into videos
(link, title, dates, minister, image)
values
('wMBtwiyI7BY', 'Perseverando na Luta Pela Família', '2020-06-21', 'Pr. Luciano Magny', 'PNLPF.png');

insert into videos
(link, title, dates, minister, image)
values
('ZmYOO5o_gHs', 'Perseverança na Comunhão', '2020-06-28', 'Pr. Luciano Magny', 'generic.jpg');

insert into videos
(link, title, dates, minister, image)
values
('https://www.youtube.com/watch?v=Ld8aVTwBucU', 'Levante-se Para o Próximo Nível', '2020-07-05', 'Prª Josileia Abreu', 'generic.jpg');

insert into videos
(link, title, dates, minister, image)
values
('bUrCYXnxEZs', 'Perseverando na Multiplicação', '2020-07-12', 'Pr. Luciano Magny', 'PNM.png');

insert into videos
(link, title, dates, minister, image)
values
('aAQlfWluBe0', 'Perseverando na Multiplicação - Parte 2', '2020-07-19', 'Pr. Luciano Magny', 'PNM.png');

insert into videos
(link, title, dates, minister, image)
values
('9qBWuXFqZg8', '"Nunca Te Abandonarei"', '2020-07-26', 'Pr. Luciano Magny', 'generic.jpg');

insert into videos
(link, title, dates, minister, image)
values
('hoWFt6Z0nH8', 'O Impacto da Paternidade', '2020-08-02', 'Prª Josileia Abreu', 'generic.jpg');

alter table videos
add column assunto varchar(10) after minister;

desc videos;

select * from videos
where assunto = 'Persev';