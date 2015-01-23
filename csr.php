<?php
	$pageTitle = 'Communities'; 
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
						<div class="col-md-6 col-sm-6 csr_box">
							<img src="assets/img/csr/csr01.jpg" class="img_responsive" style="background-position: 50% 18%;">
							<div class="col-md-12 col-sm-12 col-xs-12 csr_content">
								<a class="csr_btn" href="">
									<h1 class="title">CENTRE FOR AFRICAN STUDIES, <br><span style="font-size: 20px;"> SINGAPORE </span></h1>
									<span class="hiddenContent">Tolaram Group is one of the five founding companies of the NTU-SBF Centre for African Studies, the first in Southeast Asia, which was set up at a cost of S$5 million. Jointly established by Nanyang Technological University (NTU) and the Singapore Business Federation (SBF), the Centre was launched in November 2013. It aims to promote understanding of Africa at the economic and policy level to help foster stronger relationships between Singapore and the continent.</span>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 csr_box">
							<img src="assets/img/csr/csr02.jpg" class="img_responsive" style="background-position: 50% 50%;">
							<div class="col-md-12 col-sm-12 col-xs-12 csr_content">
								<a class="csr_btn" href="">
									<h1 class="title">COLLABORATION WITH WTO, <br><span style="font-size: 20px;"> NIGERIA</span></h1>
									<span class="hiddenContent">A Memorandum of Understanding (MoU) with the World Toilet Organisation (WTO) was signed in 2012. This partnership was created with the goal of improving the hygiene and sanitation in Nigeria. The first hands-on project has commenced in the Lekki region of Lagos,ocusing on promoting good sanitation in schools. The project has begun in the Lekki region of Lagos. By building toilet facilities and providing clean water, the project promotes good sanitation among students of local public schools.</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section" id="section1">
			    <div class="intro csr">
					<div class="row">
						<div class="col-md-6 col-sm-6 csr_box">
							<img src="assets/img/csr/csr03.jpg" class="img_responsive" style="background-position: 50% 57%;">
							<div class="col-md-12 col-sm-12 col-xs-12 csr_content">
								<a class="csr_btn" href="">
									<h1 class="title">ISHK LIMB CENTRE, <br> <span style="font-size: 20px;">NIGERIA</span></h1>
									<span class="hiddenContent">ISHK Limb Centre was launched in Lagos, Nigeria in 2009 to provides free prosthetic limbs to those in need. Working at various camps around Nigeria, the centre has fitted over 4,000 prostheses to date.</span>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 csr_box">
							<img src="assets/img/csr/csr04.jpg" class="img_responsive" style="background-position: 50% 8%;">
							<div class="col-md-12 col-sm-12 col-xs-12 csr_content">
								<a class="csr_btn" href="">
									<h1 class="title">TOLARAM FOUNDATION, <br> <span style="font-size: 20px;">ESTONIA</span></h1>
									<span class="hiddenContent"> Tolaram Foundation was established in Estonia in 1999. Initially set up to provide mentally challenged children the opportunity to learn, play and enjoy music, it now also organises Christmas and social events for them, in addition to addressing wider needs in the community, such as repairing the heating system and installing double-glazing at a local hospice. <br/> <br/> Today, Tolaram Foundation also actively supports the Mother Theresa Sisters of Missionaries in running its soup kitchens and providing warm meals to the less fortunate during the cold winters.</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<style type="text/css">
	.fp-section.fp-table, .fp-tableCell{
		height: 0 !important;
	}
	@media (max-width: 1200px) {
	    .csr .title{font-size: 23px!important;line-height: 25px;}
	    .csr .title span{font-size: 16px!important;}
	}

	@media (max-width: 992px) {
	    .csr .title{font-size: 20px!important;line-height: 25px;}
	    .csr_btn{font-size: 10px;}
	}

	@media (max-width: 768px) {
	    .csr .title{font-size: 15px!important;line-height: 24px;}
	    .csr .title span{font-size: 11px!important;}
	    .csr_btn{font-size: 10px;}
	}

	</style>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['#FFF', '#FFF', '#FFF', '#FFF'],
				navigation: false,
				navigationPosition: 'right',
				navigationTooltips: ['ABOUT US', 'VALUES', 'VISION & MISSION', 'SHAREHOLDERS'],
				responsive: 1590,
				scrollingSpeed: 500,
			});

			$('.csr_btn').click(function(e){
                 e.preventDefault();
                 var $parentdiv = $(this).parent().parent('.csr_box');
                 var src = $parentdiv.children('img').attr('src');  
                 var style = $parentdiv.children('img').attr('style');   

                 
                 $('.fullWidth').css('left',"-100%");
                 var insertHtml = '<div class="csroverlay fullWidth" ><div class="csrBanner" style="background:url('+src+');'+style+'"></div><button class="businessClose">Close</button><div class="row container">';
                 insertHtml += '<div class="col-md-6"><div><h1>'+$parentdiv.find('h1').text()+'</h1><p>'+$parentdiv.find('.hiddenContent').text()+'</p></div></div>';
                 insertHtml += '</div></div>';
                 $('body').after(insertHtml);
                 $('.fullWidth').animate({left:"0"});
                 $('html, body').css('overflow','hidden');
            });

            $("html").on("click", ".businessClose",function(){
            	$('html, body').css('overflow','visible');
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