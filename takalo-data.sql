insert into identifiant values(null, 'eriq@mail', 'passeriq');
insert into residence values(null, 'Antananarivo');
insert into utilisateur values(null, 1, 'Eriq', 'RohWeltall', '2004-02-15', 1, 'eriq.jpg');

insert into identifiant values(null, 'ken@gmail.com', 'passken');
insert into residence values(null, 'Diego');
insert into utilisateur values(null, 2, 'Maharavo', 'Kenzo', '2004-01-30', 2, 'kenzo.jpg');

insert into identifiant values(null, 'mahefa@gmail.com', 'passmah');
insert into residence values(null, 'Tana');
insert into utilisateur values (null, 3, 'Mahefa', 'rsm-mah', '2004-03-23', 3, 'mahefa.jpg');

insert into categorie values(null, 'vetements');
insert into categorie values(null, 'outils');
insert into categorie values(null, 'multimedias');

insert into object values(null, 1, 'tee-shirt', 'ceci est l object numero 1', 7.99, 1, 'teeshirt.jpg');
insert into object values(null, 2, 'marteau', 'ceci est l object numero 2', 13.99, 2, 'marteau.jpg');
insert into object values(null, 3, 'mixeur', 'ceci est l object numero 3', 8.99, 3, 'mixeur.jpg');
insert into object values(null, 3, 'radio', 'ceci est une radio', 20.19,3,'radio.jpg');

insert into Invitation values(null, 1, 2, 1, 3, '2005-01-12', '00:00:45');
insert into Invitation values(null, 2, 1, 3, 1, '2005-03-15', '10:30:10');
insert into Invitation values(null, 3, 1, 2,2, '2022-01-01', "08:08:08");

insert into InvitationAccept values(1, '2005-01-12', '06:00:57');

insert into InvitationRefus values (3, '2022-12-01', '15:45:00');