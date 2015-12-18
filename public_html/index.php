<?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "fullcourtfantasy.com";
require_once("php/template/utilities.php");
?>
<body class="sfooter custom-image">
	<div class="sfooter-content">

		<header>
			<?php require_once("php/template/header.php"); ?>
		</header>

		<div class="container form-top-margin">
			<div class="row">
				<div class="col-md-4 col-md-offset-9">
					<form method="post" action="<?php echo $PREFIX; ?>php/request-subscribe.php" id="subscribe" name="subscribe" class="form-horizontal">
						<!-- Text box for inputting text comments up to 256 characters below -->
						<div class="form-group">
							<!-- Labels for each field are places within the label tag -->
							<label for="email" class="control-label h3 email-label animated bounceInDown">
								Subscribe to our newsletter.
							</label>
							<br>
							<input type="email" class="form-control delay" id="email" name="email" placeholder="Enter your email"/>
						</div>
						<button class="btn btn-md btn-info pull-right delay" type="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>