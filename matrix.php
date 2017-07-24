<!DOCTYPE html>
<html>
	<head>
		<?php
			require('common/head-includes.php');
		?>
		<title>
			Test
		</title>
		<script type="text/javascript">
			$(document).ready(function(){
				var $contentHeight = $("#content").outerHeight(true) + "px";
				$("#group1").css("height", $contentHeight);
				$("#group1").css("overflow", "hidden");
				$("#content").css("position", "relative");
				$("#content").css("top", "-"+$contentHeight);
				$("#page-overflow-border").css("height", $contentHeight);
			});
		</script>
		<style type="text/css">
		* { box-sizing: border-box; }
.video-background {
  background: #000;
  position: fixed;
  top: 0; right: 0; bottom: 0; left: 0;
  z-index: -99;
}
.video-foreground,
.video-background iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}
#vidtop-content {
	top: 0;
}
@media (min-aspect-ratio: 16/9) {
  .video-foreground { height: 300%; top: -100%; }
}
@media (max-aspect-ratio: 16/9) {
  .video-foreground { width: 300%; left: -100%; }
}
		</style>
	</head>
	<body>
		<?php
			require('common/menu.php');
		?>
		<div id="page-container" style="background-color:;background:transparent;">
			<div id="page-overflow-border">
				<div class="video-background">
					<div class="video-foreground">
						<iframe src="https://www.youtube.com/embed/rpWrtXyEAN0?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=W0LHTWG-UmQ" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div id="vidtop-content">
					<div id="group1">
					</div>
					<div id="content" class="container" style="">
						<div class="row" style="overflow-y:hidden;">
							<div class="col-sm-12" style="overflow-x:visible;">
								<div class="row section-container">
									<div class="col-sm-12">
										It’s official! Come join us at RowdyHacks as we build apps, games, and many other neat projects in 24 hours. Whether you’re a seasoned hacker or new to the hackathon community, we’ve got your back through the whole hacking experience.
										<br />
										If you aren’t familiar, a hackathon is where you turn your crazy ideas into real projects. Plenty of your fellow peers gather to build something they’re passionate about so get involved in making incredible things.
									</div>
								</div>
								<div class="row section-container">
									<div class="col-sm-12">
										It’s official! Come join us at RowdyHacks as we build apps, games, and many other neat projects in 24 hours. Whether you’re a seasoned hacker or new to the hackathon community, we’ve got your back through the whole hacking experience.
										<br />
										If you aren’t familiar, a hackathon is where you turn your crazy ideas into real projects. Plenty of your fellow peers gather to build something they’re passionate about so get involved in making incredible things.
									</div>
								</div>
								<div class="row section-container" id="home-page-cover-image">
									<div class="col-sm-12">
									</div>
								</div>
								<div class="row partial-section-container">
									<div class="col-sm-12 col-md-4">
										<div class="partial-section">
											<h3>
												<img src="images/icons/ic_event_black_48px.svg" class="partial-section-h-icon" />
											</h3>
											Market Events
										</div>
									</div>
									<div class="col-sm-12 col-md-4">
										<div class="partial-section">
											<h3>
												<img src="images/icons/ic_schedule_black_48px.svg" class="partial-section-h-icon" />
											</h3>
											Send Notifications
										</div>
									</div>
									<div class="col-sm-12 col-md-4">
										<div class="partial-section">
											<h3>
												<img src="images/icons/ic_room_black_48px.svg" class="partial-section-h-icon" />
											</h3>
											Collect Leads
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--
						<div class="row" id="earth-container">
							<div class="col-sm-12" id="earth">
							</div>
						</div>
						-->
					</div>
				</div>
			</div>
		</div>
		<?php
			require('common/footer.php');
		?>
	</body>
</html>
