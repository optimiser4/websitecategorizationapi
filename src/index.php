<?php 

namespace websitecategorization/websitecategorizationapi;

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.websitecategorizationapi.com/api/iab/iab_category1_url.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'query=www.microsoft.com&data_type=url',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>
