<?php  return '$month_arr = array(
\'01\' => \'Янв\',
\'02\' => \'Фев\',
\'03\' => \'Мар\',
\'04\' => \'Апр\',
\'05\' => \'Мая\',
\'06\' => \'Июня\',
\'07\' => \'Июля\',
\'08\' => \'Авг\',
\'09\' => \'Сент\',
\'10\' => \'Окт\',
\'11\' => \'Нояб\',
\'12\' => \'Дек\'
);

$d = $input;
$month = strftime("%m",$d);
$H = strftime("%H",$d);
$day = strftime("%d",$d);
$M = strftime("%M",$d);
$month = $month_arr[$month];

return "$day $month в $H:$M";
return;
';