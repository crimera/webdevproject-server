<?php

# get extension
$ext = pathinfo($_GET["vid"], PATHINFO_EXTENSION);

header("Access-Control-Allow-Origin: *");
header("Content-type: video/$ext");

readfile("./files/" . urldecode(trim($_GET["vid"])));
