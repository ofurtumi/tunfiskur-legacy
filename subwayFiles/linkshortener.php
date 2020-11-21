
<html>
<head>
<title>Link og post</title></head>
<body>
   
    <?php

    $long_url = $_Get["linkur"];
    echo $long_url;
    $apiv4 = 'https://api-ssl.bitly.com/v4/bitlinks';
    $genericAccessToken = 'a8114baa89fb2fc366c786ca9625dad09c412022';

    $data = array(
    'long_url' => $long_url
    );
    $payload = json_encode($data);

    $header = array(
    'Authorization: Bearer ' . $genericAccessToken,
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload)
    );

    $ch = curl_init($apiv4);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $result = curl_exec($ch);

    echo $result;
    ?>
</body>
</html>