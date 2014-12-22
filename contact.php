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
			    <div class="intro">
			    	<div class="row contactContent">
			    		<div class="col-md-12" style="padding-left: 0;">
			    			<h1>Get <br>In touch</h1>
							<p>For media enquiries, Please contact <br><a mailto="contact@tolaram.com"><span>angela chin at contact@tolaram.com</span></a></p>
			    		</div>
			    		<div class="row" style="margin-left:0">
			    			<div class="col-md-3 col-xs-6 contact_box">
								<ul class="contactList">
									<li>
										<h2>Singapore</h2>
										<span>corporate headquarter</span>
										<ul>
											<li>1A International Bussiness Park #12-02, Singapore 609933</li>
											<li>Tel: (65) 6387 7777<br>Fax: (65) 6324 2777</li>
										</ul>	
									</li>
								</ul>
							</div>
							<div class="col-md-3 col-xs-6 contact_box">
								<ul class="contactList">		
									<li><h2>Indonesia</h2>
										<ul>
											<li>1A International Bussiness Park #12-02, Singapore 609933</li>
											<li>Tel: (65) 6387 7777<br>Fax: (65) 6324 2777</li>
										</ul>
									</li>
								</ul>
							</div>
			    		</div>
			    		<div class="row" style="margin-left:0">
			    			<div class="col-md-3 col-xs-6 contact_box">
								<ul class="contactList">	
									<li><h2>estonia</h2>
										<ul>
											<li>1A International Bussiness Park #12-02, Singapore 609933</li>
											<li>Tel: (65) 6387 7777<br>Fax: (65) 6324 2777</li>
										</ul>	
									</li>
								</ul>
							</div>
							<div class="col-md-3 col-xs-6 contact_box">
								<ul class="contactList">
									<li><h2>nigeria</h2>
										<ul>
											<li>1A International Bussiness Park #12-02, Singapore 609933</li>
											<li>Tel: (65) 6387 7777<br>Fax: (65) 6324 2777</li>
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
					    <input type="text" class="form-control" id="department" placeholder="department">
					  </div>
				</div>
				<div class="col-md-5">

					  <div class="form-group">
					    <textarea class="form-control" rows="3"></textarea>
					  </div>

					  <button type="submit" class="btn btn-default">Submit</button>
					
				</div>	
				<div class="col-md-1">
					  <button type="button" class="closeContact">close</button>
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
		.contactContent{
			padding-top: 80px;
			padding-left: 7%;
			color: #58595b;
		}
		.contactContent h1 {
			font-size: 3em;
			text-transform: uppercase;
			line-height: 1em;
		}

		.contact_box{
			padding-right: 0;
			padding-left: 0;
		}
		ul.contactList{
			width: 100%;
			list-style: none;
			padding: 0px;
			max-width: 900px;
		}

		ul.contactList li {
			padding-right: 90px;
			display: inline-block;
			font-size: 28px;
			text-transform: uppercase;
			position: relative;
		}
		ul.contactList li h2 {
			padding-bottom: 20px;
			font-size: 0.9em;
		}
		ul.contactList li span {
			display: block;
			font-size: 12px;
			line-height: 12px;
			margin-top: -15px;
			position: absolute;
		}
		.contactList li ul {
			padding: 5px 0px 0px 0px;
			margin: 0px;
			float: left;
		}
		.contactList li ul li {
			font-size: 12px;
			list-style: none;
			max-width: 150px;
			margin-right: 20px;
			float: left;
			padding: 0px;
			margin-top: 0px;
			text-transform: capitalize;
		}

	
		
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['#EAEAEA', '#4BBFC3', '#7BAABE', 'whitesmoke'],
				anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage'],
				menu: '#menu'
			});

			$('.cotactButton,.closeContact').click(function(){
				$('body').toggleClass('activeContact');

			});
		});
	</script>
<?php
	include('include/footer.php');
?>