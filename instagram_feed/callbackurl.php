<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $uri = 'https://api.instagram.com/oauth/access_token';
    $data = [
      'client_id' => 'f0ca19dd1574400794b6abcb61a09042',
      'client_secret' => '5147d6a9f76544e5b7f91e838f7749bb',
      'grant_type' => 'authorization_code',
      'redirect_uri' => 'http://localhost/instagram_feed/callbackurl.php',
      'code' => $_REQUEST['code']
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $uri); // uri
    curl_setopt($ch, CURLOPT_POST, true); // POST
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data); // POST DATA
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // RETURN RESULT true
    curl_setopt($ch, CURLOPT_HEADER, 0); // RETURN HEADER false
    curl_setopt($ch, CURLOPT_NOBODY, 0); // NO RETURN BODY false / we need the body to return
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // VERIFY SSL HOST false
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // VERIFY SSL PEER false
    $result = json_decode(curl_exec($ch)); // execute curl
    echo '<pre>'; // preformatted view

    // ecit directly the result
    exit(print_r($result));

    ?>

  </body>
</html>
