<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST['code'];
    $lang = $_POST['lang'];
    
    $url = "https://try.w3schools.com/try_$lang.php";
    $data = ['code' => $code];
    
    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query($data),
        ],
    ];
    
    $context  = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    echo $response;
}
?>