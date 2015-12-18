<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# First, instantiate the SDK with your API credentials and domain.
$mg = new Mailgun('key-124bfa8f3a3fe322edff5d804db14cba');
$domain = 'fullcourtfantasy.com';

# Next, instantiate an OptInHandler object from the SDK.
$optInHandler = $mg->OptInHandler();

# Next, grab the hash.
$inboundHash = $_GET['hash'];
$inboundHash = filter_var($inboundHash, FILTER_SANITIZE_STRING);
$secretPassphrase = 'whatever';

# Now, validate the captured hash.
$hashValidation = $optInHandler->validateHash($secretPassphrase, $inboundHash);

# Lastly, check to see if we have results, parse, subscribe, and send confirmation.
if($hashValidation) {
	$validatedList = $hashValidation['mailingList'];
	$validatedRecipient = $hashValidation['recipientAddress'];

	$mg->put("lists/$validatedList/members/$validatedRecipient",
		array('address' => $validatedRecipient,
			'subscribed' => 'yes'));

	$mg->sendMessage($domain, array('from' => 'louisgill@fullcourtfantasy.com',
		'to' => $validatedRecipient,
		'subject' => 'Confirmation Received!',
		'html' => "<html><body>Hello,<br><br>We've successfully subscribed
		you to fullcourtfantasy.com!<br><br>Thank you!
	</body></html>"));
}