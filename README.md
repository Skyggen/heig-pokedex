# heig-pokedex
Project school Heig-vd

## 1. Introduction

Le projet personnel consiste en un mini-projet réalisé par 1 personne. Le sujet est choisi par les étudiants et est validé par le professeur.

L'envergure du projet doit être réaliste par rapport au temps à disposition (env. 20 heures de travail par personne). Avant de débuter, un descriptif (0,5-1 p. A4 max) du projet doit être envoyée par e-mail (claude.philipona-nospam@heig-vd.ch, supprimer la chaîne -nospam). Le descriptif doit être validé avant le début du projet.

## 2. Le projet

### 2.1 principal
Le projet consiste à une page web où les utilisateurs vont avoir la possibilité de se donner un nom de dresseur et ensuite sur la page suivante de capturer des pokémons en appuyant sur un bouton qui ira chercher un pokémon aléatoire dans la base de données qui regroupera 151 pokémons capturable. Ensuite le visiteur est invité a capturer ou laisser s’enfuire le pokémon. Si il le capture le pokémon est enregistré dans son pokedex ( encyclopédie de pokémon). Cet action ira écrire les informations suivante dans le pokédex (dateCapture, nbrCapture, noPokemon, nom, type(s), LastNomDresseur).

### 2.2 Option d’ajout 1 
Il existera des groupes de pokémon avec un différent taux de rencontre.

### 2.3 Difficulté rencontré
Le projet s'est déroulé généralement bien mais vu le manque de temps je n’ai pas pu complété totalement la base de donnée que j’aurai voulu donc avoir 151 pokémons capturables. Ils manque aussi les information comme le dernier dresseurs qui as capturer un certain pokémon en effet je ne voyais plus l'utilité de garder cette option, car elle demander du temps en plus à investir pour la réaliser mais n’est pas très utile au fonctionnement de l’application.


## 3. Installation

Attention, cette application nécessite l'installation de Smarty sur le serveur. Si celui-ci n'est pas présent il est accessible ici: https://www.smarty.net/
- Télécharger la totalité du projet
- Décompresser l'archive
- Placer le contenu du dossier à l'endroit voulu sur le serveur (racine ou pas)
- Importez le fichier adrien.ciampone.sql dans votre base de données (celui contient la structure de la base de données ainsi que quelque pokémons qui on été implémenté et aussi des utilisateurs
- Ouvrir le fichier config.php et le modifier en fonction de votre configuration

  Username = Utilisateur de la BDD
  Password = Mot de passe de la BDD
  Database = Nom de la BDD

