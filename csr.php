<?php
	$pageTitle = 'Giving Back'; 
	include('include/header.php');
?>

	<div class="header_fixed">
		<?php
			include('include/menu.php');
		?>
	</div>
	<div class="bordered_wrapper">
		<div id="fullpage">
			<div class="section " id="section0">
				<div class="intro csr">
					<div class="row">
						<div class="col-md-6 csr_box">
							<img src="assets/img/csr/csr01.jpg" class="img_responsive" style="background-position: 50% 18%;">
							<span class="csr_content">
								<h1 class="title">CENTRE FOR AFRICAN STUDIES, SINGAPORE</h1>
								<a class="csr_btn" href="">READ MORE HERE</a>
								<span class="hiddenContent">ISHK Limb Centre is a prosthetic limbs centre launched in Lagos, Nigeria in 2009. The centre provides artificial limbs for the unfortunate who have missing limbs. These are provided free of cost.
								Over the years, the centre has fitted over 4,000 limbs held at various camps around Nigeria.</span>
							</span>
						</div>
						<div class="col-md-6 csr_box">
							<img src="assets/img/csr/csr02.jpg" class="img_responsive" style="background-position: 50% 50%;">
							<span class="csr_content">
								<h1 class="title">CENTRE FOR AFRICAN STUDIES, SINGAPORE</h1>
								<a class="csr_btn" href="">READ MORE HERE</a>
								<span class="hiddenContent">ISHK Limb Centre is a prosthetic limbs centre launched in Lagos, Nigeria in 2009. The centre provides artificial limbs for the unfortunate who have missing limbs. These are provided free of cost.
								Over the years, the centre has fitted over 4,000 limbs held at various camps around Nigeria.</span>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="section" id="section1">
			    <div class="intro csr">
					<div class="row">
						<div class="col-md-6 csr_box">
							<img src="assets/img/csr/csr03.jpg" class="img_responsive" style="background-position: 50% 57%;">
							<span class="csr_content">
								<h1 class="title">CENTRE FOR AFRICAN STUDIES, SINGAPORE</h1>
								<a class="csr_btn" href="">READ MORE HERE</a>
								<span class="hiddenContent">ISHK Limb Centre is a prosthetic limbs centre launched in Lagos, Nigeria in 2009. The centre provides artificial limbs for the unfortunate who have missing limbs. These are provided free of cost.
								Over the years, the centre has fitted over 4,000 limbs held at various camps around Nigeria.</span>
							</span>
						</div>
						<div class="col-md-6 csr_box">
							<img src="assets/img/csr/csr04.jpg" class="img_responsive" style="background-position: 50% 8%;">
							<span class="csr_content">
								<h1 class="title">CENTRE FOR AFRICAN STUDIES, SINGAPORE</h1>
								<a class="csr_btn" href="">READ MORE HERE</a>
								<span class="hiddenContent">ISHK Limb Centre is a prosthetic limbs centre launched in Lagos, Nigeria in 2009. The centre provides artificial limbs for the unfortunate who have missing limbs. These are provided free of cost.
								Over the years, the centre has fitted over 4,000 limbs held at various camps around Nigeria.</span>
							</span>
						</div>
					</div>
				</div>
			</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['#FFF', '#FFF', '#FFF', '#FFF'],
				navigation: false,
				navigationPosition: 'right',
				navigationTooltips: ['ABOUT US', 'VALUES', 'VISION & MISSION', 'SHAREHOLDERS'],
				responsive: 900,
			});

			$('.csr_btn').click(function(e){
                 e.preventDefault();
                 var $parentdiv = $(this).parent().parent('.csr_box');
                 var src = $parentdiv.children('img').attr('src');  
                 var style = $parentdiv.children('img').attr('style');   

                 
                 $('.fullWidth').css('left',"-100%");
                 var insertHtml = '<div class="csroverlay fullWidth" ><div class="csrBanner" style="background:url('+src+');'+style+'"></div><button class="businessClose">Close</button><div class="row container">';
                 insertHtml += '<div class="col-md-6"><h1>'+$parentdiv.find('h1').text()+'</h1><p>'+$parentdiv.find('.hiddenContent').text()+'</p></div>';
                 insertHtml += '</div></div>';
                 $('body').after(insertHtml);
                 $('.fullWidth').animate({left:"0"});
            });

            $("html").on("click", ".businessClose",function(){
                $('.fullWidth').animate({left:"100%"},
                 function(){
                     $('.fullWidth').remove();
                 })
             });
		});
	</script>
<?php
	include('include/footer.php');
?>