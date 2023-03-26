
/*connexion au serveur*/
\connect root@localhost
    Developpeur...;
/*passage en mode \sql car le mode par défaut du sheel est mysql Js*/    
\sql

/*création de la base de donnée */
CREATE DATABASE foodly;

/*connection a ma base de donné foodly*/
    USE foodly;

/*création de mes tables notament les tables utilisateur et aliments */
CREATE TABLE utilisateur (

id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,

nom VARCHAR(100),

prenom VARCHAR(100),

email VARCHAR(255) NOT NULL UNIQUE

);

CREATE TABLE aliment (

id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,

nom VARCHAR(100) NOT NULL,

marque VARCHAR(100),

sucre FLOAT,

calories INTEGER NOT NULL,

graisses FLOAT,

proteines FLOAT,

bio BOOLEAN DEFAULT false

);

/*création d'un utilisateur dans la table utilisateur */
INSERT INTO `utilisateur` (`nom`,`prenom`,`email`) VALUES ('EBANETH','Pierre','ebaneth1402@gmail.com');
INSERT INTO `utilisateur` (`nom`,`prenom`,`email`) VALUES ('kog','king','pierrekalifa@gmail.com');
INSERT INTO `utilisateur` (`nom`,`prenom`,`email`) VALUES ('Etough','darel','pierreebaneth@gmail.com'), ('china','darlone','chinadarlone@gmail.com');

/*création des produits de la tabl aliments*/
INSERT INTO `aliments` (`nom`,`marque`,`sucre`,`calories`,`graisses`,`proteines`) VALUES ('lait','mbolo',4.5,59,3.9,1.1), ('oeuf','mbolo',0.6,82,5.8,6.9);
INSERT INTO `aliments` (`nom`,`marque`,`sucre`,`calories`,`graisses`,`proteines`) VALUES ('tomate','Ck2',27.5,134,0.2,1.1), ('pomme','casino',19.1,72,0.2,0.4);