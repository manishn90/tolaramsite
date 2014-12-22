<?php
	include('include/header.php');
?>

	<div class="header_fixed">
		<?php
			include('include/menu.php');
		?>
	</div>
	<div class="bordered_wrapper">
		<div id="fullpage">
			<div class="section" id="section0">
			    <div class="slide" id="slide1">
					<div class="intro">
					</div>

				</div>
			    <div class="slide" id="slide2">
					<div class="intro">
						<img src="imgs/1.png" alt="simple" />
						<h1>Simple</h1>
						<p>Easy to use. Configurable and customizable.</p>
					</div>
				</div>
			    <div class="slide" id="slide4">
					<div class="intro">
						<img src="imgs/2.png" alt="Cool" />
						<h1>Cool</h1>
						<p>It just looks cool. Impress everybody with a simple and modern web design!</p>
					</div>
				</div>
			    <div class="slide" id="slide4">
					<div class="intro">
						<img src="imgs/3.png" alt="Compatible" />
						<h1>Compatible</h1>
						<p>Working in modern and old browsers too! IE 8 users don't have the fault of using that horrible browser! Lets give them a chance to see your site in a proper way!</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<style type="text/css">
		#slide1{
			background:url(assets/img/our_evolution/history.jpg);
			background-position: 0 10%;

		}

		#slide2{
			background:url(assets/img/our_evolution/history2.jpg);
			background-position: 0 10%;

		}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['#EAEAEA', '#4BBFC3', '#7BAABE', 'whitesmoke'],
				anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage'],
				menu: '#menu'
			});
		});
	</script>
<?php
	include('include/footer.php');
?>