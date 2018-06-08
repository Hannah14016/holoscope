<?php

$fortune = array(
    "大吉",
    "中吉",
    "小吉",
    "吉",
    "末吉",
    "凶",
    "大凶"
    );

        $count = count($fortune);
            $random = mt_rand(0,$count - 1);
                $result = $fortune[$random];

    echo "今日のあなたの運勢は" . $result . "です。" . PHP_EOL;

        if ($result == "大吉") {
            echo "おめでとう！" . PHP_EOL;
        }
        elseif ($result == "凶") {
            echo "気をつけよう。" . PHP_EOL;
        }
        elseif ($result == "大凶") {
            echo "よく考えて行動しよう。" . PHP_EOL;
        }
        else {
            echo "良いことがあるかも。" . PHP_EOL;
        }
    
$item = array(
    "ハンカチ",
    "だてメガネ",
    "椅子",
    "長財布",
    );

        $count = count($item);
            $i_random = mt_rand(0,$count - 1);
                $item_result = $item[$i_random];
    
$color = array(
    "ピンクの",
    "オレンジの",
    "白い",
    "赤い",
    "黒い",
    );

    $count = count($color);
        $c_random = mt_rand(0,$count - 1);
            $color_result = $color[$c_random];    
    
    echo "ラッキーアイテムは" . $color_result . $item_result . PHP_EOL;
    
    
