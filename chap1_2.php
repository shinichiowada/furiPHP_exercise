<?php
var_dump("上程は？");
$top = trim(fgets(STDIN));

var_dump("下程は？");
$bottom = trim(fgets(STDIN));

var_dump("高さは？");
$height = trim(fgets(STDIN));

$total = ($top + $bottom) * $height / 2;
var_dump("面積は" . $total);
