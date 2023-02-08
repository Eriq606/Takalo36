create table identifiant(
    ididentifiant int primary key auto_increment,
    email varchar(20) not null,
    motdepasse varchar(20) not null
);
create table residence(
    idresidence int primary key auto_increment,
    nom varchar(20) not null
);
create table categorie(
    idcategorie int primary key auto_increment,
    nom varchar(20) not null
);
create table utilisateur(
    idutilisateur int primary key auto_increment,
    ididentifiant int,
    nom varchar(20) not null,
    prenom varchar(50),
    dateNaissance date,
    idresidence int,
    idimageutilisateur int,
    foreign key (ididentifiant)
        references identifiant(ididentifiant),
    foreign key (idresidence)
        references residence(idresidence),
    foreign key (idimageutilisateur)
        references imageUtilisateur(idImageUtilisateur)
);
create table object(
    idobject int primary key auto_increment,
    idUtilisateur int,
    titre varchar(100) not null,
    description varchar(200),
    prixEstimatif decimal,
    idCategorie int,
    idimageobject int,
    foreign key (idUtilisateur)
        references utilisateur(idutilisateur),
    foreign key (idCategorie)
        references categorie(idcategorie),
    foreign key (idimageobject)
        references imageObject(idImageObject)
);
create table imageObject(
    idImageObject int primary key auto_increment,
    idObject int,
    urlImage varchar(20),
    foreign key idObject
        references object(idobject)
);
create table imageUtilisateur(
    idImageUtilisateur int primary key auto_increment,
    idutilisateur int,
    urlImage varchar(20),
    foreign key (idutilisateur)
        references utilisateur(idutilisateur)
);
create table Invitation(
    idInvitation int primary key auto_increment,
    idSender int,
    idDestinataire int,
    idObjectDemande int,
    idObjectPropose int,
    dateInvite date,
    heureInvite time,
    foreign key (idSender)
        references utilisateur(idutilisateur),
    foreign key (idDestinataire)
        references utilisateur(idutilisateur),
    foreign key (idObjectDemande)
        references object(idobject),
    foreign key (idObjectPropose)
        references object(idobject)
);
create table InvitationAccept(
    idInvitationAccept int primary auto_increment,
    idInvitation int,
    dateInvAccept date,
    heureInvAccept time,
    foreign key (idInvitation)
        references Invitation(idInvitation)
);
create table InvitationRefus(
    idInvitationRefus int primary key auto_increment,
    idInvitation int,
    dateInvRefus date,
    heureInvRefus time,
    foreign key (idInvitation)
        references Invitation(idInvitation)
);

create or replace view objetcomplet as select object.*, utilisateur.nom, categorie.nom as nomcategorie from object join utilisateur on object.idutilisateur=utilisateur.idutilisateur join categorie on object.idcategorie=categorie.idCategorie;

create or replace view invitationcomplet as select Invitation.*, utilisateur.idutilisateur, object.idobject from Invitation join utilisateur.idutilisateur=Invitation.idSender join Invitation on object.idoject=Invitation.idObjectDemande join invitation on utilisateur.idutilisateur=Invitation.idDestinataire join Invitation on object.idobject=Invitation.idObjectDemande;

select count(idutilisateur) from utilisateur;
select count(idInvitationAccept) from InvitationAccept;

select * from Invitation where idInvitation in (select idInvitationAccept from InvitationAccept) and (idObjectDemande=idobject or idObjectPropose=idobjec);
