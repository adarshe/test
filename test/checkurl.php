<?php
function check_url($url) {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    $headers = curl_getinfo($ch);
    curl_close($ch);

    return $headers['http_code'];
}

$check_url_status = check_url('http://test.brasandhoney.com/lingerie/panache-lingerie.html');
if ($check_url_status == '200')
   echo "Link Works";
else
   echo "Broken Link";
?>