<!DOCTYPE html>
<html>
	<head>
		<?php
			require('common/head-includes.php');
		?>
		<title>
			RowdyHacks
		</title>
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
			<div id="content" class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="row section-container">
							<div class="col-sm-12">
								<h1>
									Contact
								</h1>
								<br />
								<form action="script-send-email.php" method="post">
									<div class="row">
										<div class="hidden-xs col-sm-6" style="text-align:left;">
											<input type="text" name="email" placeholder="Your Email" aria-required="true" />
										</div>
										<div class="hidden-xs col-sm-6" style="text-align:right;">
											<input type="text" name="name" placeholder="Your Name" aria-required="true" />
										</div>
										<div class="col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl" style="text-align:left;margin-top:10px;">
											<input type="text" name="m-email" placeholder="Your Email" aria-required="true" />
										</div>
										<div class="col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl" style="text-align:left;margin-top:10px;">
											<input type="text" name="m-name" placeholder="Your Name" aria-required="true" />
										</div>
									</div>
									<br />
									<div class="row">
										<div class="col-md-12">
											<textarea name="text" placeholder="Your Message" style="width:100%;height:400px;"></textarea>
										</div>
									</div>
									<input type="submit" value="Send" id="contact-form-submit-button" />
								<form>
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
