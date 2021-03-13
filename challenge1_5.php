<?php

$hp = 10000;

while ($hp > 0) {
    echo "攻撃技は？" . PHP_EOL . "1.剣 2.魔法 3.打撃" . PHP_EOL;

    $msg = trim(fgets(STDIN));
    switch ($msg) {
        case 1:
        case 2:
        case 3:
            $damage = rand(500, 3000);

            if ($damage >= 2000) {
                echo 'クリティカルヒット！！' . PHP_EOL;
            }
            if ($hp - $damage > 0) {
                $hp -= $damage;
            } else {
                $hp = 0;
            }
            echo '攻撃力' . $damage . 'の攻撃！' . PHP_EOL;
            echo 'HP: ' . $hp . PHP_EOL;
            break;
        default:
            echo '攻撃に失敗！' . PHP_EOL;
    }
}
echo '敵を倒した!!' . PHP_EOL;
