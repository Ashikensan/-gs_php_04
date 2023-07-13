<?php
//IDを発行
session_start();

$name = "tanaka";
$age = 38;

// echo $name . $age;
$_SESSION["name"] = $name;
$_SESSION["age"] = $age;

$id = session_id();

echo $id;




