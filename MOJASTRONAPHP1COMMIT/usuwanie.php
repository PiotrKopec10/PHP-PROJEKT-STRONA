<?php


//include ('header.php');
//include ('functions.php');

?>

<?php

session_start();
$id = $_GET['id'];
echo '
<html>
<head>

</head>
<body>
Potwierdź usunięcie
<form method="post" action="usuwanie2.php?id='. $id .'">
<input type="submit" name="tak" value="TAK">
<a href="index.php"><input type="hidden">NIE</a>
</form>

</body>
</html>
';
?>

<?php
//include('footer.php')
//
//?>

