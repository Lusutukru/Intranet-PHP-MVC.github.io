-- pas demandé mais pratique
DROP database if exists DB_movies_anthropocene; 

CREATE database DB_movies_anthropocene;
USE DB_movies_anthropocene;

CREATE table movies(
   id integer auto_increment,
   titre varchar(30) not null,
   annee integer not null,
   realisateur varchar(20) not null,
   primary key(id)
);

INSERT INTO movies VALUES
   (null, "Une vérité qui dérange-mysql", 2006, "Davis Guggenheim"),
   (null, "Don't look up", 2021, "Adam McKay"),
   (null, "Beasts of the southern wild", 2012, "Benh Zeitlin"),
   (null, "Melencholia", 2011, "Lars von Trier"),
   (null, "Sauve qui peut (la vie)", 1980, "Jean-Luc Godard"),
   (null, "Nope", 2022, "Jordan Peele"),
   (null, "L'amour à mort", 1984, "Alain Resnais");

-- 12
SELECT id, titre, realisateur, annee
FROM movies 
ORDER BY annee;

-- 13
SELECT   *
FROM movies 
WHERE annee <=2000;	

-- 14
SELECT  *
FROM movies 
WHERE realisateur like "%Jean%"
ORDER BY realisateur;

-- 15 
SELECT realisateur, count(*) as nb_films
FROM movies 
GROUP BY realisateur;

-- 16
SELECT 
   id, titre, annee, 
   (annee DIV 10)*10 AS decennie, 
   realisateur
FROM movies 
ORDER BY decennie, realisateur;

