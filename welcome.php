<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php session_start(); echo "Welcome " .$_SESSION['user']; ?></title>
</head>
<body>
<?php
if(isset($_SESSION['user'])) {
     echo "Welcome ".$_SESSION['user'];
}else {
    header("location: login.html");
}
?>


</body>
</html>