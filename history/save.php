<?php
header("Access-Control-Allow-Origin: *");

$user_id = $_SESSION["user_id"];
// should be in json format {name: "", transcript: [{start:"", end:"", caption:""}]}
$transcript = $_POST["transcript"];
$audio = $_POST["audio"];

$isAudio = 0;
if ($audio == "true") {
	$isAudio = 1;
}

$stmt = $conn->prepare("insert into history(user_id, history_item, audio) values (?, ?, ?)");
$stmt->bind_param("isi", $user_id, $transcript, $isAudio);
$result = $stmt->execute();

if ($result) {
	echo "success";
}
