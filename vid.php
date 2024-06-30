<?php

include("VideoStream.php");

# get extension
$ext = pathinfo($_GET["vid"], PATHINFO_EXTENSION);

header("Access-Control-Allow-Origin: *");
header("Content-type: video/$ext");

$stream  = new VideoStream("./files/" . urldecode(trim($_GET["vid"])));
$stream->start();
