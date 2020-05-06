<?php

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://tvjan-tvmaze-v1.p.rapidapi.com/schedule?filter=primetime",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: tvjan-tvmaze-v1.p.rapidapi.com",
		"x-rapidapi-key: 2ae1075a50mshbffe075e67eca40p1e0496jsnf7a57e55a402"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);
$schedule = json_decode($response);

curl_close($curl);