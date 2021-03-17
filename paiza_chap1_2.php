<?php
// スコープを理解しよう！！
function sum($x, $y) {
    echo "hello" . "\n";
    return $x + $y;
}

$num = sum($a, $b);
echo $num . "\n";