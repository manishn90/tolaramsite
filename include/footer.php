	
	<script src="assets/css/bootstrap/js/bootstrap.js"></script>
	<script src="assets/js/vendor/modernizr.custom.js"></script>
	<script src="assets/js/vendor/jquery.vide.js"></script>
    <script src="assets/js/vendor/classie.js"></script>
    <script src="assets/js/vendor/jquery.fullPage.js"></script>

    <script type="text/javascript">
    	/* Menu Trigger */
    	var menuTrigger = document.getElementById( 'cbp-spmenu-s2' ),
                showRight = document.getElementById( 'menu-trigger' ),
                body = document.body;

            showRight.onclick = function() {
                classie.toggle( this, 'active' );
                classie.toggle( menuTrigger, 'cbp-spmenu-open' );
                disableOther( 'menu-trigger' );
            };
            

            function disableOther( button ) {
                if( button !== 'showRight' ) {
                    classie.toggle( showRight, 'disabled' );
                }
         }

		$(document).ready(function() {
			/* Scrool One Page */
			


			/* Menu Trigger */
			var nav_trigger = $('nav#menu-trigger');

            $(nav_trigger).click(function () {
                if ($(this).is('.active')) {
                    $(this).children('span.before').addClass('before_active');
                    $(this).children('span.after').addClass('after_active');
                    $(this).children('span.main').css('background','transparent!important');
                    $(nav_trigger).css('z-index','1111');
                } else if ($(this).not('.active')) {
                    $(this).children('span.before').removeClass('before_active');
                    $(this).children('span.after').removeClass('after_active');
                    $(this).children('span.main').css('background','#FFF');
                    $(nav_trigger).css('z-index','110');
                }
            });
            
		});

	</script>

	</body>
</html>	