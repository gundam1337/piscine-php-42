INSERT INTO ft_table (login, date_de_creation, groupe)
  SELECT login,date_de_creation, groupe
  FROM fiche_personne
  WHERE login LIKE '%a%' AND LENGTH(login) < 9
  ORDER BY login ASC
  LIMIT 0, 10;