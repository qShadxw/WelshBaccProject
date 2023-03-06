<?php

$apiKey = "48697636dc984d3a7e4b10eb28a1415a";
$city = ucfirst($_POST["weather-form-city"]);
$weatherApiUrl = "https://api.openweathermap.org/data/2.5/weather?id=" . $city . "&lang=en&units=metric&APPID=" . $apiKey;
$cityApiUrl = "http://api.openweathermap.org/geo/1.0/direct?q=". $city ."&limit=5&appid={API key}";

echo $city;
