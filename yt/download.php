<?php

$link = $_POST["vidlink"];

// getFilename
$filename = shell_exec("yt-dlp -f 'bv[height<=480]+ba' '$link' -o '%(title)s.%(ext)s' --skip-download --print filename");

// downloadingFile
shell_exec("yt-dlp --write-thumbnail -f 'bv[height<=480]+ba' '$link' -o 'files/%(title)s.%(ext)s'");


$ext = pathinfo($filename, PATHINFO_EXTENSION);
$basename = basename($filename, ".$ext");

shell_exec("ffmpeg -y -i 'files/$basename.webp' 'thumbs/$basename.jpg'");
shell_exec("rm 'files/$basename.webp'");

echo $filename;
