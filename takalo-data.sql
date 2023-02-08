insert into identifiant values(null, 'eriq@mail', 'passeriq');
insert into residence values(null, 'Antananarivo');
insert into utilisateur values(null, 1, 'Eriq', 'RohWeltall', '2004-02-15', 1);

insert into identifiant values(null, 'ken@gmail.com', 'passken');
insert into residence values(null, 'Diego');
insert into utilisateur values(null, 2, 'Maharavo', 'Kenzo', '2004-01-30', 2);

insert into identifiant values(null, 'mahefa@gmail.com', 'passmah');
insert into residence values(null, 'Tana');
insert into utilisateur values (null, 3, 'Mahefa', 'rsm-mah', '2004-03-23', 3);

insert into identifiant values(null, 'root@gmail.com', 'root');
insert into residence values(null, 'Tana');
insert into utilisteur values(null, 'root', 'root', '2023-01-01');

insert into categorie values(null, 'vetements');
insert into categorie values(null, 'outils');
insert into categorie values(null, 'multimedias');

insert into object values(null, 1, 'lamba', 'ceco est un lamba', 19.23, 1);
insert into object values(null, 1, 'polo', 'ceci est un lamba', 17.22, 1);
insert into object values(null, 1, 'chemise', 'ceci est un lamba', 17, 1);
insert into object values(null, 1, 'shirt', 'ceci est un lamba', 20, 1);
insert into object values(null, 2, 'outil', 'ceci est un outil', 25, 2);
insert into object values(null, 2, 'phone', 'ceci est un multimedia', 15, 3);
insert into object values(null, 2, 'iphone', 'ceci est un multimedia', 16, 3);
insert into object values(null, 3, 'ordiportable', 'ceci est un multimedia', 16.50, 3);
insert into object values(null, 3, 'radio', 'ceci est un multimedia', 13.18, 3);
insert into object values(null, 3, 'samsung', 'ceci est un multimedia', 17.99, 3);

insert into imageObject values(null, 1, 'chemise.jfif');
insert into imageObject values(null, 1, 'colashirt.jfif');
insert into imageObject values(null, 1, 'hoodie.jfif');

insert into imageObject values(null, 2, 'hoodiezipable.png');
insert into imageObject values(null, 2, 'manTshirt.jfif');
insert into imageObject values(null, 2, 'menHoodie.jfif');

insert into imageObject values(null, 3, 'pantalon.jfif');
insert into imageObject values(null, 3, 'pantalonblanc.jfif');
insert into imageObject values(null, 3, 'pantalonbleu.jfif');

insert into imageObject values(null, 4, 'sweetshirt.jfif');
insert into imageObject values(null, 4, 'TshirtLGBTQ.jfif');
insert into imageObject values(null, 4, 'Tshirtnoir.jfif');

insert into imageObject values(null,5,'cisaille.jfif');
insert into imageObject values(null,5,'lima.jfif');
insert into imageObject values(null,5,'outiltsyfantako.jfif');
insert into imageObject values(null,5,'rapeplate.jfif');

insert into imageObject values(null,6,'decotv.jfif');
insert into imageObject values(null,6,'galax22.jfif');
insert into imageObject values(null,6,'iphon.jfif');

insert into imageObject values(null,7,'iphone13.jfif');
insert into imageObject values(null,7,'iphonse2.jfif');
insert into imageObject values(null,7,'Living.jfif');

insert into imageObject values(null,8,'panelura.jfif');
insert into imageObject values(null,8,'mac.jfif');
insert into imageObject values(null,8,'pc.jfif');

insert into imageObject values(null,9,'pchuawei.jfif');
insert into imageObject values(null,9,'radio.jfif');
insert into imageObject values(null,9,'radio1.jfif');

insert into imageObject values(null,10,'samgalax20.png');
insert into imageObject values(null,10,'samgalax22.png');


insert into Invitation values(null, 1, 2, 1, 3, '2005-01-12', '00:00:45');
insert into Invitation values(null, 2, 1, 3, 1, '2005-03-15', '10:30:10');
insert into Invitation values(null, 3, 1, 2,2, '2022-01-01', "08:08:08");

insert into InvitationAccept values(1, '2005-01-12', '06:00:57');

insert into InvitationRefus values (3, '2022-12-01', '15:45:00');