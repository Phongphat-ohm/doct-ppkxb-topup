<?php

function topup(string $code){
    $curl = curl_init();

    $apikey = "[your apikey here]";

    $data = [
        "code" => $code
    ];

    $data_string = json_encode($data);

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api-ppkxb.vercel.app/api/tmn?apikey=$apikey",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data_string,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string)
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    return $response;
}

// เรียกใช้งานฟังก์ชัน topup
topup("your_link_here");
