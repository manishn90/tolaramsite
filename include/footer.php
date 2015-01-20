	
	<script src="assets/css/bootstrap/js/bootstrap.js"></script>
	<script src="assets/js/vendor/modernizr.custom.js"></script>
	<script src="assets/js/vendor/jquery.vide.js"></script>
    <script src="assets/js/vendor/classie.js"></script>
    <script src="assets/js/vendor/jquery.fullPage.js"></script>
    <script src="assets/js/vendor/background-check.min.js"></script>
    <script src="assets/js/vendor/jquery.mixitup.js"></script>

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
           
			/* Menu Trigger */
            var header = $('header div.brand');
            var nav_trigger = $('nav#menu-trigger');

            if ($(header).is('.white_nav_trigger')) {
                 $('.menu-trigger span, .menu-trigger span.before, .menu-trigger span.after').css('background-color','#FFF');
                 $(nav_trigger).click(function () {
                    if ($(this).is('.active')) {
                        $(this).children('span.before').addClass('before_active_white');
                        $(this).children('span.after').addClass('after_active_white');
                        $(this).children('span.main').css('background','transparent');
                        $(nav_trigger).css('z-index','1111');
                    } else if ($(this).not('.active')) {
                        $(this).children('span.before').removeClass('before_active_white');
                        $(this).children('span.after').removeClass('after_active_white');
                        $(this).children('span.main').css('background','#FFF');
                        $(nav_trigger).css('z-index','110');
                    }
                });
            } else  if ($(header).is('.black_nav_trigger')){
                $('.menu-trigger span, .menu-trigger span.before, .menu-trigger span.after').css('background-color','#000');
                $(nav_trigger).click(function () {
                    if ($(this).is('.active')) {
                        $(this).children('span.before').addClass('before_active_black');
                        $(this).children('span.after').addClass('after_active_black');
                        $(this).children('span.main').css('background','transparent');
                        $(nav_trigger).css('z-index','1111');
                    } else if ($(this).not('.active')) {
                        $(this).children('span.before').removeClass('before_active_black');
                        $(this).children('span.after').removeClass('after_active_black');
                        $(this).children('span.main').css('background','#000');
                        $(nav_trigger).css('z-index','110');
                    }
                });
            }

		});

	</script>


	</body>
</html>	