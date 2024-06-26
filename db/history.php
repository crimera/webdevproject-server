<?php

include("config.php");

global $conn;

$result = $conn->query("select * from history");

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		print_r($row);
	}
}
