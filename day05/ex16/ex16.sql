SELECT count(`date`) AS movies
FROM `member_history`
WHERE `date` BETWEEN '10-30-2006' AND '07-27-2007'
    OR (DATE_FORMAT(`date`, '%m-%d') = DATE_FORMAT('2000-12-24', '%m-%d'));