<?php

function calcArea($top, $bottom, $height)
{
    return ($top + $bottom) * $height / 2;
}

function displayMsg($top, $bottom, $height, $area)
{
    $msg = <<<EOM

    台形のサイズ
    上程 : {$top}
    下程 : {$bottom}
    高さ : {$height}
    面積 : {$area}
    
    EOM;

    echo $msg;
}
