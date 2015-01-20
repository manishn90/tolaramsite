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

			<form class="controls row" id="Filters">
			  <!-- We can add an unlimited number of "filter groups" using the following format: -->
			 <div class="col-md-6 text-center ">
			  <fieldset>
			    <h4>Sectors</h4>
			    <button class="filter" data-filter=".consumer">Consumer Goods</button>
			    <button class="filter" data-filter=".digital">Digital Services</button>
			    <button class="filter" data-filter=".distribution">Distribution</button>
			    <button class="filter" data-filter=".energy">Energy</button>
			    <button class="filter" data-filter=".financial">Financial Services</button>
			    <button class="filter" data-filter=".infrastructure">Infrastructure</button>
			    <button class="filter" data-filter=".paper">Paper Products</button>
			    <button class="filter" data-filter=".real">Real Estates</button>
			    <button class="filter" data-filter=".textiles">Textiles</button>
			    <button id="Reset">Reset</button>
			  </fieldset>
			 </div>

			 <div class="col-md-6 text-center ">
			  <fieldset>
			    <h4>Countries</h4>
			    <button class="filter" data-filter=".benin">Benin</button>
			    <button class="filter" data-filter=".estonia">Estonia</button>
			    <button class="filter" data-filter=".ghana">Ghana</button>
			    <button class="filter" data-filter=".india">India</button>
			    <button class="filter" data-filter=".indonesia">Indonesia</button>
			    <button class="filter" data-filter=".ivory-coast">Ivory Coast</button>
			    <button class="filter" data-filter=".nigeria">Nigeria</button>
			    <button class="filter" data-filter=".tanzania">Tanzania</button>
			    <button class="filter" data-filter=".togo">Togo</button>
			    <button class="filter" data-filter=".singapore">Singapore</button>
			    <button id="Reset">Reset</button>
			  </fieldset>
			 </div>
			</form>

			<div id="Container" class="container">
			  <div class="mix singapore">
			  	<a href="ajax/project1.html" class="cbp-caption cbp-singlePageInline" data-title="Tolaram Corporation">
			        <img src="assets/img/our_business/IBP-building.jpg" alt="">
			    </a>
			  </div>
			  <div class="mix financial indonesia">
			  	<a href="ajax/project2.html" class="cbp-caption cbp-singlePageInline" data-title="Tolaram Corporation">
					<img src="assets/img/our_business/sector/amarbank_bg.png" alt="">			
				</a>
			  </div>
			  <div class="mix real indonesia">
			  	<a href="ajax/project3.html" class="cbp-caption cbp-singlePageInline" data-title="Tolaram Corporation">
					<img src="assets/img/our_business/sector/arzu_bg.png" alt="">			
				</a>
			  </div>
			  <div class="gap"></div>
			  <div class="gap"></div>
			  <div class="gap"></div>
			  <div class="gap"></div>
			</div>
    

		</div>
	</div>

	<style type="text/css">
		 
		/**
		 * Form & Button Styles
		 */
		 
		label{
		  font-weight: 300;
		}
		 
		button{
		  display: inline-block;
		  background: #666;
		  border: 0;
		  margin: 0 .2em;
		  color: #ddd;
		  font-size: 16px;
		  font-weight: 300;
		  border-radius: .10em;
		  cursor: pointer;
		  margin-bottom: 8px;
		}

		button.active{
		  background: #85201A;
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
		  margin: 0 1em 0 0;
		  padding: .5em;
		  border-radius: 3px;
		}

		/**
		 * Container/Target Styles
		 */

		.container{
		  text-align: justify;
		}

		.container .gap{
		  width: 100px;
		  display: inline-block;
		  margin: 0 5%;
		}

		.container .mix{
		  width: 32%;
		  background: white;
		  display: inline-block;
		}

		.container .mix.green{
		  background: #a6e6a7;
		}

		.container .mix.blue{
		  background: #6bd2e8;
		}

		.container .mix.circle{
		  border-radius: 999px;
		}

		.container .mix.triangle{
		  width: 0;
		  height: 0;
		  border: 50px solid transparent;
		  border-top-color: #68b8c4;
		  border-left-color: #68b8c4;
		}

		@media all and (min-width: 420px){
		  .container .mix,
		  .container .gap{
		    width: 32%;
		  }

	</style>

	<script type="text/javascript">
		// To keep our code clean and modular, all custom functionality will be contained inside a single object literal called "buttonFilter".

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
		      
		      $button.hasClass('active') ?
		        $button.removeClass('active') :
		        $button.addClass('active').siblings('.filter').removeClass('active');
		      
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
		  
		  parseFilters: function(){
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
		    
		    console.log(self.outputString); 
		    
		    // ^ we can check the console here to take a look at the filter string that is produced
		    
		    // Send the output string to MixItUp via the 'filter' method:
		    
			  if(self.$container.mixItUp('isLoaded')){
		    	self.$container.mixItUp('filter', self.outputString);
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
		      enable: false // we won't be needing these
		    },
		    callbacks: {
		      onMixFail: function(){
		        alert('No items were found matching the selected filters.');
		      }
		    }
		  });    
		});
	</script>

<?php
	include('include/footer.php');
?>