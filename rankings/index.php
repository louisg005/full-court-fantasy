<?php
$PAGE_TITLE = "My Capstone Project";
require_once("php/template/utilities.php");
?>
<div class="container">
	<header>
		<?php require_once("php/template/header.php"); ?>
	</header>

	<div class="row">
		<section class="side-panel col-md-3">
			<?php require_once("php/template/side-panel.php"); ?>
		</section>

		<section class="main-content col-md-9">
			<h1>Hello World</h1>
			<p>This is the main page content here.</p>
		</section>
	</div>

	<footer class="footer">
		<?php require_once("php/template/footer.php"); ?>
	</footer>
</div><!-- .container -->

</body>
</html>