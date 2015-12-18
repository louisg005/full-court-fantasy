<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# First, instantiate the SDK with your API credentials, domain, and required parameters for example.
$mg = new Mailgun('key-124bfa8f3a3fe322edff5d804db14cba');
$mgValidate = new Mailgun('pubkey-dd78a29ae3f6a6dd8ea553631cd6b5a8');

$domain = 'fullcourtfantasy.com';
$mailingList = 'louisgill@fullcourtfantasy.com';
$secretPassphrase = 'whatever';
$recipientAddress = $_POST['email'];

# Let's validate the customer's email address, using Mailgun's validation endpoint.
$result = $mgValidate->get('address/validate', array('address' => $recipientAddress));

if($result->http_response_body->is_valid == true) {
# Next, instantiate an OptInHandler object from the SDK.
	$optInHandler = $mg->OptInHandler();

# Next, generate a hash.
	$generatedHash = $optInHandler->generateHash($mailingList, $secretPassphrase, $recipientAddress);

# Now, let's send a confirmation to the recipient with our link.
	$mg->sendMessage($domain, array('from' => 'louisgill@fullcourtfantasy.com',
		'to' => $recipientAddress,
		'subject' => 'Please Confirm!',
		'html' => "<html><body>Hello,<br><br>Welcome to fullcourtfantasy.com! Please <a
			href=\"http://fullcourtfantasy.com/subscribe.php?hash=$generatedHash\">
			confirm</a> your subscription.<br><br>Thank you!</body></html>"));

# Finally, let's add the subscriber to a Mailing List, as unsubscribed, so we can track non-conversions.
	$mg->post("lists/$mailingList/members", array('address' => $recipientAddress,
		'subscribed' => 'no',
		'upsert' => 'yes'));
}

//header("Location:index.php");