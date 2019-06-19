<?php
  $access_token = "438208889.f0ca19d.fd8bb9e7508543ccae001553482ecce0";
  $tag = 'thankfulforyou';
  // $return = rudr_instagram_api_curl_connect('https://api.instagram.com/v1/tags/' . $tag . '/media/recent?access_token=' . $access_token);

  // $username = '_kapaz';
  // $user_search = rudr_instagram_api_curl_connect("https://api.instagram.com/v1/users/search?q=" . $username . "&access_token=" . $access_token);
  // $uri = "https://api.instagram.com/v1/tags/". $tag . "/media/recent?access_token=" . $access_token;
  $uri = "https://api.instagram.com/v1/users/self/media/recent/?access_token=".$access_token;
  $response = json_decode(file_get_contents($uri));

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php var_dump($response) ?>
  </body>
</html>
