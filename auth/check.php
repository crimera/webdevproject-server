<?php
if (isset($_SESSION["user_id"])) {
	echo $_SESSION["username"];
}
