SELECT LEFT(REVERSE(`phone_number`), LENGTH(REVERSE(`phone_number`))-2)  as 'rebmunenohp'
FROM `distrib`
WHERE `phone_number` LIKE '05%';

SELECT REVERSE(SUBSTRING(`phone_number`, 2)) AS `rebmunenohp`
FROM `distrib`
WHERE `phone_number` LIKE '05%';
/*WHERE REVERSE(`phone_number`) LIKE "%50";
/*LEFT(column, LENGTH(column)-6)
/*WHERE REVERSE(`phone_number`) LIKE "%50";

/*SELECT TRIM('#! ' FROM '    #SQL Tutorial!    ')