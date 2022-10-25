SELECT count(duration) 
FROM film
WHERE duration < 42 or duration = 42;

/* or we can use this solution */

SELECT COUNT(*) AS `nb_short-films`
FROM `film`
WHERE `duration` <= 42;
