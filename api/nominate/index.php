<?php

require '../../vendor/autoload.php';
use Mailgun\Mailgun;

$mgClient = new Mailgun('key-2b10f81e96b01b210d6ec5d7839b78a4');
$domain = "demon-media.co.uk";

$name = $_POST['name'];
$category = $_POST['category'];
$additional = $_POST['additional'];
$supporting_location = "No file attached";
$doc_location = "No file attached";

if(empty($_FILES['supporting'])) {
  echo "No file 1";
} else {
  if(isset($_FILES['supporting'])) {
    $file = $_FILES['supporting'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    $allowed = array('mp3', 'tmp', 'doc', 'docx', 'pdf');


    if(in_array($file_ext, $allowed)) {
      if($file_error === 0) {
        if($file_size <= 20000000) {

          $file_name_new = uniqid('', true) . '.' . $file_ext;
          $file_destination = 'uploads' . $file_name_new;

          if(move_uploaded_file($file_tmp, $_SERVER['DOCUMENT_ROOT'] . "/dma/uploads/" . $file_name_new)) {
            $supporting_location = "http://www.demon-media.co.uk/dma/uploads/" . $file_name_new;

            echo $supporting_location;
          } else {
            header('HTTP/1.1 500 Internal Server Booboo');
            header('Content-Type: application/json; charset=UTF-8');
            die(json_encode(array('message' => 'Failed to move file.', 'code' => 1337)));
          }
        }
      } else {
        header('HTTP/1.1 500 Internal Server Booboo');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'Error uploading file', 'code' => 1337)));
      }
    } else {

      if ($file_ext === '') {
        echo "No file found";
      } else {
        header('HTTP/1.1 500 Internal Server Booboo');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'File extension is not allowed', 'code' => 1337)));
      }
    }
  }
}

if(empty($_FILES['document'])) {
  echo "No document";
} else {
  if(isset($_FILES['document'])) {
    $doc = $_FILES['document'];
    $doc_name = $doc['name'];
    $doc_tmp = $doc['tmp_name'];
    $doc_size = $doc['size'];
    $doc_error = $doc['error'];
    $doc_ext = explode('.', $doc_name);
    $doc_ext = strtolower(end($doc_ext));

    $allowed = array('mp3', 'tmp', 'doc', 'docx', 'pdf');


    if(in_array($doc_ext, $allowed)) {
      if($doc_error === 0) {
        if($doc_size <= 20000000) {

          $doc_name_new = uniqid('', true) . '.' . $doc_ext;
          $doc_destination = 'uploads' . $doc_name_new;

          if(move_uploaded_file($doc_tmp, $_SERVER['DOCUMENT_ROOT'] . "/dma/uploads/" . $doc_name_new)) {
            $doc_location = "http://www.demon-media.co.uk/dma/uploads/" . $doc_name_new;

            echo $doc_location;
          } else {
            header('HTTP/1.1 500 Internal Server Booboo');
            header('Content-Type: application/json; charset=UTF-8');
            die(json_encode(array('message' => 'ERROR', 'code' => 1)));
          }
        }
      } else {
        header('HTTP/1.1 500 Internal Server Booboo');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'ERROR', 'code' => 2)));
      }
    } else {
      if ($doc_ext === '') {
        echo "No file found";
      } else {
        header('HTTP/1.1 500 Internal Server Booboo');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'ERROR', 'code' => 3)));
      }
    }
  }
}

  $result = $mgClient->sendMessage($domain, array(
    'from'    => 'Demon Media Nomination Form <noreply@demon-media.co.uk>',
    'to'      => 'Daniel Wildman <adam.redfern@dmu.ac.uk>',
    'subject' => 'DMA Nomination - ' . $category,
    'text'    => 'Nomination entered for ' . $name . ', in the category ' . $category . '. The attached message reads - ' . $additional . '. The files attached are - ' . $supporting_location . " and " . $doc_location
  ));

  if ($result) {
    echo " Message send successfully!";
  } else {
    header('HTTP/1.1 500 Internal Server Booboo');
    header('Content-Type: application/json; charset=UTF-8');
    die(json_encode(array('message' => 'Email failed to send.', 'code' => 4)));
  }
?>
