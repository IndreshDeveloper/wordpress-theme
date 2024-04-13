/* Wow Js */
new WOW().init();

/* Loader Js */
jQuery(window).on('load', function () {
    jQuery('.loader-wrap').fadeOut();
    jQuery('.spinner').delay(2000).fadeOut('slow');
});

/* Sticky Header */
jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
        jQuery('body').addClass('header-fixed');
    } else {
        jQuery('body').removeClass('header-fixed');
    }
});

/* Magnific Popup Start */
jQuery(document).ready(function () {

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

    /* Content Modal Popup */
    jQuery('.modal-block').magnificPopup({
        delegate: 'a',
        type: 'inline',
        midClick: true,
        src: '#my-popup',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        }
    });

    // close popup  
    jQuery('.close').on("click", function () {
        jQuery.magnificPopup.close();
    });

    // Tabs Start
    jQuery('#tabs-nav li:first-child').addClass('active');
    jQuery('.tab-content').hide();
    jQuery('.tab-content:first').show();

    jQuery('#tabs-nav li').click(function () {
        jQuery('#tabs-nav li').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.tab-content').hide();

        var activeTab = $(this).find('a').attr('href');
        $(activeTab).fadeIn();
        return false;
    });

    // Accordion Start
    jQuery('.accordion-item:eq(1)').addClass('active');
    jQuery('.active .accordion-content').slideDown();
    jQuery('.accordion-title').click(function () {
        jQuery('.accordion-item').removeClass('active');
        jQuery(this).parent().addClass('active');
        jQuery('.accordion-content').slideUp();
        jQuery(this).next().slideDown();
    });

});


/* Back To Top */
var btn = $('.back-to-top');

jQuery(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function (e) {
    e.preventDefault();
    jQuery('html, body').animate({ scrollTop: 0 }, '300');
});


/* Page Scroll Progress Bar */
function progressBarScroll() {
    let winScroll = document.body.scrollTop || document.documentElement.scrollTop,
        height = document.documentElement.scrollHeight - document.documentElement.clientHeight,
        scrolled = (winScroll / height) * 100;
    document.getElementById("progressBar").style.width = scrolled + "%";
}

window.onscroll = function () {
    progressBarScroll();
};

/* Counter Start */
var counted = 0;
$(window).scroll(function () {

    var oTop = $('#counter').offset().top - window.innerHeight;
    if (counted == 0 && $(window).scrollTop() > oTop) {
        $('.count').each(function () {
            var $this = $(this),
                countTo = $this.attr('data-count');
            $({
                countNum: $this.text()
            }).animate({
                countNum: countTo
            },

                {

                    duration: 2000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                        //alert('finished');
                    }

                });
        });
        counted = 1;
    }

});

/* Countdown Start */
function makeTimer() {

    //		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");	
    var endTime = new Date("22 April 2024 12:00:00 GMT+01:00");
    endTime = (Date.parse(endTime) / 1000);

    var now = new Date();
    now = (Date.parse(now) / 1000);

    var timeLeft = endTime - now;

    var days = Math.floor(timeLeft / 86400);
    var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
    var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
    var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

    if (hours < "10") { hours = "0" + hours; }
    if (minutes < "10") { minutes = "0" + minutes; }
    if (seconds < "10") { seconds = "0" + seconds; }

    $("#days").html(days + "<span>Days</span>");
    $("#hours").html(hours + "<span>Hours</span>");
    $("#minutes").html(minutes + "<span>Minutes</span>");
    $("#seconds").html(seconds + "<span>Seconds</span>");

}

setInterval(function () { makeTimer(); }, 1000);