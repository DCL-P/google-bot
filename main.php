<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://steam250.com/most_played');
curl_exec($curl);