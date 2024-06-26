<?php

$result = $conn->query("select * from user_tbl");

if ($result) {
	$out = "[";
	while ($row = $result->fetch_array()) {
		$admin = $row[4] == "1" ? "true" : "false";
		$banned = $row[5] == "1" ? "true" : "false";
		$out .= ("{\"id\": $row[0], \"username\": \"$row[1]\", \"password\": \"$row[2]\", \"email\": \"$row[3]\", \"admin\": $admin, \"banned\": $banned },");
	}
	$out = rtrim($out, ",");
	$out .= "]";

	echo $out;
}
