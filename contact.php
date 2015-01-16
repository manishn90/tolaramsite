<?php
	$pageTitle = 'Contact Us'; 
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
			    <div class="intro">
			    	<div class="row contactContent">
			    		<div class="col-md-12" style="padding-left: 0;">
			    			<h1>Get <br>In touch</h1>
			    		</div>
			    		<div class="row" style="margin-left:0">
			    			<div class="col-md-3 col-xs-6 contact_box">
								<ul class="contactList">
									<li>
										<h2>Singapore</h2>
										<span>Corporate Headquarter</span>
										<ul>
											<li><a href="https://goo.gl/maps/OHbpW" target="_blank" style="color:#58595b;">1A International Business Park <br> #12-02 <br>Singapore 609933</a></li>
											<li>Tel: (65) 6387 7777<br>Fax: (65) 6324 2777</li>
										</ul>	
									</li>
								</ul>
							</div>
							<div class="col-md-3 col-xs-6 contact_box">
								<ul class="contactList">		
									<li><h2>Indonesia</h2>
										<ul>
											<li>Gedung Sudirman PlazaPlaza Marein Lantai 20Jl Jenderai Sudirman Kav 76-78vJakarta 12910- Indonesia</li>
											<li>Tel: (+62) 6297 2711<br>Fax: (+62) 6297 2769</li>
										</ul>
									</li>
								</ul>
							</div>
			    		</div>
			    		<div class="row" style="margin-left:0">
			    			<div class="col-md-3 col-xs-6 contact_box">
								<ul class="contactList">	
									<li><h2>Estonia</h2>
										<ul>
											<li>Kopli Str 35,10412 Tallinn Estonia</li>
											<li>Tel: (35) 7297 2722<br>Fax: (35) 7297 2710</li>
										</ul>	
									</li>
								</ul>
							</div>
							<div class="col-md-3 col-xs-6 contact_box">
								<ul class="contactList">
									<li><h2>Nigeria</h2>
										<ul>
											<li>38 Eric Moore Road,Surulere, Lagos Nigeria</li>
											<li>Tel: (90) 8628 2829<br>Fax: (90) 8628 2832</li>
										</ul>
									</li>
								</ul>
							</div>
			    		</div>
						<div class="row">
							<div class="col-md-3">
								<button class="btn btn-default cotactButton">Contact Us</button>
							</div>
			    		</div>
			    	</div>
			    </div>
			</div>
		</div>
		<!-- Contact Form -->
		<div class="fullContact">
			<div class="row">
				<div class="col-md-12" style="padding-bottom: 59px;">
					  <button type="button" class="closeContact pull-right">close</button>
				</div>
			</div>
			<div class='row container'>
				<form role="form">
					<div class="col-md-6 leftContact">
						<form role="form">
						  <div class="form-group">
						    <input type="text" class="form-control" id="Name" placeholder="Name">
						  </div>
						  <div class="form-group">
						    <input type="email" class="form-control" id="Email" placeholder="E-mail">
						  </div>
						  <div class="form-group">
						    <input type="text" class="form-control" id="department" placeholder="Type of Enquiry">
						  </div>
					</div>
					<div class="col-md-6">

						  <div class="form-group">
						    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
						  </div>

						  <button type="submit" class="btn btn-default">Submit</button>
						
					</div>	
								
				</form>
			</div>		
		</div>
	</div>

	<style type="text/css">
		#section0{
			background-image: url(assets/img/about/vision_bg.jpg);
			background-position: 80% 0px;
			background-size: cover;
		}
		

		::-webkit-input-placeholder { /* WebKit browsers */
		    color:    #FFF !important;
		}
		:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
		   color:    #FFF !important;
		   opacity:  1;
		}
		::-moz-placeholder { /* Mozilla Firefox 19+ */
		   color:    #FFF !important;
		   opacity:  1;
		}
		:-ms-input-placeholder { /* Internet Explorer 10+ */
		   color:    #FFF !important;
		}

		
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				responsive:900
			});

			$('.cotactButton,.closeContact').click(function(){
				$('body').toggleClass('activeContact');

			});
		});
	</script>
<?php
	include('include/footer.php');
?>