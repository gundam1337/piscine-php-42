SELECT last_name, first_name ,birthdate
FROM user_card
WHERE (birthdate like '%1989%')
ORDER BY `last_name` ASC;
/*or we can use this sloution is the same */
SELECT `last_name`, `first_name`, DATE(`birthdate`) AS 'birthdate'
FROM `user_card`
WHERE YEAR(`birthdate`) = '1989'
ORDER BY `last_name` ASC;
