<?php

$apiKey = "48697636dc984d3a7e4b10eb28a1415a";
$city = ucfirst($_GET["city"]);
$weatherApiUrl = "https://api.openweathermap.org/data/2.5/weather?id=" . $city . "&lang=en&units=metric&APPID=" . $apiKey;
$cityApiUrl = "http://api.openweathermap.org/geo/1.0/direct?q=". $city ."&limit=5&appid={API key}";

// Placehold
echo '
    <span class="report">
        <span class="title">Report</span>
        <span class="text">City: '.$city.'</span>
        <span class="text">Temperature: 20c</span>
        <span class="text">Description: BlahBlah</span>
    </span>
';
