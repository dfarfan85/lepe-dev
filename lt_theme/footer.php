
</div> <!-- closed content-container from header.php --> 

    <!--SOCIAL MEDIA FOOTER-->
    <div class="container-fluid social-container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center my-display">
                FOLLOW US
            </div>
            <!--<div class="justify-content-around text-center col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="background: #d3a3a3;"> -->
        </div>
        <div class="row justify-content-center">
            <div class="d-flex justify-content-around text-center col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                <a target="_blank" href="<?php echo get_option('instagram'); ?>"><i class="social fab fa-instagram"></i></a>
                <a target="_blank" href="<?php echo get_option('facebook'); ?>"><i class="social fab fa-facebook-square"></i></a>
                <a target="_blank" href="<?php echo get_option('youtube'); ?>"><i class="social fab fa-youtube"></i></a>
                <a target="_blank" href="<?php echo get_option('twitter'); ?>"><i class="social fab fa-twitter"></i></a>
            </div>
            <!-- Gradient for instagram-->
            <svg width="0" height="0">
                <radialGradient id="rg" r="150%" cx="30%" cy="107%">
                    <stop stop-color="#fdf497" offset="0"/>
                    <stop stop-color="#fdf497" offset="0.05" />
                    <stop stop-color="#fd5949" offset="0.45" />
                    <stop stop-color="#d6249f" offset="0.6" />
                    <stop stop-color="#285AEB" offset="0.9" />
                </radialGradient>
            </svg>
        </div>
    </div>

    <!--FOOTER MOBILE-->
    <div class="container-fluid footer-container">
        <div class="row address-row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <img class="lepe-logo-footer" src="<?php bloginfo('template_url'); ?>/images/lepe-tendwell-logo.png">
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">2808 B St
                <br> San Diego, CA 92102
                <br>
                <a href="tel:6192082380">(619) 208-2380</a>
                <br>
                <a href="mailto:lepe@lepetendwell.com">Lepe@Lepetendwell.com</a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                Copyright &copy; 2018 &bull; Lepe Tendwell Properties
            </div>

        </div>
    </div>   
    <?php wp_footer(); ?>    
</body>

</html>