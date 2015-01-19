<?php
    $pageTitle = 'Home'; 
    include('include/header.php');
?>
    <div class="cbp-spmenu-push">
        <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
            <nav role="navigation">
                <a href="about.php#about">ABOUT US</a>
                    <ul>
                        <li><a href="about.php#values" class="about_sub_nav">Guiding Values</a></li>
                        <li> <a href="about.php#vision" class="about_sub_nav">Vision & Mission</a></li>
                        <li> <a href="about.php#shareholders" class="about_sub_nav">Shareholders</a></li>
                    </ul>
                <a href="history.php">EVOLUTION</a>
                <a href="business.php">BUSINESSES</a>
                <a href="csr.php">COMMUNITIES</a>
                <a href="newsroom.php">NEWSROOM</a>
                <a href="contact.php">CONTACT US</a>
            </nav>
        </div>

        <header>
            <div class="brand white_nav_trigger">
            </div>
            <nav class="menu-trigger" id="menu-trigger">
                        <!--<label id="trigger-button" for="nav-trigger"></label>-->
                <span class="before"></span>
                <span class="main"></span>
                <span class="after"></span>
            </nav>
        </header>
        <div class="container">
            <div class="col-md-12">
                <img src="assets/img/TOLARAM_HOMEPAGE.png" style="margin-bottom:10px;">
                <p class="content">has been in business for more than 60 years<br/> 
                because we have always been able to innovate and reinvent ourselves. <br/> 
                We are focused on growing in these four business spheres: <br/> 
                Consumer Goods, Digital Services, Energy and Infrastructure.
                </p>
            </div>
        </div>
        <div data-vide-bg="assets/media/tolaram" class="video_bg"></div>
    </div>
    <style type="text/css">
        html{
            padding: 0 !important;
        }
        h3.title{
            font-size: 40px;
        }
    </style>
<?php
    include('include/footer.php');
?>
