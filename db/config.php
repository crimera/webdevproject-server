<?php

global $conn;

$conn = new mysqli("localhost", "dingle", "dingle", "transcriptordb");

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
