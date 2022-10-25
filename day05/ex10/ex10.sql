SELECT title ,summary ,prod_year
FROM film ,genre
WHERE (genre.name ='erotic') 
and (film.id_genre = genre.id_genre)
ORDER BY film.prod_year DESC;

/*is the same output of this sql*/

SELECT `title` AS `Title`, `summary` AS `Summary`, `prod_year`
FROM `film`
INNER JOIN `genre` ON genre.id_genre = film.id_genre
WHERE genre.name = 'erotic'
ORDER BY `prod_year` DESC;
