<?php
header('Content-Type: text/html; charset=utf-8');
setlocale(LC_ALL, "ru_RU");
date_default_timezone_set("Europe/Moscow");

$opts = array(
  'http' => array(
    'method' => "GET",
    'header' => "X-Yandex-API-Key: 34be21c5-6cee-4042-9c12-2999a20ef8e6"
  )
);

$url = "https://api.weather.yandex.ru/v2/informers?lat=51.377722&lon=42.070997";
$context = stream_context_create($opts);
$contents = file_get_contents($url, false, $context);
$clima = json_decode($contents);

//$time_unix = $clima->fact->obs_time;
//$temp = $clima->fact->temp;
//$humidity = $clima->fact->humidity;
//$speed = $clima->fact->wind_speed;
//$pressure = $clima->fact->pressure_mm;
//$icon = $clima->fact->icon . ".svg";

//$today = date("j/m/Y, H:i");
//$time = date("j/m/Y, H:i", $time_unix);
/*
echo "Дата/Вреемя:" . " - " . $today . "<br>";
echo "Обновлено:" . " - " . $time . "<br>";
echo "Температура: " . $temp . " &deg;C<br>";
echo "Влажность: " . $humidity . " %<br>";
echo "Ветер: " . $speed . " м/с<br>";
echo "Давление: " . $pressure . " мм р/с<br>";
// echo "<img src='https://yastatic.net/weather/i/icons/blueye/color/svg/" . $icon . "'/ width='50'>";
*/
echo $contents;
// var_dump(json_decode($contents));

?>