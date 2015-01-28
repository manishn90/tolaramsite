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
										<span>Corporate Headquarters</span>
										<ul>
											<li><a href="https://goo.gl/maps/NsUoy" target="_blank" style="color:#58595b;">1A International Business Park <br> #12-02 <br>Singapore 609933</a></li>
											<li>Tel: (65) 6387 7777<br>Fax: (65) 6324 2777</li>
										</ul>	
									</li>
								</ul>
							</div>
							<div class="col-md-3 col-xs-6 contact_box">
								<ul class="contactList">		
									<li><h2>Indonesia</h2>
										<ul>
											<li><a href="https://goo.gl/maps/KlvGG" target="_blank" style="color:#58595b;">Gedung Sudirman Plaza <br>Plaza Marein Lantai 20<br>Jl Jenderai Sudirman Kav 76-78v<br>Jakarta 12910 - Indonesia</a></li>
											<li>Tel: (62) 6297 2711<br>Fax: (62) 6297 2769</li>
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
											<li><a href="https://goo.gl/maps/xTldw" target="_blank" style="color:#58595b;">Kopli Str 35,10412 Tallinn Estonia</a></li>
											<li>Tel: (35) 7297 2722<br>Fax: (35) 7297 2710</li>
										</ul>	
									</li>
								</ul>
							</div>
							<div class="col-md-3 col-xs-6 contact_box">
								<ul class="contactList">
									<li><h2>Nigeria</h2>
										<ul>
											<li><a href="https://goo.gl/maps/e1PZ2" target="_blank" style="color:#58595b;">38 Eric Moore Road,Surulere, Lagos Nigeria</a></li>
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
		<?php include('include/contact-form.php'); ?>

	</div>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>

	<style type="text/css">
		#section0{
			background-image: url(assets/img/about/vision_bg.jpg);
			background-position: 80% 0px;
			background-size: cover;
		}
		
		html, body{
			overflow:visible!important;
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
		.bordered_wrapper{padding-top: 0}
		/* Contact Form Style */
		form {
		    margin:0;
		    margin-top: 15px;
		}
		form label {
		    margin-bottom:.2em;
		    font-size:1.3rem;
		    line-height:1.3rem;
		    font-size:13px;
		    line-height:13px;
		    color:#e6e6e1;
		    text-shadow:0px -1px #202020
		}
		form label.error {
		    margin-bottom:1em;
		    font-size:1.2rem;
		    line-height:1.2rem;
		    font-size:12px;
		    line-height:12px;
		    color:#c0392b
		}
		form input[type="text"], form textarea {
		    margin-bottom:1.25em;
		    font-family:"Inconsolata", sans-serif;
		    font-size:1.4rem;
		    line-height:1.4rem;
		    font-size:14px;
		    line-height:14px;
		    box-shadow:none;
		    -moz-box-shadow:none;
		    -webkit-box-shadow:none;
		    background:#e6e6e6;
		    border:1px solid #191919;
		    -moz-border-radius:0.2em;
		    -webkit-border-radius:0.2em;
		    border-radius:0.2em
		}
		form input[type="text"]:focus, form textarea:focus {
		    border-color:#191919;
		    box-shadow:none;
		    -moz-box-shadow:none;
		    -webkit-box-shadow:none
		}
		form input[type="text"][disabled], form textarea[disabled] {
		    background:#fff
		}
		form input[type="text"].error, form textarea.error {
		    background:#e6e6e6;
		    border-color:#c0392b
		}
		fieldset {
		    border:0px;
		    margin:0;
		    padding:0
		}
		.required {
		    color:#e9266d
		}
		#success, #error {
		    display:none
		}
		#success span, #erro span {
		    display:inline-block;
		    position:absolute;
		    top:0;
		    width:100%;
		    text-align: center;
    		font-size: 20px;
    		z-index: -1;
		}
		#success span p, #error span p {
		    margin-top:6em
		}
		#success span p {
		  color:#FFFFFF;
		}
		#error span p {
		  color:#c0392b;
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
			 
			// validate contact form
			$(function() {
			    $('#contact').validate({
			        rules: {
			            name: {
			                required: true,
			                minlength: 2
			            },
			            email: {
			                required: true,
			                email: true
			            },
			            message: {
			                required: true
			            }
			        },
			        messages: {
			            name: {
			                required: "Please fill up your name.",
			                minlength: "Your name must consist of at least 2 characters"
			            },
			            email: {
			                required: "Please fill up your valid email"
			            },
			            message: {
			                required: "Please fill up your message",
			                minlength: ""
			            }
			        },
			        submitHandler: function(form) {
			            $(form).ajaxSubmit({
			                type:"POST",
			                data: $(form).serialize(),
			                url:"process.php",
			                success: function() {
			                    $('#contact :input').attr('disabled', 'disabled');
			                    $('#contact').fadeTo( "slow", 0.15, function() {
			                        $(this).find(':input').attr('disabled', 'disabled');
			                        $(this).find('label').css('cursor','default');
			                        $('#success').fadeIn();
			                    });
			                },
			                error: function() {
			                    $('#contact').fadeTo( "slow", 0.15, function() {
			                        $('#error').fadeIn();
			                    });
			                }
			            });
			        }
			    });
			});

		});
	</script>
<?php
	include('include/footer.php');
?>