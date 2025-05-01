<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php session_start(); echo "Welcome " .$_SESSION['username']; ?></title>
</head>
<body>
<?php
if(isset($_SESSION['username'])) {
     echo "Welcome ".$_SESSION['username'];
}else {
    header("Location: login.html");
}
?>


</body>
</html>