# วิธีการ get API กับ PPING Topup

ขั้นตอนแรกขออณุญาคิบอกข้อจำกัดก่อนนะครับ
ตอนนี้ทาง developer กำลังช็อตจึงอาจจะมีการทำงานช้าบ้างและข้อมูลอาจจะหายบ้างเนื่องจากการให้ Free Hosting
## API Reference

##### url: `https://api-ppkxb.vercel.app`

#### topup

```http
  GET /api/tmn
```

#### query

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `apikey` | `string` | **Required**. Your API key |

#### body

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `code` | `string` | **Required**. Your Voucher Link |

## ตัวอย่าง

ตัวอย่างการยิง api

```php
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
```
