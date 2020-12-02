<?php


exec("cd /var/www/kapita/sparrow/ && git pull", $out);

file_put_contents("result.txt",$out);