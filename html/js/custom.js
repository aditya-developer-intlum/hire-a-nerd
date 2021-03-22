//main navigation
jQuery(".main_head .navbar-nav li .clickD").click(function() {
    if (jQuery(this).parent('li').parent('ul').hasClass('sub-menu')) {
        jQuery(this).toggleClass("toggled");
    } else if (jQuery(this).hasClass("toggled")) {
        jQuery(this).removeClass('toggled');
    } else if (jQuery('.main_head .navbar-nav li .clickD').hasClass('toggled')) {
        jQuery('.main_head .navbar-nav li .clickD').removeClass('toggled');
        jQuery(this).toggleClass("toggled");
    } else {
        jQuery(this).toggleClass("toggled");
    }
});




// Owlcar example 1 start
var owl = $('#exploreSlider');
owl.owlCarousel({
    loop: true,
    nav: true,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    margin: 25,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        960: {
            items: 4
        },
        1400: {
            items: 6,
            slideBy: 2
        }
    }
});
// Owlcar example 1 end

// Service slider start
var owl = $('#serviceSlider');
owl.owlCarousel({
    loop: true,
    nav: true,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    margin: 25,
    responsive: {
        0: {
            items: 1
        },
        640: {
            items: 2
        },
        991: {
            items: 3
        },
        1400: {
            items: 4,
            slideBy: 2
        }
    }
});
// Service slider end


// Service slider start
var owl = $('#sellerSlider');
owl.owlCarousel({
    loop: true,
    nav: true,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    margin: 25,
    responsive: {
        0: {
            items: 1
        },
        640: {
            items: 2
        },
        991: {
            items: 3
        },
        1400: {
            items: 4,
            slideBy: 2
        }
    }
});
// Service slider end

// Test slider start
var owl = $('#testSlider');
owl.owlCarousel({
    loop: true,
    nav: true,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    margin: 25,
    responsive: {
        0: {
            items: 1
        },
        640: {
            items: 2
        },
        991: {
            items: 3
        },
        1400: {
            items: 4,
            slideBy: 2
        }
    }
});
// Test slider end



// Show hide password
$(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

// Custom upload Field
// Custom upload Field
'use strict';;
(function($, window, document, undefined) {
    $('.inputfile').each(function() {
        var $input = $(this),
            $label = $input.next('label'),
            labelVal = $label.html();

        $input.on('change', function(e) {
            var fileName = '';

            if (this.files && this.files.length > 1)
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            else if (e.target.value)
                fileName = e.target.value.split('\\').pop();

            if (fileName)
                $label.find('span').html(fileName);
            else
                $label.html(labelVal);
        });

        // Firefox bug fix
        $input
            .on('focus', function() { $input.addClass('has-focus'); })
            .on('blur', function() { $input.removeClass('has-focus'); });
    });
})(jQuery, window, document);



// Smooth scroll
$(document).ready(function() {
    $('._jTopSec__lft li a').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 800);
        }
    });
});

// Gig Detail Tab
$(".creating_gig a").click(function(event) {
            event.preventDefault();
            $(this).parent().addClass("gig_tab_active");
            $(this).parent().siblings().removeClass("gig_tab_active");
            var tab = $(this).attr("href");
            $(".gig_des_active").not(tab).css("display", "none");
            $(tab).fadeIn();
        });

// Buyer & Seller Tab
$(".buy_sell a").click(function(event) {
            event.preventDefault();
            $(this).parent().addClass("buy_active");
            $(this).parent().siblings().removeClass("buy_active");
            var tab = $(this).attr("href");
            $(".buyer_seller_active").not(tab).css("display", "none");
            $(tab).fadeIn();
        });