<?php

// should be in json format {name: "", transcript: [{start:"", end:"", caption:""}]}
$transcript = $_POST["transcript"];
$id = $_POST["id"];

$stmt = $conn->prepare("update history set history_item=? where id=?");
$stmt->bind_param("si", $transcript, $id,);
$result = $stmt->execute();

if ($result) {
	echo "success";
}
