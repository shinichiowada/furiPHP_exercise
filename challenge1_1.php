<?php

date_default_timezone_set('Asia/Tokyo');
$date = new DateTime('now');
echo $date->format("現在時刻" . ":" .  "H時i分s秒");