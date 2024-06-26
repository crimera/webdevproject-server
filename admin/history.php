<?php
$result = $conn->query("select * from history");

if ($result) {
	$out = "[";
	while ($row = $result->fetch_array()) {
		$out .= ("{\"id\": $row[0], \"item\": $row[2]},");
	}
	$out = rtrim($out, ",");
	$out .= "]";

	echo $out;
}
