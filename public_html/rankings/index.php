<?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "Rankings";
require_once(dirname(__DIR__) . "/php/template/utilities.php");
?>

<body>
	<header>
		<?php require_once(dirname(__DIR__) . "/php/template/header.php"); ?>
	</header>

	<div class="row">
		<div class="col-md-5 col-md-offset-2">
			<div class="panel panel-default">
				<!-- Default panel contents -->
				<div class="panel-heading">2015-2016 Rankings</div>
				<div class="panel-body">
					<p>Louis Gill and Hayden Craig give their top 20 players for the upcoming NBA season.</p>
				</div>

				<!-- Table -->
				<table class="table">
					<tr>
						<td></td>
						<td>Gill</td>
						<td>Craig</td>
					</tr>
					<tr>
						<td>Anthony Davis</td>
						<td>1</td>
						<td>1</td>
					</tr>
					<tr>
						<td>Kevin Durant</td>
						<td>2</td>
						<td>4</td>
					</tr>
					<tr>
						<td>Stephen Curry</td>
						<td>3</td>
						<td>2</td>
					</tr>
					<tr>
						<td>James Harden</td>
						<td>4</td>
						<td>7</td>
					</tr>
					<tr>
						<td>Russell Westbrook</td>
						<td>5</td>
						<td>5</td>
					</tr>
					<tr>
						<td>Lebron James</td>
						<td>6</td>
						<td>6</td>
					</tr>
					<tr>
						<td>Damian Lillard</td>
						<td>7</td>
						<td>13</td>
					</tr>
					<tr>
						<td>DeMarcus Cousins</td>
						<td>8</td>
						<td>3</td>
					</tr>
					<tr>
						<td>John Wall</td>
						<td>9</td>
						<td>10</td>
					</tr>
					<tr>
						<td>Jimmy Butler</td>
						<td>10</td>
						<td>11</td>
					</tr>
					<tr>
						<td>Chris Paul</td>
						<td>11</td>
						<td>9</td>
					</tr>
					<tr>
						<td>Kawhi Leonard</td>
						<td>12</td>
						<td>8</td>
					</tr>
					<tr>
						<td>Paul George</td>
						<td>13</td>
						<td>15</td>
					</tr>
					<tr>
						<td>Blake Griffin</td>
						<td>14</td>
						<td>12</td>
					</tr>
					<tr>
						<td>Rudy Gobert</td>
						<td>15</td>
						<td>19</td>
					</tr>
					<tr>
						<td>Carmelo Anthony</td>
						<td>16</td>
						<td>16</td>
					</tr>
					<tr>
						<td>Marc Gasol</td>
						<td>17</td>
						<td>20</td>
					</tr>
					<tr>
						<td>Paul Millsap</td>
						<td>18</td>
						<td>17</td>
					</tr>
					<tr>
						<td>LaMarcus Aldridge</td>
						<td>19</td>
						<td>18</td>
					</tr>
					<tr>
						<td>Klay Thompson</td>
						<td>20</td>
						<td>14</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="col-md-3">
			<?php require_once(dirname(__DIR__) . "/php/template/feed.php"); ?>
		</div>
	</div>
</body>
</html>
