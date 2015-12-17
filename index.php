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
					<form method="post" ng-submit="createComment(newComment, comment-form.$valid);" id="comment-form"
							name="comment-form"
							class="form-horizontal" novalidate>
						<!-- Text box for inputting text comments up to 256 characters below -->
						<div class="form-group">
							<!-- Labels for each field are places within the label tag -->
							<label for="email" class="control-label h3 email-label">Subscribe to our newsletter.</label>
							<br>
			<textarea class="form-control" cols="2" rows="1" id="txtareaEmail" name="txtareaEmail"
						 ng-maxlength="256" placeholder="Enter your email" ng-model="newComment.commentText" required
						 ng-required="true"></textarea>
						</div>
						<button class="btn btn-md btn-info pull-right" type="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>