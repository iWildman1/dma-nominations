<?php
require '../../vendor/autoload.php';
use Mailgun\Mailgun;

$mgClient = new Mailgun('key-2b10f81e96b01b210d6ec5d7839b78a4');
$domain = "sandbox9ff9b7ec15e4441a843c531b671a7ec1.mailgun.org";

$result = $mgClient->sendMessage($domain, array(
  'from'    => 'Demon Media Nomination Form <noreply@sandbox9ff9b7ec15e4441a843c531b671a7ec1.mailgun.org>',
  'to'      => 'Daniel Wildman <iWildman1@hotmail.com>',
  'subject' => 'Demon Media Award Nomination',
  'text'    => 'Form delivering successfully.'
));

if ($result) {
  echo "Message send successfully!";
}
?>
