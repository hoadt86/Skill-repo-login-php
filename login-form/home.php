<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="icon" type="image/x-icon" href="../favicon.png">
</head>
<body>
   Hello
</body>
</html>