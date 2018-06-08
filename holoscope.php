<!DOCTYPE html>
<html lang="ja">
<html>
    <head>
        <meta charset="utf-8">
        <title>占いの館</title>
    </head>
    <body>
        <header>
            <h1>占いの館</h1>
        </header>
        <wrapper>
            あなたの星座は？
                <form action = "holoscope.php" method ="get">
                <input type="text" name="holoscope">
                <input type="submit" value="占う">
                </form>
        </wrapper>
        <footer></footer>
    </body>
</html>

<?php

     if(isset($_GET['holoscope'])) {
     $holoscope = $_GET['holoscope'];
     }
     
     $rank = mt_rand(1, 12);
     echo $holoscope . "のあなたの運勢は…" .  $rank . "位です" . PHP_EOL;
     
     if($rank == 1) {
         echo "絶好調";
     }
       elseif (2 <= $rank && $rank <= 11) {
          echo "まあまあ";
      }
     else {
         echo "残念。また明日";
     }