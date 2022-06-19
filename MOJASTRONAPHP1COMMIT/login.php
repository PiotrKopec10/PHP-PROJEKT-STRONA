<?php

include 'functions.php';
session_start();

if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($login, $_POST['email']);
    $pass = mysqli_real_escape_string($login, md5($_POST['password']));

    $select = mysqli_query($login, "SELECT * FROM users_new WHERE email = '$email' AND password = '$pass'") or die('Coś poszło nie tak :(');

    if(mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_assoc($select);
        $_SESSION['id'] = $row['id'];
        $_SESSION['email']=$row['email'];
        $query="Select isadmin from users_new where email = '$email'";
        $result=mysqli_query($login,$query);
        $record=mysqli_fetch_assoc($result);

        if($record['isadmin']==1)
        {
            $_SESSION['admin']=1;
        }
        else
        {
            $_SESSION['admin']=0;
        }
        header('location:index.php');
    }else{
        $message[] = 'błędny email lub hasło!';
    }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaloguj się</title>


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
        <h3>Zaloguj się</h3>
        <input type="email" name="email" required placeholder=" email" class="box">
        <input type="password" name="password" required placeholder=" password" class="box">
        <input type="submit" name="submit" class="btn" value="Zaloguj">
        <p>Zarejestruj się <a href="register.php">Tutaj</a></p>
    </form>

</div>

</body>
</html>

















































