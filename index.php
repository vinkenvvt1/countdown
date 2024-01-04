<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="skeleton.css">
<style>
body {background-color:#1c1b22;}
.container {text-align:center;background-color:rgba(0, 0, 0, 0.1);height:100%;}
.small_text {color:#e6db74;font-size:32px;display:inline-block;}
.text {color:#e6db74;font-size:80px;display:inline-block;}
</style>
</head>
<body>
<div class="container">
<?php
$date_str_hanjia = "2024-1-30";
$date_str_shujia = "2024-7-5";
$t_1 = strtotime($date_str_hanjia);
$t_2 = strtotime($date_str_shujia);
$t_0 = time();
$t_3 = $t_1 - $t_0;
$t_4 = $t_2 - $t_0;
$t_5_yue = intval($t_3/60/60/24/30);
$t_5_ri = intval($t_3/60/60/24%30);
$t_6_yue = intval($t_4/60/60/24/30);
$t_6_ri = intval($t_4/60/60/24%30);
?>
<div class="small_text">离</div>
<div class="text">寒假</div>
<div class="small_text">还有</div>
<?php
echo '<div class="small_text">'.$t_5_yue."月".$t_5_ri."天</div>";
?>
<br>
<div class="small_text">离</div>
<div class="text">暑假</div>
<div class="small_text">还有</div>
<?php
echo '<div class="small_text">'.$t_6_yue."月".$t_6_ri."天</div>";
?>
</div>
</body>
</html>
