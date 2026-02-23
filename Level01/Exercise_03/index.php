<?php

require_once "User.php";


$user = new User("Mari");

echo $user;

echo "<br><br>";

$user->noMethod("hola", "adeu");
