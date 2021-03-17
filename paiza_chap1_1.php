<?php
// 九九の表を作ろう！！
function multiply($x, $y) {
    return $x * $y;
}

for ($step = 0; $step < 9; $step++) {
    for ($num = 0; $num < 9; $num++) {
        echo multiply($step + 1, $num + 1);
        if ($num < 8) {
            echo " ";
        }
    }

    echo "\n";
}