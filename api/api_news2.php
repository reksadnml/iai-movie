
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://imdb8.p.rapidapi.com/title/get-news?limit=25&tconst=tt0944947". $id_news,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "x-rapidapi-host: imdb8.p.rapidapi.com",
    "x-rapidapi-key: 147abf1e66msh8e232325e770504p1bb727jsn00625a3ed85f"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
$news_id = json_decode($response);
curl_close($curl);

?>