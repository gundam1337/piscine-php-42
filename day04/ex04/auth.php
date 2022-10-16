<?php

function auth($login, $passwd)
{
    $users_db = unserialize(file_get_contents('../htdocs/private/passwd'));
	$exist = false;
    
    foreach ($users_db as $key => $user) {
    
        if ($user['login'] === $login && $user['passwd'] === hash('whirlpool', $passwd)) 
        {
            $exist = true;
        }
    }
    if ($exist)
        return true;
    return false;
}

?>
