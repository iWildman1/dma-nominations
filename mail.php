<?php
require '../../vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-2b10f81e96b01b210d6ec5d7839b78a4');
$domain = "sandbox9ff9b7ec15e4441a843c531b671a7ec1.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
  'from'    => 'Excited User <mailgun@sandbox9ff9b7ec15e4441a843c531b671a7ec1.mailgun.org>',
  'to'      => 'Baz <iWildman1@hotmail.com>',
  'subject' => 'Hello',
  'text'    => 'Testing some Mailgun awesomness!'
));
?>
