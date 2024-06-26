<?php
$user_id = $_SESSION["user_id"];

$result = $conn->query("select * from history where user_id = $user_id");


if ($result) {
	$out = "[";
	while ($row = $result->fetch_array()) {
		$out .= ("{\"id\": $row[0], \"item\": $row[2], \"audio\": \"$row[3]\"},");
	}
	$out = rtrim($out, ",");
	$out .= "]";

	echo $out;
}
