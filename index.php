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
$date_str_winter_h = "2024-1-30";
$date_str_summer_h = "2024-7-5";
$day_winter_h = 25*24*60*60;
$day_summer_h = 56*24*60*60;
$t_1 = strtotime($date_str_winter_h);
$t_2 = strtotime($date_str_summer_h);
$t_0 = time();
$t_3 = $t_1 - $t_0; //离开始还有几天
$t_4 = $t_2 - $t_0;
$t_5 = $t_1 + $day_winter_h - $t_0; //离结束还有几天
$t_6 = $t_2 + $day_summer_h - $t_0;
if($t_3<0){$t_3=ceil((0-$t_3)/60/60/24/365)*60*60*24*365+$t_1-$t_0;}
if($t_4<0){$t_4=ceil((0-$t_4)/60/60/24/365)*60*60*24*365+$t_2-$t_0;}
if($t_5<0){$t_5=ceil((0-$t_5)/60/60/24/365)*60*60*24*365+$t_5;}
if($t_6<0){$t_6=ceil((0-$t_6)/60/60/24/365)*60*60*24*365+$t_6;}
$t_5_yue = intval($t_3/60/60/24/30);
$t_5_ri = intval($t_3/60/60/24%30);
$t_6_yue = intval($t_4/60/60/24/30);
$t_6_ri = intval($t_4/60/60/24%30);
$t_7_yue = intval($t_5/60/60/24/30);
$t_7_ri = intval($t_5/60/60/24%30);
$t_8_yue = intval($t_6/60/60/24/30);
$t_8_ri = intval($t_6/60/60/24%30);
?>
<div class="small_text">
<?php
if ($t_5 < $day_winter_h) {
echo '<div class="text">寒假</div>已开始';
echo '<br>';
echo "寒假结束还有".$t_7_yue."月".$t_7_ri."天";
}
else {
echo '<div class="text">寒假</div>未开始';
echo '<br>';
echo '寒假开始还有'.$t_5_yue."月".$t_5_ri."天";
}
?>
</div>
<br>
<div class="small_text">
<?php
if ($t_6 < $day_summer_h) {
echo '<div class="text">暑假</div>已开始';
echo '<br>';
echo "暑假结束还有".$t_8_yue."月".$t_8_ri."天";
}
else {
echo '<div class="text">暑假</div>未开始';
echo '<br>';
echo '暑假开始还有'.$t_6_yue."月".$t_6_ri."天";
}
?>
</div>

</div>
</body>
</html>
