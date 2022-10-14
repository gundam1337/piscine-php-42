<?php
    if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] == "OK")
    {
        if (file_exists("../htdocs") != true)
            mkdir("../htdocs");
        if (!file_exists('../htdocs/private'))
            mkdir('../htdocs/private');
            $users_db = unserialize(file_get_contents('../htdocs/private/passwd'));
            $if_exist = false;
            foreach($users_db as $key => $user)
            {
                if ($user["login"] === $_POST["login"])
                    $if_exist = true;
            }
        if ($if_exist)
        {
            echo "ERROR\n";
            
        }
        else
        {
            $users_db[] = array('login' => $_POST['login'], 'passwd' => hash('whirlpool', $_POST['passwd']));
            file_put_contents('../htdocs/private/passwd', serialize($users_db));
			echo "OK\n";
        }  
    }
    else
    {
        echo "ERROR\n";
        
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Create account</title>

</head>

<div class="center">
    
    <form action="create.php" method="POST">
      <div class="inputbox">
        <input type="login" name = "login" >
        <span>login</span>
      </div>
      <div class="inputbox">
        <input type="password" name="passwd" >
        <span>passwd</span>
      </div>
      <div class="inputbox">
        <input type="submit" name="submit" value="OK">
      </div>
    </form>
  </div>


</body>
</html>
