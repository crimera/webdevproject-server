<?php
header("Access-Control-Allow-Origin: *");

$user_id = $_SESSION["user_id"];
// should be in json format {name: "", transcript: [{start:"", end:"", caption:""}]}
$transcript = $_POST["transcript"];

$stmt = $conn->prepare("insert into history(user_id, history_item) values (?, ?)");
$stmt->bind_param("is", $user_id, $transcript);
$result = $stmt->execute();

if ($result) {
	echo "success";
}
