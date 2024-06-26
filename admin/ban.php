<?php

$id = $_POST["id"];

$result = $conn->query("update user_tbl set banned=true where id=$id");

if ($result) {
	echo "success";
}
