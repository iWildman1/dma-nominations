<?php

require '../../vendor/autoload.php';
use Mailgun\Mailgun;

$mgClient = new Mailgun('key-2b10f81e96b01b210d6ec5d7839b78a4');
$domain = "sandbox9ff9b7ec15e4441a843c531b671a7ec1.mailgun.org";

$name = $_POST['name'];
$category = $_POST['category'];
$additional = $_POST['additional'];
$file_location = "No file attached";

if(isset($_FILES['supporting'])) {
  $file = $_FILES['supporting'];
  $file_name = $file['name'];
  $file_tmp = $file['tmp_name'];
  $file_size = $file['size'];
  $file_error = $file['error'];
  $file_ext = explode('.', $file_name);
  $file_ext = strtolower(end($file_ext));

  $allowed = array('mp3', 'tmp');


  if(in_array($file_ext, $allowed)) {
    if($file_error === 0) {
      if($file_size <= 20000000) {

        $file_name_new = uniqid('', true) . '.' . $file_ext;
        $file_destination = 'uploads' . $file_name_new;

        if(move_uploaded_file($file_tmp, $_SERVER['DOCUMENT_ROOT'] . "/dma/uploads/" . $file_name_new)) {
          $file_location = "http://www.demon-media.co.uk/dma/uploads/" . $file_name_new;

          echo $file_location;
        } else {
          header('HTTP/1.1 500 Internal Server Booboo');
          header('Content-Type: application/json; charset=UTF-8');
          die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
        }
      }
    } else {
      header('HTTP/1.1 500 Internal Server Booboo');
      header('Content-Type: application/json; charset=UTF-8');
      die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
    }
  } else {
    header('HTTP/1.1 500 Internal Server Booboo');
    header('Content-Type: application/json; charset=UTF-8');
    die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
  }
}
  $result = $mgClient->sendMessage($domain, array(
    'from'    => 'Demon Media Nomination Form <noreply@sandbox9ff9b7ec15e4441a843c531b671a7ec1.mailgun.org>',
    'to'      => 'Daniel Wildman <iWildman1@hotmail.com>',
    'subject' => 'DMA Nomination - ' . $category,
    'text'    => 'Nomination entered for ' . $name . ', in the category ' . $category . '. The attached message reads - ' . $additional . '. The file attached is - ' . $file_location
  ));

  if ($result) {
    echo " Message send successfully!";
  } else {
    echo "Something went wrong";
  }
?>
