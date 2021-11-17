<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "wellcome: " . $_SESSION['user'];
}
else
{
    header("location:login.html");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 style="text-align: center; color: darkslategray;">WELLCOME TO MY PAGE</h2>
    <a style="text-align: center; text-decoration: none; cursor: pointer;" href="login.html">Back to login</a>
</body>
</html>