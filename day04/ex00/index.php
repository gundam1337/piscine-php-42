
<?php

//http://day04.ex00.42.fr/
    session_start();
    if($_GET['submit'] == "OK")
    {
        $_SESSION['login'] = $_GET['login'];
		$_SESSION['password'] = $_GET['password'];
    }
   
?>


<!DOCTYPE html>
<html>
<body>
    
<form action="index.php" method="get">

    <label for="uname"><b>login   :</b></label>
    <input type="text" placeholder="Enter Username" name="login" value = "<?php echo $_SESSION['login']; ?>">
    <br />
    <label for="psw"><b>Password :</b></label>
    <input type="password" placeholder="Enter Password" name="password" value = "<?php echo $_SESSION['password']; ?>">
    <br />
    <input type="submit" name="submit" value="OK" />
</form>

</body>
</html>
