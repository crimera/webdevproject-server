<?php

$out =  shell_exec("mysqldump -udingle -pdingle transcriptordb");
echo $out;
