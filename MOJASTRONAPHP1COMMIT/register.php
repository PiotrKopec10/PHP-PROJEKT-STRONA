<?php

include 'functions.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($login, $_POST['name']);
    $email = mysqli_real_escape_string($login, $_POST['email']);
    $pass = mysqli_real_escape_string($login, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($login, md5($_POST['cpassword']));

    $select = mysqli_query($login, "SELECT * FROM users_new WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if(mysqli_num_rows($select) > 0){
        $message[] = 'Użytkownik istnieje!';
    }else{
        mysqli_query($login, "INSERT INTO users_new(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
        $message[] = 'Zarejestrowano pomyślnie!';
        header('location:login.php');
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>


</head>
<body>

<?php
if(isset($message)){
    foreach($message as $message){
        echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
    }
}
?>

<div class="form-container">

    <form action="" method="post">
        <h3>Zarejestruj się </h3>
        <input type="text" name="name" required placeholder=" username" class="box">
        <input type="email" name="email" required placeholder=" email" class="box">
        <input type="password" name="password" required placeholder=" password" class="box">
        <input type="password" name="cpassword" required placeholder="password" class="box">
        <input type="submit" name="submit" class="btn" value="Zarejestruj się teraz!">
        <p>Posiadasz już konto? <a href="login.php">Zaloguj się</a></p>
    </form>

</div>

</body>
</html>