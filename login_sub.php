<?php
include("class/user.php");
$login = new users;
extract($_POST);

$login->login($e,$p);
?>