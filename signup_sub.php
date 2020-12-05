<?php
include("class/user.php");
$register = new users;
extract($_POST);
$query = "insert into ('','$n','$e','$p')";
if ($register->user($query))
{
    register->url("index.php?run=success");
}


?>