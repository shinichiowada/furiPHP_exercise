<?php

var_dump("年齢は？");
$age = trim(fgets(STDIN));

if ($age == 20) {
    var_dump("成人式ですね、おめでとう！");
} elseif ($age < 20) {
    var_dump("あなたは未成年です");
} else {
    var_dump("成人です");
}
