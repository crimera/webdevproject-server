<?php

$id = $_POST["id"];

$result = $conn->query("delete from history where id=$id");

if ($result) {
	echo "success" . $id;
}
