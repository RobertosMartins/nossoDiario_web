<?php

$con = mysqli_connect("localhost","root","87717485","nossoDiario");

$name = $_POST["name"];
$age = $_POST["age"];
$password = $_POST["password"];
$username = $_POST["username"];

var_dump($con);
//
//$statement = mysqli_prepare($con, "INSERT INTO User (name, age, username, password) VALUES (?, ?, ?, ?) ");
//
//mysqli_stmt_bind_param($statement, "siss", $name, $age, $username, $password);
//mysqli_stmt_execute($statement);
//
//mysqli_stmt_close($statement);
//
//mysqli_close($con);

