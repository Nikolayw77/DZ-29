<?php

$url = "http://google.com";

function returnCode($url)
{

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);
    
    curl_close($curl);
    return $result;

}

$code = returnCode($url);

//echo htmlspecialchars($code);

file_put_contents('markup.html', $code);

echo htmlspecialchars(file_get_contents('markup.html'));

?>
    
