<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shophub
 */

?>

<!-- rts footer area start -->
<div class="rts-footer-area-one pt--80 pb--80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- footer top area -->
                <div class="footer-top-area">
                    <div class="logo-area">
                        <a href="#">
                            <img class="light" src="<?= SHOPHUB_ASSETS_DIR ?>/images/logo/logo-1.svg" alt="logo">
                        </a>
                    </div>
                    <ul class="social-area-one">
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    </ul>
                </div>
                <!-- footer top area end -->
            </div>
        </div>
        <div class="row g-48 g-lg-0 pt--40">
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="single-footer-wized-one">
                    <h6 class="title">Solutions</h6>
                    <ul>
                        <li><a href="#">Content Marketing</a></li>
                        <li><a href="#">Consumer Insights</a></li>
                        <li><a href="#">SEO Content Strategy</a></li>
                        <li><a href="#">Keyword Research</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="single-footer-wized-one">
                    <h6 class="title">Resources</h6>
                    <ul>
                        <li><a href="#">Insights</a></li>
                        <li><a href="#">Keyword Generator</a></li>
                        <li><a href="#">Research Tool</a></li>
                        <li><a href="#">News & Events</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="single-footer-wized-one">
                    <h6 class="title">Company</h6>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="single-footer-wized-one">
                    <h6 class="title">Other links</h6>
                    <ul>
                        <li><a href="#">Content Marketing</a></li>
                        <li><a href="#">Consumer Insights</a></li>
                        <li><a href="#">SEO Content Strategy</a></li>
                        <li><a href="#">Keyword Research</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- footer input wrapper inbner-main area -->
                <div class="footer-input-main-wrapper-one">
                    <div class="single-footer-wized-one">
                        <h6 class="title">Newsletter</h6>
                        <form action="#">
                            <input type="email" placeholder="Email address.." required>
                            <i class="fa-regular fa-envelope"></i>
                            <button class="rts-btn btn-primary">Subscribe now</button>
                        </form>
                    </div>
                </div>
                <!-- footer input wrapper inbner-main area end -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- copyright area start -->
                <div class="copyright-area-start">
                    <p>© 2023 Fluxi, All right reserved.</p>
                    <ul>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="terms.html">Terms of service</a></li>
                    </ul>
                </div>
                <!-- copyright area end -->
            </div>
        </div>
    </div>
</div>
<!-- rts footer area end -->

<!-- progress area start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>
<!-- progress area end -->

<?php wp_footer(); ?>

</body>

</html>