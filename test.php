<?php
for($i = 1; $i<=100; $i++) {
    // echo "Test $i<br>";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.ews1.cultuzz.com/email/reservation?reservation_id=495961302&cultswitch_reservation_id=a',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'accept: application/json',
    'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL2FwaS5ld3MxLmN1bHR1enouY29tL3Rva2VuL2dlbmVyYXRlIiwiaWF0IjoxNzAwNjkyMDk1LCJuYmYiOjE3MDA2OTIwOTUsImp0aSI6InY5TmJTUVhkaHdNakpFNHIiLCJzdWIiOiI2MWFkNzZlMTM0NWNiYTU4ZjkzYWZhZTIiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.1G-NFkjaWTuyLFXPlAi0V0NsdjWKSQTdlIJm0NOmLVA',
    'X-CSRF-TOKEN: '
  ),
));

$response = curl_exec($curl);

curl_close($curl);

error_log($i. " " .$response);
$response = json_decode($response, true);

if(isset($response['message']))
    echo $i.": ".$response['message']."<br>";
}
die;