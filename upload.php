<?php

if (!file_exists("files/" . $_FILES['file']['name'])) {
	if (isset($_FILES['file']['name'])) {
		move_uploaded_file($_FILES['file']['tmp_name'], "files/" . $_FILES['file']['name']);
	}

	$filename = $_FILES['file']['name'];
	$split = explode(".", $filename);
	$ext = $split[count($split) - 1];
	$basename = rtrim($filename, ".$ext");

	shell_exec("/usr/bin/ffmpeg -i 'files/$filename' -ss 00:00:01.000 -vframes 1 'thumbs/$basename.jpg'");
}
