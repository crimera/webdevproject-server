<?php

header("Access-Control-Allow-Origin: *");
header("Content-type: image/jpeg");

readfile("./thumbs/" . urldecode(trim($_GET["img"])));
