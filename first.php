<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redirect Automatically</title>
</head>
<body>
<?php
if ($_GET['er']=='empty'){
    echo 'You are Redirected. Please Enter your name';
}
?>
<form action="second.php" method="post">
    <input type="text" name="name">
    <input type="submit" value="SEND">
</form>
</body>
</html>