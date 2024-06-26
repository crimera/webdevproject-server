<?php
$username = $_POST["username"];
$password = $_POST["password"];

$result = $conn->query("SELECT * FROM user_tbl WHERE username = '$username'");
if ($result->num_rows > 0) {
	while ($row = $result->fetch_array()) {
		$hashed_password = $row[2];

		if ($row["banned"] == "1") {
			echo "banned";
			return;
		}

		if (password_verify($password, $hashed_password)) {
			$_SESSION["username"] = $row["username"];
			$_SESSION["user_id"] = $row["id"];
			$_SESSION["admin"] = $row["admin"];
			echo "logged";
		}
	}
}
