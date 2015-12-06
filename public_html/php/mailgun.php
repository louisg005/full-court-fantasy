<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-124bfa8f3a3fe322edff5d804db14cba');
$domain = "sandbox819062bf30684a71a85fc213fb6d38e7.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
array('from'    => 'Mailgun Sandbox <postmaster@sandbox819062bf30684a71a85fc213fb6d38e7.mailgun.org>',
'to'      => 'Louis Gill <louisgill5@gmail.com>',
'subject' => 'Hello Louis Gill',
'text'    => 'Congratulations Louis Gill, you just sent an email with Mailgun!  You are truly awesome!  You can see a record of this email in your logs: https://mailgun.com/cp/log .  You can send up to 300 emails/day from this sandbox server.  Next, you should add your own domain so you can send 10,000 emails/month for free.'));