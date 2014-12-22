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
					</div>
				</div>
			    <div class="slide" id="slide3">
					<div class="intro">
					</div>
				</div>
			    <div class="slide" id="slide4">
					<div class="intro">
					</div>
				</div>
				<div class="slide" id="slide5">
					<div class="intro">
					</div>

				</div>
			    <div class="slide" id="slide6">
					<div class="intro">
					</div>
				</div>
			    <div class="slide" id="slide7">
					<div class="intro">
					</div>
				</div>
			    <div class="slide" id="slide8">
					<div class="intro">
					</div>
				</div>
				<div class="slide" id="slide9">
					<div class="intro">
					</div>
				</div>
			    <div class="slide" id="slide10">
					<div class="intro">
					</div>
				</div>
			</div>
		</div>
	</div>

	<style type="text/css">
		.fp-controlArrow{
			top: 40%;
		}
		#slide1{
			background:url(assets/img/our_evolution/history.jpg);
			background-position: 26% 20%;
			width: 25%;
			background-size: cover;
		}

		#slide2{
			background:url(assets/img/our_evolution/history2.jpg);
			background-position: 10% 95%;
			width: 25%;
			background-size: cover;

		}
		#slide3{
			background:url(assets/img/our_evolution/history3.jpg);
			background-position: 59% 20%;
			width: 25%;
			background-size: cover;
		}

		#slide4{
			background:url(assets/img/our_evolution/history4new.jpg);
			background-position: 65% 10%;
			width: 25%;
			background-size: cover;

		}
		#slide5{
			background:url(assets/img/our_evolution/history5.jpg);
			background-position: 80% 20%;
			width: 25%;
			background-size: cover;
		}

		#slide6{
			background:url(assets/img/our_evolution/history6.jpg);
			background-position: 32% 138%;
			width: 25%;
			background-size: cover;

		}
		#slide7{
			background:url(assets/img/our_evolution/history7.jpg);
			background-position: 97% 20%;
			width: 25%;
			background-size: cover;
		}

		#slide8{
			background:url(assets/img/our_evolution/history8.jpg);
			background-position: 61% 95%;
			width: 25%;
			background-size: cover;

		}
		#slide9{
			background:url(assets/img/our_evolution/history9.jpg);
			background-position: 16% 20%;
			width: 25%;
			background-size: cover;
		}

		#slide10{
			background:url(assets/img/our_evolution/history10.jpg);
			background-position: 71% 65%;
			width: 25%;
			background-size: cover;

		}

	</style>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['#EAEAEA', '#4BBFC3', '#7BAABE', 'whitesmoke'],
				menu: '#menu'
			});
		});
	</script>
<?php
	include('include/footer.php');
?>