<?php

$team_a = ["勇者", "戦士", "魔法使い"];
$team_b = ["盗賊", "忍者", "商人"];
$team_c = ["スライム", "ドラゴン", "魔王"];
$all_teams = [$team_a, $team_b, $team_c];

// 2次元配列は2つのインデックスで要素を指定する配列
echo $all_teams[0][0] . "\n";
echo $all_teams[0][1] . "\n";
echo $all_teams[0][2] . "\n";
echo $all_teams[1][0] . "\n";
echo $all_teams[1][1] . "\n";
echo $all_teams[1][2] . "\n";
echo $all_teams[2][0] . "\n";
echo $all_teams[2][1] . "\n";
echo $all_teams[2][2];
