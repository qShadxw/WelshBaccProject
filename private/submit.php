<?php
// Importants
$apiKey = "48697636dc984d3a7e4b10eb28a1415a";

/* API REQUESTS */

// Variables from index_script.js
$city = ucfirst($_GET["city"]);
$cityApiUrl = "http://api.openweathermap.org/geo/1.0/direct?q=". $city ."&limit=5&appid=". $apiKey;

// Api request for city longitude and latitude
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => $cityApiUrl,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    //CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "x-rapidapi-host: community-open-weather-map.p.rapidapi.com",
      "x-rapidapi-key: ". $apiKey,
    ),
  ));

// Response
$response = curl_exec($curl);
$err = curl_error($curl);

// Error Handling
if ($err) {
    echo "cURL Error #:" . $err;
    return;
}

// Closes Curl
curl_close($curl);

// Decodes the response into a json object
$cityData = json_decode($response, true);

if (sizeof($cityData) <= 1) {
    echo '
        <span class="report">
            <span class="text">Invalid City Name, Try again!</span>
        </span>
    ';
    return;
}

// Api request for weather data
$weatherApiUrl = "https://api.openweathermap.org/data/2.5/weather?lat=".$cityData[1]["lat"]."&lon=".$cityData[1]["lon"]."&appid=".$apiKey;

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => $weatherApiUrl,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    //CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "x-rapidapi-host: community-open-weather-map.p.rapidapi.com",
        "x-rapidapi-key: ". $apiKey,
    ),
));

// Response
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

// Error Handling
if ($err) {
    echo "cURL Error #:" . $err;
    return;
}

// Decodes the response into separate variables for html output
$weatherData = json_decode($response, true);
$weatherTemp = round($weatherData["main"]["temp"] - 273.15);
$weatherDesc = ucfirst($weatherData["weather"][0]["description"]);

/* REPORT */
$report = "Placeholder Text";

// Html output
echo '
    <span class="weather">
        <span class="title">Weather</span>
        <span class="text">City: '. $city .'</span>
        <span class="text">Temperature: '. $weatherTemp .'°c</span>
        <span class="text">Description: '. $weatherDesc .'</span>
    </span>
    <span class="report">
        <span class="title">Report</span>
        <span class="text">'. $report .'</span>
    </span>
';
