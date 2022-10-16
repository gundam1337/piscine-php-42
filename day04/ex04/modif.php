<?php
	if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] &&  $_POST['submit'] == "OK") {
        if (!file_exists('../private')) {
            mkdir("../private");
        }
        if (!file_exists('../private/passwd')) {
            file_put_contents('../private/passwd', null);
        }
	    $users_db = unserialize(file_get_contents('../htdocs/private/passwd'));
		$exist = false;
		foreach ($users_db as $key => $value) {
			if ($value['login'] === $_POST['login'] && $value['passwd'] === hash('whirlpool', $_POST['oldpw'])) {
				$exist = true;
                $users_db[$key]['passwd'] = hash('whirlpool', $_POST['oldpw']);
            }
		}
		if ($exist) {
			file_put_contents('../htdocs/private/passwd', serialize($users_db));
            header('Location: index.html');
			echo "OK\n";
		} else {
			echo "ERROR\n";
		}
	} else {
		echo "ERROR\n";
	}
?>
