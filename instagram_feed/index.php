<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <?php $client_id     = "f0ca19dd1574400794b6abcb61a09042" ?>
    <?php $client_secret = "5147d6a9f76544e5b7f91e838f7749bb" ?>
    <?php $redirect_url  = "http://localhost/instagram_feed/callbackurl.php" ?>

    <a href="https://api.instagram.com/oauth/authorize/?client_id=<?= $client_id ?>&redirect_uri=<?= $redirect_url ?>&response_type=code">
      clicka
    </a>
  </body>
</html>
