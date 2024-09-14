<?php
$x = rand(-325, 444) / 10;
$x = round($x);
$verdict;
$color;
$second_color;
if ($x < 0) {
    $verdict = "Мороз!";
    $color = "rgb(0, 149, 255)";
    $second_color = "#0074ec";
} elseif ($x == 0) {
    $verdict = "Не мороз и не тепло…";
    $color = "rgb(255, 129, 0)";
    $second_color = "#ec8300";

} else {
    $verdict = "Тепло!";
    $color = "rgb(255, 0, 106)";
    $second_color = "#ec0062";
}
$html_str = <<<EOD
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap');
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Open Sans', sans-serif;
}
body
{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	background: #47289d;
}
#container h2
{
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
#container #block
{
	display: flex;
	justify-content: center;
}
#container #block div
{
	position: relative;
	margin: 0 5px;

}
#container #block div#themperatureBlock{
	-webkit-box-reflect: below 1px linear-gradient(transparent,#0004);
}
#container #block div span
{
	position: relative;
	display: block;
	width: 100px;
	height: 80px;
	background: #2196f3;
	color: #fff;
	font-weight: 300;
	display: flex;
	justify-content: center;
	align-items: center;
	font-size: 3em;
	z-index: 10;
	box-shadow: 0 0 0 1px rgba(0,0,0,.2);
}
#container #block div span:nth-child(2)
{
	height: 30px;
	font-size: 0.7em;
	letter-spacing: 0.2em;
	font-weight: 500;
	z-index: 9;
	box-shadow: none;
	background: #127fd6;
	text-transform: uppercase;
}
#container #block div:nth-last-child(2) span
{
	background: $color;
}
#container #block div:nth-last-child(2) span:nth-child(2)
{
	background: $second_color;
}
#container #block div:nth-last-child(1) span
{
	position: absolute;
	top: 0;
	width: 60px;
	height: 40px;
	font-size: 1.5em;
	background: #fff;
	color: #000;

}
    </style>
</head>
<body>
	<div id="container">
		<h2>$verdict</h2>
		<div id="block">
			<div id="themperatureBlock"><span id="themperature">$x</span><span></span></div>
			<div><span id="degree">&deg;C</span></div>
		</div>
	</div>

</body>
</html>
EOD;
echo $html_str;
