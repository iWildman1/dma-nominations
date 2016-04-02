<?php
header('HTTP/1.1 500 Internal Server Booboo');
header('Content-Type: application/json; charset=UTF-8');
die(json_encode(array('message' => 'Unable to process submission. DMA Nominations are now closed.', 'code' => 4)));
?>
