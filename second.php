<?php
$name=$_POST['name'];
if($name !=""){
    Echo "Dear ".$name." Welcome to the Second page";
}else{
    echo 'Please Enter Your name, You will automatically redirected to the first page <meta http-equiv="refresh" content="3;url=first.php?er=empty">';
}