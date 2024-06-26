<?php


$id = $_POST["id"];

$result = $conn->query("select * from history where id=$id");

if ($result) {
	while ($row = $result->fetch_array()) {
		echo "{\"id\": $row[0], \"item\": $row[2]}";
	}
}
