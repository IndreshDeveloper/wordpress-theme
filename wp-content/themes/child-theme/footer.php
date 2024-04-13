<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php
$site_logo = get_theme_mod('custom_logo');
$imageLogo = wp_get_attachment_image_src($site_logo, 'full');
$footer_title = get_field('footer_title', 'options');
$footer_company_rights = get_field('footer_company_rights', 'options');
$footer_inspire_theme = get_field('footer_inspire_theme', 'options');
$footer_theme = get_field('footer_theme', 'options');
?>
<?php if ($footer_title || $footer_company_rights || $footer_inspire_theme || $footer_theme): ?>
    <footer class="footer-section">
        <div class="footer-main-content d-flex f-direction">
            <div class="footer-top-content">
                <div class="footer-logo">
                    <a href="<?php echo get_home_url(); ?>" rel="home">
                        <img src="<?php echo $imageLogo[0]; ?>" alt="">
                    </a>
                </div>
                <div class="f-text-block">
                    <?php if ($footer_title): ?>
                        <span>
                            <?php echo $footer_title; ?>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="f-bottum-block d-flex align-items-center justify-center">
                <p>
                    <?php echo $footer_company_rights; ?>
                </p>
                <div class="full-stop">|</div>
                <p>
                    <?php echo $footer_inspire_theme; ?><a href="<?php echo $footer_theme['url']; ?>"
                        target="<?php echo $footer_theme['target']; ?>">
                        <?php echo $footer_theme['title']; ?>
                    </a>
                </p>
            </div>
        </div>
    </footer>
<?php endif; ?>

<?php wp_footer(); ?>

<!-- Back To Top -->
<a href="javascript:void(0)" class="back-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

<!-- Page Scroll Progress Bar -->
<div class="progressbar"><span id="progressBar"></span></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/slick.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/magnific-popup.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/wow.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custome.js"></script>

<script>

    new WOW().init();

    $(window).scroll(function () {
        if ($(window).scrollTop() >= 10) {
            $('body').addClass('fixed-header');
        }
        else {
            $('body').removeClass('fixed-header')
        }
    });

    $(document).ready(function () {

        $('.menu-icon').click(function () {
            $('body').toggleClass('open-menu')
        });

        $('.banner-slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            arrows: true,
            fade: true,
            autoplay: true,
            cssEase: 'linear',
            adaptiveHeight: true,
        });
        $('.image-slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            arrows: false,
            fade: true,
            autoplay: true,
            dots: true,
            cssEase: 'linear',
        });
        $('.plans-image-slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            arrows: false,
            fade: true,
            autoplay: true,
            dots: true,
            cssEase: 'linear',
        });
        $('.best-image-slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            arrows: false,
            fade: true,
            autoplay: true,
            dots: true,
            cssEase: 'linear',
        });

        $('.tab-content-item').hide();
        $('.tab-content-item:eq(0)').show();
        $('.tabs-nav li:eq(0)').addClass('tab-active');
        $('.tabs-nav a').on('click', function (event) {
            event.preventDefault();
            $('.tabs-nav li').removeClass('tab-active');
            $(this).parent().addClass('tab-active');
            $('.tab-content-item').hide();
            $($(this).attr('href')).show();

        });

        /* Image Modal Popup */
        jQuery('.gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            }
        });

        // close popup  
        jQuery('.close').on("click", function () {
            jQuery.magnificPopup.close();
        });

        $('.p-img-block .icon-box').click(function () {
            $('body').addClass('open');
        });
        $('.close-btn, .video-modal').click(function () {
            $('body').removeClass('open');
        });
        $('.modal-content').click(function (event) {
            event.stopPropagation();
        })


        $('.menu-item a').on('click', function (e) {
            var href = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(href).offset().top - 106
            }, '1000');
            e.preventDefault();
        });

    });

    var a = 0;
    $(window).scroll(function () {
        var oTop = $("#counter").offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $(".counter").each(function () {
                var $this = $(this),
                    countTo = $this.attr("data-number");
                $({
                    countNum: $this.text()
                }).animate(
                    {
                        countNum: countTo
                    },

                    {
                        duration: 5000,
                        easing: "swing",
                        step: function () {
                            //$this.text(Math.ceil(this.countNum));
                            $this.text(
                                Math.ceil(this.countNum).toLocaleString("en")
                            );
                        },
                        complete: function () {
                            $this.text(
                                Math.ceil(this.countNum).toLocaleString("en")
                            );
                            //alert('finished');
                        }
                    }
                );
            });
            a = 1;
        }
    });



</script>

</body>

</html>