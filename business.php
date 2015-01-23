<?php
	$pageTitle = 'Businesses'; 
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
			    <div id="wrapper">

			    <div class="container">
					<form class="controls row" id="Filters">
					  <!-- We can add an unlimited number of "filter groups" using the following format: -->
					 <div class="col-md-6 text-center">
					  <fieldset id='sector'>
					    <h4 style="color:#000">Sectors</h4>
					    <button class="filter" data-filter=".consumer" group='sector'>Consumer Goods</button>
					    <button class="filter" data-filter=".digital" group='sector'>Digital Services</button>
					    <button class="filter" data-filter=".distribution" group='sector'>Distribution</button>
					    <button class="filter" data-filter=".energy" group='sector'>Energy</button>
					    <button class="filter" data-filter=".financial" group='sector'>Financial Services</button>
					    <button class="filter" data-filter=".infrastructure" group='sector'>Infrastructure</button>
					    <button class="filter" data-filter=".paper" group='sector'>Paper Products</button>
					    <button class="filter" data-filter=".real" group='sector'>Real Estates</button>
					    <button class="filter" data-filter=".textiles" group='sector'>Textiles</button>
					  </fieldset>
					 </div>

					 <div class="col-md-6 text-center">
					  <fieldset id='country'>
					    <h4 style="color:#000">Countries</h4>
					    <button class="filter" data-filter=".benin" group='country'>Benin</button>
					    <button class="filter" data-filter=".estonia" group='country'>Estonia</button>
					    <button class="filter" data-filter=".ghana" group='country'>Ghana</button>
					    <button class="filter" data-filter=".india" group='country'>India</button>
					    <button class="filter" data-filter=".indonesia" group='country'>Indonesia</button>
					    <button class="filter" data-filter=".ivory-coast" group='country'>Ivory Coast</button>
					    <button class="filter" data-filter=".nigeria" group='country'>Nigeria</button>
					    <button class="filter" data-filter=".tanzania" group='country'>Tanzania</button>
					    <button class="filter" data-filter=".togo" group='country'>Togo</button>
					    <button class="filter" data-filter=".singapore" group='country'>Singapore</button>
					  </fieldset>
					 </div>

					</form>


					<form class="controls row" id="Filters2">
						<div style="text-align: center;">
						<label><h4>FILTERS :</h4> </label><br>
						 <fieldset>
						    <select class="form-control">
						    	<option value="">All Sectors</option>
						      	<option value=".consumer">Consumer Goods</option>
						      	<option value=".digital">Digital Services</option>
						      	<option value=".distribution">Distribution</option>
						      	<option value=".energy">Energy</option>
						      	<option value=".financial">Financial Services</option>
						      	<option value=".infrastructure">Infrastructure</option>
						      	<option value=".paper">Paper Products</option>
						      	<option value=".real">Real Estates</option>
						      	<option value=".textiles">Textiles</option>
						    </select>
						  </fieldset>
						  
						  <fieldset>
						    <select class="form-control">
						      <option value="">All Countries</option>
						      <option value=".benin">Benin</option>
						      <option value=".estonia">Estonia</option>
						      <option value=".ghana">Ghana</option>
						      <option value=".india">India</option>
						      <option value=".indonesia">Indonesia</option>
						      <option value=".ivory-coast">Ivory Coast</option>
						      <option value=".nigeria">Nigeria</option>
						      <option value=".tanzania">Tanzania</option>
						      <option value=".togo">Togo</option>
						      <option value=".singapore">Singapore</option>
						    </select>
						  </fieldset>
						</div>
					</form>


				</div>

					<div id="Container" class="container">

					<div id="ohsnap" style="text-align: center; width: 80%"></div>	

					  <div class="mix singapore col-xs-12 col-sm-4 col-md-4 col-lg-4" country='singapore' sector='null'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup1_open" >
					        <img src="assets/img/our_business/IBP-building.jpg" alt="">
					    </a>
						   <div id="popup1">
								<div class="row">
									<button class="businessClose popup1_close">Close</button>
									<div class="col-md-6">
										<img src="assets/img/our_business/IBP-building.jpg" style="width:100%">
									</div>
									<div class="col-md-6">
										<div class="row box-desc">
											<div class="col-md-12" style="padding-bottom: 18px;">
												<p class="business_title">Tolaram Corporation</p>
												<p class="business_subtitle">Singapore, Benin, Estonia, Ghana, India, Indonesia, Nigeria, Togo, UAE</p>
												<p class="business_desc">The Group’s Head Office is located at 1A International Business Park, Singapore. Central functions like Business Development, Communications, HR, Finance and Internal Audit are co-ordinated from this office.</p>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													</div>
													<div class="col-md-9 col-xs-8" style="padding-right:38px;">
														<div class="lead-desc">
															<h5 style="font-size:13px;color:#5d5d5d"></h5>
								       						<p style="font-size:13px;color:#5d5d5d"></p>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					  </div>


					  <!-- project 2 -->
					  <div class="mix financial indonesia col-xs-12 col-sm-4 col-md-4 col-lg-4" country='indonesia' sector='financial'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup2_open" >
							<img src="assets/img/our_business/sector/amarbank_bg.png" alt="">			
						</a>

						<div id="popup2">
							<div class="row">
								<button class="businessClose popup2_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/amar800x600.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">Bank Amar</p>
											<p class="business_subtitle">Indonesia</p>
											<p class="business_desc">Arzu Utama Realty is the developer of Arzuria, a 32-storey upscale residential apartment in central Jakarta occupying a land area of 6,800 sq. m.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/no-photo.gif" class="img-responsive">
												</div>
												<div class="col-md-9 col-xs-8" style="padding-right:38px;">
													<div class="lead-desc">
														<h5 style="font-size:13px;color:#5d5d5d">B. BUDIJANTO JAHJA<br>President Director</h5>
													      <p style="font-size:13px;color:#5d5d5d">Tan Swee Siong joined the Group in April 2006 as Head, Real Estate. He oversees all investment, divestiture, development, management and capital market activities in Tolaram’s real estate portfolio.<br/><br/>He holds a B.Eng (Hons) from the National University of Singapore and obtained MBA's from both Melbourne Business School and Johnson Graduate School of Management in Cornell University. Swee Siong also holds a Capital Market Service License in “Advising on Corporate Finance”.</p>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					  </div>


					  <!-- project 3 -->
					  <div class="mix real indonesia col-xs-12 col-sm-4 col-md-4 col-lg-4" country='indonesia' sector='real'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup3_open" >
							<img src="assets/img/our_business/sector/arzu_bg.png" alt="">			
						</a>
						<div id="popup3">
							<div class="row">
								<button class="businessClose popup3_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/arzu.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">Arzu Utama Realty</p>
											<p class="business_subtitle">Indonesia</p>
											<p class="business_desc">Arzu Utama Realty is the developer of Arzuria, a 32-storey upscale residential apartment in central Jakarta occupying a land area of 6,800 sq. m.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/Swee-Siong-Tan.jpg" class="img-responsive">
												</div>
											<div class="col-md-9 col-xs-8" style="padding-right:38px;">
												<div class="lead-desc">
													<h5 style="font-size:13px;color:#5d5d5d">TAN SWEE SIONG<br>Head, Real Estate</h5>
												      <p style="font-size:13px;color:#5d5d5d">Tan Swee Siong joined the Group in April 2006 as Head, Real Estate. He oversees all investment, divestiture, development, management and capital market activities in Tolaram’s real estate portfolio.<br/><br/>He holds a B.Eng (Hons) from the National University of Singapore and obtained MBA's from both Melbourne Business School and Johnson Graduate School of Management in Cornell University. Swee Siong also holds a Capital Market Service License in “Advising on Corporate Finance”.</p>
												</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					  </div>

					  <!-- project 4 -->
					  <div class="mix financial indonesia col-xs-12 col-sm-4 col-md-4 col-lg-4" country='indonesia' sector='financial'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup4_open" >
							<img src="assets/img/our_business/sector/insura_bg.png" alt="">			
						</a>
						<div id="popup4">
							<div class="row">
								<button class="businessClose popup4_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/asuransi_rama_800x600.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">Asuransi Rama</p>
											<p class="business_subtitle">Indonesia</p>
											<p class="business_desc">Established in 1978, Asuransi Rama ranks within the top 25 insurance companies in Indonesia. Headquartered in Jakarta, Rama has a network of 17 branches throughout Indonesia.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/Dimas Mulyanto-4110004.jpg" class="img-responsive">
												</div>
											<div class="col-md-9 col-xs-8" style="padding-right:38px;">
												<div class="lead-desc">
													<h5 style="font-size:13px;color:#5d5d5d">DIMAS MULYANTO<br>Chief Financial Officer</h5>
												      <p style="font-size:13px;color:#5d5d5d">Dimas Mulyanto joined the Group in 2014 as Chief Financial Officer, overseeing all financial functions and strategic business decisions. He has over 16 years of experience in renowned audit and insurance companies.<br/><br/>He holds a Bachelor’s degree in Accounting from Brawijaya University and is a registered accountant in Indonesia.</p>
												</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					
					  </div>

					  <!-- project 5 -->
					  <div class="mix distribution nigeria col-xs-12 col-sm-4 col-md-4 col-lg-4" country='nigeria' sector='distribution'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup5_open" >
							<img src="assets/img/our_business/sector/bhn_bg.png" alt="">			
						</a>	
						<div id="popup5">
							<div class="row">
								<button class="businessClose popup5_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/bhn_800x600.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">BHN</p>
											<p class="business_subtitle">Nigeria</p>
											<p class="business_desc">With a fleet of 600 trucks, BHN provides haulage services to many blue-chip companies in Nigeria.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/porus.png" class="img-responsive">
												</div>
											<div class="col-md-9 col-xs-8" style="padding-right:38px;">
												<div class="lead-desc">
													<h5 style="font-size:13px;color:#5d5d5d">PORUS DOCTOR<br>General Manager</h5>
												      <p style="font-size:13px;color:#5d5d5d">Porus Doctor has served companies like MultiPro, Insignia for five years as part of the senior management team, before becoming General Manager of BHN Division of MultiPro Enterprises Limited in November 2009.<br/><br/>He has over 16 years of work experience and was previously working with esteemed auditors, Deloitte, for five years before joining Tolaram Group. He is a qualified Chartered Accountant from India.</p>
												</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					  </div>


					  <!-- project 6 -->
					  <div class="mix consumer nigeria col-xs-12 col-sm-4 col-md-4 col-lg-4" country='nigeria' sector='consumer'>
					  	<a href="3" class="cbp-caption cbp-singlePageInline popup6_open" >
							<img src="assets/img/our_business/sector/dufil.png" alt="">			
						</a>
						<div id="popup6">
							<div class="row">
								<button class="businessClose popup6_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/dufill_800x600.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">Dufil Prima Foods</p>
											<p class="business_subtitle">Nigeria</p>
											<p class="business_desc">Dufil Prima Foods PLC (a joint venture with Salim Group) manufactures and markets instant noodles, pasta, cooking oil and snacks in West Africa with plants located in the Nigerian cities of Kaduna, Ota and Port Harcourt. The company also manufactures flour, seasoning and packaging material.<br>Its flagship brands are Indomie instant noodles, Power Pasta, Power Oil and Minimie snacks.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/no-photo.gif" class="img-responsive">
												</div>
											<div class="col-md-9 col-xs-8" style="padding-right:38px;">
												<div class="lead-desc">
													<h5 style="font-size:13px;color:#5d5d5d">DEEPAK SINGHAL<br>Group CEO</h5>
												</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					  </div>

					  <!-- project 7 -->
					  <div class="mix distribution nigeria col-xs-12 col-sm-4 col-md-4 col-lg-4" country='nigeria' sector='distribution'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup7_open" >
							<img src="assets/img/our_business/sector/first.choice_bg.png" alt="">			
						</a>
						<div id="popup7">
							<div class="row">
								<button class="businessClose popup7_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/firstchoice_800x600.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">FIRST CHOICE RETAILING</p>
											<p class="business_subtitle">Nigeria</p>
											<p class="business_desc">First Choice Retailing Limited is the largest chain of organised retail stores providing Nigerians with convenient shopping for their everyday needs. There are currently 250 outlets under the brand of “Best Choice” in Lagos, with plans to extend the brand to other cities.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/udayan.png" class="img-responsive">
												</div>
												<div class="col-md-9 col-xs-8" style="padding-right:38px;">
													<div class="lead-desc">
														<h5 style="font-size:13px;color:#5d5d5d">UDAYAN DASGUPTA<br>Group CEO</h5>
														<p style="font-size:13px;color:#5d5d5d">Udayan Dasgupta joined the group in 2011 under the Best Choice Division of Multi-Pro Enterprises Ltd. He was appointed the General Manager of First Choice Retailing Ltd. in June 2012, bringing with him a vast amount of experience in Supply Chain Management which he gathered by working in Infosys Technologies Ltd, Bangalore for four years.<br/><br/>Udayan has a post graduate degree in Management from the Indian School of Business, Hyderabad, and completed his B.Tech at the Indian Institute of Technology, Roorkee in 2006.</p>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					  </div>

					  <!-- project 8 -->
					  <div class="mix paper estonia col-xs-12 col-sm-4 col-md-4 col-lg-4" country='estonia' sector='paper'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup8_open" >
							<img src="assets/img/our_business/sector/horizon.paper_bg.png" alt="">			
						</a>
						<div id="popup8">
							<div class="row">
								<button class="businessClose popup8_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/horizonpaper_800x600.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">HORIZON PULP & PAPER</p>
											<p class="business_subtitle">Estonia</p>
											<p class="business_desc">Horizon Pulp and Paper Limited is Estonia’s only integrated producer of quality unbleached sack kraft paper, and supplies to over 50 countries around the world.<br/>In 2013, the company celebrated its 75th year of operations.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/Bashyam-Krishnan.jpg" class="img-responsive">
												</div>
												<div class="col-md-9 col-xs-8" style="padding-right:38px;">
													<div class="lead-desc">
														<h5 style="font-size:13px;color:#5d5d5d">BASHYAM KRISHNAN<br>Group CEO</h5>
														<p style="font-size:13px;color:#5d5d5d">Bashyam Krishnan joined Tolaram in 2013 as Group CEO of Horizon Pulp & Paper. He has over 10 years of senior management experience in various countries. <br/><br/>He holds a Bachelor of Engineering in Chemical Engineering from the Birla Institute of Technology & Science, Pilani, India.</p>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					  </div>

					  <!-- project 9 -->
					  <div class="mix consumer estonia col-xs-12 col-sm-4 col-md-4 col-lg-4" country='estonia' sector='consumer'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup9_open" >
							<img src="assets/img/our_business/sector/horizon.tisue_bg.png" alt="">			
						</a>
						<div id="popup9">
							<div class="row">
								<button class="businessClose popup9_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/horizontisue800x600.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">HORIZON TISSUE</p>
											<p class="business_subtitle">Estonia</p>
											<p class="business_desc">Horizon Tissue manufactures toilet rolls, kitchen towels and napkins for export to Baltic and Nordic countries. The brand operates under the name “Daisy” in the private label segment, and counts some of the country’s leading retailers as its customers.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/DEEPANKAR.png" class="img-responsive">
												</div>
												<div class="col-md-9 col-xs-8" style="padding-right:38px;">
													<div class="lead-desc">
														<h5 style="font-size:13px;color:#5d5d5d">DEEPANKAR RUSTAGI<br>General Manager</h5>
														<p style="font-size:13px;color:#5d5d5d">Deepankar Rustagi joined Tolaram Group in Jan 2008, and has worked with Dufil Prima and Lucky Fibres. In 2011, he was appointed business head to launch Tolaram Group's first venture into digital services, VConnect Global Services.<br/><br/>Prior to joining Tolaram, he was a Business Analyst in Bangalore with Keane, a Boston based IT Services company. <br/>He is an Engineering Graduate from Bangalore.</p>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					  </div>

					  <!-- Project 10 -->
					  <div class="mix consumer nigeria col-xs-12 col-sm-4 col-md-4 col-lg-4" country='nigeria' sector='consumer'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup10_open" >
							<img src="assets/img/our_business/sector/hypo_bg.png" alt="">			
						</a>
						<div id="popup10">
							<div class="row">
								<button class="businessClose popup10_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/hypo_800x600.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">HYPO BLEACH</p>
											<p class="business_subtitle">Nigeria</p>
											<p class="business_desc">Launched in 2011, Hypo Bleach holds the highest market share in its category, and aims to significantly impact the availability of hygiene and sanitation solutions for Nigerians.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/no-photo.gif" class="img-responsive">
												</div>
												<div class="col-md-9 col-xs-8" style="padding-right:38px;">
													<div class="lead-desc">
														<h5 style="font-size:13px;color:#5d5d5d">VANI MALIK<br></h5>
														<p style="font-size:13px;color:#5d5d5d"></p>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					  </div>

					  <!-- Project 11 -->
					  <div class="mix infrastructure nigeria col-xs-12 col-sm-4 col-md-4 col-lg-4" country='nigeria' sector='infrastructure'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup11_open" >
					        <img src="assets/img/our_business/sector/lagosfreetradezone_lftz_bg.png" alt="">
					    </a>
						<div id="popup11">
							<div class="row">
								<button class="businessClose popup11_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/lftz_800x600.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">LAGOS FREE TRADE ZONE</p>
											<p class="business_subtitle">Nigeria</p>
											<p class="business_desc">Spread over an area of 800 hectares, the Lagos Free Trade Zone (LFTZ) serves as an industrial and commercial hub for West Africa. LFTZ is strategically located to facilitate trade and boost the economy of Nigeria as well as neighbouring countries in Africa.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/KS_full_pic.png" class="img-responsive">
												</div>
												<div class="col-md-9 col-xs-8" style="padding-right:38px;">
													<div class="lead-desc">
														<h5 style="font-size:13px;color:#5d5d5d">KUNDAN SAINANI<br>Chief Financial Officer</h5>
														<p style="font-size:13px;color:#5d5d5d">Kundan Sainani joined the Group in 1999 as a Group Internal Auditor. He became the Director, Finance for Viva Methanol LFTZ Enterprise in 2003 before moving on to his role as CFO in LFTZ to take charge of the development of this mega-scale integrated industrial park.<br/><br/>He has over 25 years of experience in the steel, paper, textile, chemicals, food sector, infrastructure and construction industries.<br/>He is a commerce graduate and a member of the Institute of Chartered Accountants of India.</p>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					  </div>

					  <!-- Project 12 -->
					  <div class="mix infrastructure nigeria col-xs-12 col-sm-4 col-md-4 col-lg-4" country='nigeria' sector='infrastructure'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup12_open" >
							<img src="assets/img/our_business/sector/lekki.port_bg.png" alt="">			
						</a>

						<div id="popup12">
							<div class="row">
								<button class="businessClose popup12_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/lekki800x600.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">LEKKI DEEP SEA PORT</p>
											<p class="business_subtitle">Nigeria</p>
											<p class="business_desc">A USD 1.5 billion project, the Lekki Deep Sea Port will be the first privately built port in Nigeria and is slated to become the largest port in the country upon its completion.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/no-photo.gif" class="img-responsive">
												</div>
												<div class="col-md-9 col-xs-8" style="padding-right:38px;">
													<div class="lead-desc">
														<h5 style="font-size:13px;color:#5d5d5d">SANDEEP PARASRAMKA<br></h5>
														<p style="font-size:13px;color:#5d5d5d"></p>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					  </div>

					  <!-- Project 13 -->
					  <div class="mix textiles indonesia col-xs-12 col-sm-4 col-md-4 col-lg-4" country='indonesia' sector='textiles'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup13_open" >
							<img src="assets/img/our_business/sector/lotus.indah_bg.png" alt="">			
						</a>

						<div id="popup13">
							<div class="row">
								<button class="businessClose popup13_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/lotus_indah_800x600.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">LOTUS INDAH</p>
											<p class="business_subtitle">Indonesia</p>
											<p class="business_desc">Lotus Indah Textile Industries produces Synthetic Spun Yarns from Ring Spinning (100% Polyester, 100% Viscose & Poly/Viscose), Open End Spinning (100% Polyester & 100% Viscose) and Murata Vortex Spinning (100% Viscose) in Single, Double (TFO) and Multifold. The company exports to over 30 countries in the world.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/G.Venkatesh.png" class="img-responsive">
												</div>
												<div class="col-md-9 col-xs-8" style="padding-right:38px;">
													<div class="lead-desc">
														<h5 style="font-size:13px;color:#5d5d5d">GOPAL VENKATESH<br>CEO</h5>
														<p style="font-size:13px;color:#5d5d5d">Gopal Venkatesh joined the Group in May 2013 as the CEO of Lotus Indah Textiles. He has over 29 years of experience, including 12 years in top management positions in various companies in the world.<br/><br/>He holds a Bachelor of Technology and post-graduate Diploma in Business Management.</p>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					  </div>

					  <!-- Project 14 -->
					  <div class="mix textiles nigeria col-xs-12 col-sm-4 col-md-4 col-lg-4" country='nigeria' sector='textiles'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup14_open" >
							<img src="assets/img/our_business/sector/lucky.fabries_bg.png" alt="">			
						</a>

						<div id="popup14">
							<div class="row">
								<button class="businessClose popup14_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/luckyfibre_800x600.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">LUCKY FIBRES</p>
											<p class="business_subtitle">Nigeria</p>
											<p class="business_desc">Lucky Fibres PLC is the largest integrated manufacturer of printed, woven and tufted carpets and rugs in West Africa. Marketed under the brand Nobel Carpets, it is a household name for rugs and carpets in Nigeria. Its resources are also employed in contract manufacturing.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/kunal.png" class="img-responsive">
												</div>
												<div class="col-md-9 col-xs-8" style="padding-right:38px;">
													<div class="lead-desc">
														<h5 style="font-size:13px;color:#5d5d5d">KUNAL MALHOTRA<br>General Manager</h5>
														<p style="font-size:13px;color:#5d5d5d">Kunal Malhotra is the General Manager of Lucky Fibres. He began his career with the Group in 2007 as a Relationship Manager in BHN. He was promoted to head the Logistics department of BHN in 2009 and subsequently as General Manager of Panabiz International Ltd in February 2010. He was later given the assignment to turn around Asian Motors Limited in December 2011 and led Asian Motors to record its highest ever sales in a five month period during 2012.<br/><br/>He graduated from Purdue University with a Bachelor of Science in Business Administration in 2003.</p>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					  </div>

					  <!-- Project 15 -->
					  <div class="mix energy ghana india nigeria col-xs-12 col-sm-4 col-md-4 col-lg-4" country='nigeria' country-2='india' country-3='ghana' sector='energy'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup15_open" >
							<img src="assets/img/our_business/sector/mbh.power_bg.png" alt="">			
						</a>

						<div id="popup15">
							<div class="row">
								<button class="businessClose popup15_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/energy_power_800x600.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">MBH POWER</p>
											<p class="business_subtitle">Ghana, India, Nigeria</p>
											<p class="business_desc">MBH Power Limited is a total energy solutions company providing world-class services to meet the growing demand of the power sector in emerging markets. It focuses on:
							            <br/>&#8226;EPC solutions in Transmission and Distribution
							               <br/>&#8226;Turnkey solutions in Captive Power Generation by using CNG
							                <br/>&#8226;Metering and Energy Audit
							                <br/>&#8226;Solar Power Generation<br/>
							            MBH Power has now embarked on development of a 300 MW independent power project in Nigeria.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/Manish.jpg" class="img-responsive">
												</div>
												<div class="col-md-9 col-xs-8" style="padding-right:38px;">
													<div class="lead-desc">
														<h5 style="font-size:13px;color:#5d5d5d">MANISH MITTAL<br>CEO</h5>
														<p style="font-size:13px;color:#5d5d5d">Manish Mittal is CEO of MBH Group. He joined the company in November 2006 and became CEO of Nigeria's operations the following year.<br/><br/>He holds a Bachelor's degree in Electrical Engineering and is an ABB certified Project Manager.</p>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					  </div>

					  <!-- Project 16 -->
					  <div class="mix distribution ghana nigeria col-xs-12 col-sm-4 col-md-4 col-lg-4" country='nigeria' country-2='ghana' sector='distribution'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup16_open" >
							<img src="assets/img/our_business/sector/multipro_bg.png" alt="">			
						</a>

						<div id="popup16">
							<div class="row">
								<button class="businessClose popup16_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/multipro_800x600.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">MULTI PRO ENTERPRISES</p>
											<p class="business_subtitle">Ghana, Nigeria</p>
											<p class="business_desc">Multi Pro Enterprises Limited is the largest consumer goods distribution company in West Africa. Its reach is about half a million points-of-sales.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/Girish.jpg" class="img-responsive">
												</div>
												<div class="col-md-9 col-xs-8" style="padding-right:38px;">
													<div class="lead-desc">
														<h5 style="font-size:13px;color:#5d5d5d">GIRISH SHARMA<br>General Manager</h5>
														<p style="font-size:13px;color:#5d5d5d"></p>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					  </div>

					  <!-- Project 17 -->
					  <div class="mix real estonia col-xs-12 col-sm-4 col-md-4 col-lg-4" country='estonia' sector='real'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup17_open" >
							<img src="assets/img/our_business/sector/tolaram.investment_bg.png" alt="">			
						</a>

						<div id="popup17">
							<div class="row">
								<button class="businessClose popup17_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/tolaraminvest800x600.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">TOLARAM INVESTMENTS</p>
											<p class="business_subtitle">Estonia</p>
											<p class="business_desc">Tolaram Investments AS owns a 10.8 ha industrial site in North Tallinn with approvals to develop the site into a mixed commercial and residential development of 200,000 sq.m. It recently completed the building for Norwegian-owned supermarket chain Rimi. It is also the developer of Pagari One, formerly a KGB headquarters, which has been restored as a complex of 42 luxury apartments.<br/>Its subsidiary TH Investments developed and owns a building that houses Hawaii Express Retail and Al Mare Bowling.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/Swee-Siong-Tan.jpg" class="img-responsive">
												</div>
												<div class="col-md-9 col-xs-8" style="padding-right:38px;">
													<div class="lead-desc">
														<h5 style="font-size:13px;color:#5d5d5d">TAN SWEE SIONG<br>Head, Real Estate</h5>
														<p style="font-size:13px;color:#5d5d5d">Tan Swee Siong joined the Group in April 2006 as Head, Real Estate. He oversees all investment, divestiture, development, management and capital market activities of Tolaram’s real estate portfolio.<br/><br/>He holds a B.Eng (Hons) from the National University of Singapore and obtained MBAs from both Melbourne Business School and Johnson Graduate School of Management in Cornell University. Swee Siong also holds a Capital Market Service License in “Advising on Corporate Finance”.</p>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					  </div>

					  <!-- Project 18 -->
					  <div class="mix digital indonesia col-xs-12 col-sm-4 col-md-4 col-lg-4" country='indonesia' sector='digital'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup18_open" >
							<img src="assets/img/our_business/sector/tunaiku_bg.png" alt="">			
						</a>

						<div id="popup18">
							<div class="row">
								<button class="businessClose popup18_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/tunaiku800x600.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">TUNAIKU</p>
											<p class="business_subtitle">Indonesia</p>
											<p class="business_desc">Tunaiku is an IT data analytics company, focusing on financial services.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/photo.jpg" class="img-responsive">
												</div>
												<div class="col-md-9 col-xs-8" style="padding-right:38px;">
													<div class="lead-desc">
														<h5 style="font-size:13px;color:#5d5d5d">VISHAL TULSIAN<br>CEO</h5>
														<p style="font-size:13px;color:#5d5d5d">Vishal Tulsian joined the Group in May 2003 as Finance Manager. He became the CEO of Horizon Tissue and Horizon Pulp & Paper in 2006, and is currently the Group Head of Business Development in Indonesia. <br/><br/>He holds a degree in Chartered Accountancy from the Institute of Chartered Accountants in India and he completed his MBA in London.</p>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					  </div>

					  <!-- project 19 -->
					  <div class="mix digital nigeria col-xs-12 col-sm-4 col-md-4 col-lg-4" country='nigeria' sector='digital'>
					  	<a href="#" class="cbp-caption cbp-singlePageInline popup19_open" >
							<img src="assets/img/our_business/sector/vconnect_bg.png" alt="">			
						</a>

						<div id="popup19">
							<div class="row">
								<button class="businessClose popup19_close">Close</button>
								<div class="col-md-6">
									<img src="assets/img/our_business/vconnect800x600.png" style="width:100%">
								</div>
								<div class="col-md-6">
									<div class="row box-desc">
										<div class="col-md-12" style="padding-bottom: 18px;">
											<p class="business_title">VCONNECT</p>
											<p class="business_subtitle">Nigeria</p>
											<p class="business_desc">VConnect is the largest local search engine and ecommerce company in Nigeria. With more than one million businesses listed, it provides extensive information about products, services and companies in Nigeria.<br/>It has also been recognised as the “Hottest Tech Startup” in Africa by Forbes Magazine.</p>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3 col-xs-4" style="padding-right: 0;">
													<img src="assets/img/ceos/DEEPANKAR.png" class="img-responsive">
												</div>
												<div class="col-md-9 col-xs-8" style="padding-right:38px;">
													<div class="lead-desc">
														<h5 style="font-size:13px;color:#5d5d5d">DEEPANKAR RUSTAGI<br>General Manager</h5>
														<p style="font-size:13px;color:#5d5d5d">Deepankar Rustagi joined Tolaram Group in Jan 2008, and has worked with Dufil Prima and Lucky Fibres. In 2011, he was appointed business head to launch Tolaram Group's first venture into digital services, VConnect Global Services.<br/><br/>Prior to joining Tolaram, he was a Business Analyst in Bangalore with Keane, a Boston based IT Services company. <br/>He is an Engineering Graduate from Bangalore.</p>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					  </div>

					  <div class="gap"></div>
					  <div class="gap"></div>
					  <div class="gap"></div>
					  <div class="gap"></div>
					 
					</div>

    			</div>
    		</div>

		</div>
	</div>

	<style type="text/css">
		 html,body{overflow: visible!important;}
		
		label{
		  font-weight: 300;
		}
		
		button{
		  display: inline-block;
		  background: transparent;
		  border: 0;
		  margin: 0 .2em;
		  color: #000;
		  font-size: 16px;
		  font-weight: 300;
		  border-radius: .10em;
		  cursor: pointer;
		  margin-bottom: 8px;
		  padding-top: 0;
			padding-bottom: 0;
			padding-right: 0;
			border-left: 1px solid #000;
		}

		button.active{
		  background: transparent;
		  color: #000;
		  font-weight: bold;
		}

		button:focus{
		  outline: 0 none;
		}

		button:first-of-type{
		  margin-left: 0;
		}

		button:last-of-type{
		  margin-right: 0;
		}
		 
		button:focus{
		  outline: 0 none;
		}
		 
		.controls{
		  padding: 2%;
		}
		 
		fieldset{
		  display: inline-block;
		  vertical-align: top;
		  margin: 0;
		  padding: 0;
		  border-radius: 3px;
		  padding-top: 10px;
			padding-left: 3px;
		}

		/**
		 * Container/Target Styles
		 */

		.container .gap{
		  width: 100px;
		  display: inline-block;
		  margin: 0 5%;
		}

		.container .mix{
		  background: white;
  		  display: none;
		  margin-bottom: 20px;
		}

		.container .mix a img {
			width: 100%;
		}
		
		.hidden_content{
			display: none;
		}

		@media screen and (max-width: 768px){
			button.businessClose {
				right: 18px!important;
			}
		}

		@media all and (min-width: 420px){
		  .container .mix,
		  .container .gap{
		    width: 32%;
		  }
		}
		 .csroverlay .container p {
		 	text-align: left;
		 }

		/* ALERTS */
		/* inspired by Twitter Bootstrap */

		.alert {
		  padding: 10px;
		  border: 1px solid #eed3d7;
		  border-radius: 1px;
		  position: absolute;
		  margin-top: 0 auto;
		  margin-right: 0 auto;
		  /* Each alert has its own width */
		  float: right; 
		  clear: right;
		}

		.alert-red {
		  color: white;
		  background-color: #DA4453;
		}

	</style>

	<script type="text/javascript">
	$(document).ready(function () {

		$('#popup1,#popup2,#popup3,#popup4,#popup5,#popup6,#popup7,#popup8,#popup9,#popup10,#popup11,#popup12,#popup13,#popup14,#popup15,#popup16,#popup17,#popup18,#popup19').popup({transition: 'all 0.3s'});

		$.removeCookie('initFilter');

		// ******************************************************************************************************* //
		// *******************************  BUTTON SECTION ******************************************************* //
		// ******************************************************************************************************* //
		
		var buttonFilter = {
		  
		  // Declare any variables we will need as properties of the object
		  
		  $filters: null,
		  $reset: null,
		  groups: [],
		  outputArray: [],
		  outputString: '',

		  
		  // The "init" method will run on document ready and cache any jQuery objects we will need.
		  
		  init: function(){
		    var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "buttonFilter" object so that we can share methods and properties between all parts of the object.
		    
		    self.$filters = $('#Filters');
		    self.$reset = $('#Reset');
		    self.$container = $('#Container');
		    
		    self.$filters.find('fieldset').each(function(){
		      self.groups.push({
		        $buttons: $(this).find('.filter'),
		        active: ''
		      });
		    });
		    
		    self.bindHandlers();
		  },
		  
		  // The "bindHandlers" method will listen for whenever a button is clicked. 
		  
		  bindHandlers: function(){
		    var self = this;
		    
		    // Handle filter clicks
		    
		    self.$filters.on('click', '.filter', function(e){
		      e.preventDefault();
		      
		      var $button = $(this);

		      // If the button is active, remove the active class, else make active and deactivate others.

		      // ************************ Below is Customized Part *********************************
		  	 
		  	  if ($button.hasClass('active')) { // Make the button inactive
		      	if ($.cookie('initFilter')) { // If cookie has been set
		      		if (($.cookie('initFilter')) == ($button.attr('data-filter'))) { // if deativated button is the same to init button
		      			$button.removeClass('active');
		      			$button.siblings('.filter').removeClass('.active').attr('disabled', false).css('color', '#000')
		      			for(var i = 0, group; group = self.groups[i]; i++) { // Crawl other group
		      				group.$buttons.removeClass('active');
		      				group.$buttons.attr('disabled', false).css('color', '#000');
					    }
		      			$.removeCookie('initFilter'); // Remove the stored cookie
		      		}
		      		else { // if deactivated button is NOT the same to init button
		      			$button.removeClass('active');
		      			$button.siblings('.filter').find('disabled').each(function(){
					      	$button.siblings('.filter').attr('disabled', true);
					    });
		      		}
		      	} 
		      	else { // If cookie is not set
		      		alert('whoaa.. nothing to do here...');
		      	}
		      }
		      else { // Activate the button!
		      	if ($.cookie('initFilter')) { // If cookie has been set
		      		$button.addClass('active');
		      		$button.siblings('.filter').removeClass('active')
		      		if (($.cookie('initFilter')) != ($button.attr('data-filter'))) { // if activated button is not the same to init button
		      			$button.siblings('.filter').find('disabled').each(function(){
					      	$button.attr('disabled', true).css('color', '#e8e8e8');
					    });
					    for(var i = 0, group; group = self.groups[i]; i++) { // Crawl other group 
					    	group.$buttons.find('disabled').each(function(){ // Find button that is enabled/disabled and keep it that way
						      	group.$buttons.attr('disabled', true);
						    });	
					    }
		      		}
		      	}
		      	else { // If cookie is not set
		      		$.cookie('initFilter', $button.attr('data-filter')); // record initFilter cookie
		      		$button.addClass('active').siblings('.filter').removeClass('active').attr('disabled', true).css('color', '#e8e8e8'); // Grey
			      	for(var i = 0, group; group = self.groups[i]; i++) { // Crawl other group
				      group.$buttons.not('.active').attr('disabled', true).css('color', '#e8e8e8');
				    }
		      	}
		      }

		      console.log($.cookie('initFilter')); // Test showing output up in console
		      // **************************************************************************************

		      self.parseFilters();
		    });
		    
		    // Handle reset click
		    
		    self.$reset.on('click', function(e){
		      e.preventDefault();
		      
		      self.$filters.find('.filter').removeClass('active');
		      
		      self.parseFilters();
		    });
		  },
		  
		  // The parseFilters method checks which filters are active in each group:
		  
		  parseFilters: function() {
		    var self = this;
		 
		    // loop through each filter group and grap the active filter from each one.
		    
		    for(var i = 0, group; group = self.groups[i]; i++){
		      group.active = group.$buttons.filter('.active').attr('data-filter') || '';

		    }

		    self.concatenate();
		  },
		  
		  // The "concatenate" method will crawl through each group, concatenating filters as desired:
		  
		  concatenate: function(){
		    var self = this;
		    
		    self.outputString = ''; // Reset output string
		    
		    for(var i = 0, group; group = self.groups[i]; i++){
		      self.outputString += group.active;
		    }
		    
		    // If the output string is empty, show all rather than none:
		    
		    !self.outputString.length && (self.outputString = 'all');
		    
		    // Send the output string to MixItUp via the 'filter' method:
		    
		    self.outputData = '';
			  if(self.$container.mixItUp('isLoaded')){
		    	self.$container.mixItUp('filter', self.outputString);

		    	// ************************** Below is Customized *************************

				self.activeId = self.$filters.find('.active').attr('group') || 'null';
				if (self.activeId == 'sector') {
					country = '';
					self.$container.find(self.outputString).each(function(){
						country = '.' + $(this).attr('country');
						$('.filter[data-filter="'+country+'"]').attr('disabled', false).css('color', '#000');
						//alert($(this).attr('data-filter'));
						if ($(this).attr('country-2')) { //if there is 2nd country
							country2 = '.' + $(this).attr('country-2');
							if (($.cookie('initFilter')) == (self.outputString)) {
								$('.filter[data-filter="'+country2+'"]').attr('disabled', false).css('color', '#000');	
							} else {
								$('.filter[data-filter="'+country2+'"]').attr('disabled', true).css('color', '#e8e8e8');
							}
						}
						if ($(this).attr('country-3')) { //if there is 3rd country
							country3 = '.' + $(this).attr('country-3');
							if (($.cookie('initFilter')) == (self.outputString)) {
								$('.filter[data-filter="'+country3+'"]').attr('disabled', false).css('color', '#000');
							} else {
								$('.filter[data-filter="'+country3+'"]').attr('disabled', true).css('color', '#e8e8e8');
							}
						}
				    });

				} else if (self.activeId == 'country') {
					sector = '';
					self.$container.find(self.outputString).each(function(){
						sector = '.' + $(this).attr('sector');
						$('.filter[data-filter="'+sector+'"]').attr('disabled', false).css('color', '#000');
				    });
				    
				} else {
			    	// IF NONE ACTIVE!
				}
			    // ************************** End of Customized Part *************************

			  }

		  }
		};
		  
		// On document ready, initialise our code.

		$(function(){
		      
		  // Initialize buttonFilter code
		      
		  buttonFilter.init();
		      
		  // Instantiate MixItUp
		      
		  $('#Container').mixItUp({
		    controls: {
		      enable: false, // we won't be needing these
		      toggleFilterButtons: true
		    },
		    callbacks: {
			    onMixEnd: function(){
		      		
			    }
		    }
		  });    
		});


		// ******************************************************************************************************* //
		// *******************************  DROPDOWN SECTION ***************************************************** //
		// ******************************************************************************************************* //

		var dropdownFilter = {
		  
		  // Declare any variables we will need as properties of the object
		  
		  $filters: null,
		  $reset: null,
		  groups: [],
		  outputArray: [],
		  outputString: '',
		  
		  // The "init" method will run on document ready and cache any jQuery objects we will need.
		  
		  init: function(){
		    var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "dropdownFilter" object so that we can share methods and properties between all parts of the object.
		    
		    self.$filters = $('#Filters2');
		    self.$reset = $('#Reset');
		    self.$container = $('#Container');
		    
		    self.$filters.find('fieldset').each(function(){
		      self.groups.push({
		        $dropdown: $(this).find('select'),
		        active: ''
		      });
		    });
		    
		    self.bindHandlers();
		  },
		  
		  // The "bindHandlers" method will listen for whenever a select is changed. 
		  
		  bindHandlers: function(){
		    var self = this;
		    
		    // Handle select change
		    
		    self.$filters.on('change', 'select', function(e){
		      e.preventDefault();
		      
		      self.parseFilters();
		    });
		    
		    // Handle reset click
		    
		    self.$reset.on('click', function(e){
		      e.preventDefault();
		      
		      self.$filters.find('select').val('');
		      
		      self.parseFilters();
		    });
		  },
		  
		  // The parseFilters method pulls the value of each active select option
		  
		  parseFilters: function(){
		    var self = this;
		 
		    // loop through each filter group and grap the value from each one.
		    
		    for(var i = 0, group; group = self.groups[i]; i++){
		      group.active = group.$dropdown.val();
		    }
		    
		    self.concatenate();
		  },
		  
		  // The "concatenate" method will crawl through each group, concatenating filters as desired:
		  
		  concatenate: function(){
		    var self = this;
		    
		    self.outputString = ''; // Reset output string
		    
		    for(var i = 0, group; group = self.groups[i]; i++){
		      self.outputString += group.active;
		    }
		    
		    // If the output string is empty, show all rather than none:
		    
		    !self.outputString.length && (self.outputString = 'all'); 
		    
		    //console.log(self.outputString); 
		    
		    // ^ we can check the console here to take a look at the filter string that is produced
		    
		    // Send the output string to MixItUp via the 'filter' method:
		    
			  if(self.$container.mixItUp('isLoaded')){
		    	self.$container.mixItUp('filter', self.outputString);
			  }
		  }
		};
		  
		// On document ready, initialise our code.

		$(function(){
		      
		  // Initialize dropdownFilter code
		      
		  dropdownFilter.init();
		      
		  // Instantiate MixItUp
		      
		  $('#Container').mixItUp({
		    controls: {
		      enable: false // we won't be needing these
		    },
		    callbacks: {
		      onMixFail: function(){
		        //alert('No items were found matching the selected filters.');
		        ohSnap('No items were found matching the selected filters.', 'red', 'icon-alert');
		      }
		    }
		  });    
		});

		


		


		});

		
	</script>

<?php
	include('include/footer.php');
?>
