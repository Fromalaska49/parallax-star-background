<!DOCTYPE html>
<html>
	<head>
		<?php
			require('common/head-includes.php');
		?>
		<title>
			Test
		</title>
		<style type="text/css">
			.sponsor-logo {
				display: block;
				margin: 15px;
				max-width: 80%;
			}
		</style>
	</head>
	<body>
		<?php
			require('common/menu.php');
		?>
		<div id="page-container" style="height:100vh;">
			<div id="group1" style="">
				<div class="star-layer-3">
					<div id="star-layer-3">
					</div>
				</div>
				<div class="star-layer-2">
					<div id="star-layer-2">
					</div>
				</div>
				<div class="star-layer-1">
					<div id="star-layer-1">
					</div>
				</div>
			</div>
			<div id="content" class="container" style="">
				<div class="row section-container" style="text-align:center;">
					<div class="col-sm-12">
						<h1 style="margin:20px 30px 70px 30px;">
							Last Year's Sponsors
						</h1>
					</div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-md-6 col-sm-12" style="text-align:inherit;">
								<img src="images/sponsors/logos/alexa.png" class="sponsor-logo" />
							</div>
							<div class="col-md-6 col-sm-12" style="text-align:inherit;">
								<img src="images/sponsors/logos/cs-department.png" class="sponsor-logo" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12" style="text-align:inherit;">
								<img src="images/sponsors/logos/promoter.png" class="sponsor-logo" />
							</div>
							<div class="col-md-6 col-sm-12" style="text-align:inherit;">
								<img src="images/sponsors/logos/sa-code-jam.png" class="sponsor-logo" />
							</div>
						</div>
					</div>
				</div>
				<div class="row" id="earth-container">
					<div class="col-sm-12" id="earth">
					</div>
				</div>
			</div>
		</div>
		<?php
			require('common/footer.php');
		?>
	</body>
</html>
