<?php
$a = rand(-50, 50);
$b = rand(-50, 50);
$c = rand(-50, 50);
$x1;
$x2;
$D = ($b * $b) - 4 * $a * $c;
if ($D > 0) {
    $x1 = round((-$b + sqrt($D)) / (2 * $a), 2);
    $x2 = round((-$b - sqrt($D)) / (2 * $a), 2);
} elseif ($D == 0) {
    $x1 = round((-$b + sqrt($D)) / (2 * $a), 2);
    $x2 = "-";
} else {
    $x1 = "Коренів";
    $x2 = "немає";
}
$html_str = <<<EOD
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Clock UI Design</title>
    <style>
      @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Open Sans", sans-serif;
      }
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #47289d;
      }
      #container h2 {
        position: relative;
        display: block;
        color: #fff;
        text-align: center;
        margin: 10px 0;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.4em;
        font-size: 0.8em;
      }
      #container #block {
        display: flex;
      }
      #container #block div {
        position: relative;
        margin: 0 5px;
        width: 200px;
        -webkit-box-reflect: below 1px linear-gradient(transparent, #0004);
      }
      #container #block div span {
        position: relative;
        display: block;
        width: 200px;
        height: 80px;
        background: #2196f3;
        color: #fff;
        font-weight: 300;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 3em;
        z-index: 10;
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2);
      }
      #container #block div span:nth-child(2) {
        height: 30px;
        font-size: 0.7em;
        letter-spacing: 0.2em;
        font-weight: 500;
        z-index: 9;
        box-shadow: none;
        background: #127fd6;
        text-transform: uppercase;
      }
      #container #block div:nth-last-child(2) span {
        background: #ff006a;
      }
      #container #block div:nth-last-child(2) span:nth-child(2) {
        background: #ec0062;
      }
    </style>
  </head>
  <body>
    <div id="container">
      <h2>Розв'язки рівняння</h2>
      <h2>{$a}x² + {$b}x + $c = 0</h2>
      <div id="block">
        <div><span id="x1">$x1</span><span>X1</span></div>
        <div><span id="x2">$x2</span><span>X2</span></div>
      </div>
    </div>
  </body>
</html>
EOD;
echo $html_str;
