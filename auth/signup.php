<?php

include("../db/config.php");

global $conn;

$username = $_POST["username"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$email = $_POST["email"];

$stmt = $conn->prepare("insert into user_tbl(username, password, email) values (?, ?, ?)");
$stmt->bind_param("sss", $username, $password, $email);
$result = $stmt->execute();

if ($result) {
	echo "success";
}
