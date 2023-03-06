<?php

$apiKey = "48697636dc984d3a7e4b10eb28a1415a";
$cityId = "";
$googleApiUrl = "https://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

echo '
<span class="report">
    <span>City: Town</span>
    <span>Temperature: 20°C</span>
    <span>Weather: Sunny</span>
</span>
';
