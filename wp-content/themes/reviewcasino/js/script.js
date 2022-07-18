// eslint-disable-next-line no-undef
jQuery.noConflict();
// const input_value = document.getElementById( 'bonus-val' ).value;
// const divs = document.querySelectorAll( '.bonus-value' );
// const button = document.querySelectorAll('.claim-bonus-value').value;
// const bankroll = document.querySelectorAll('.bankroll-col');
//
// button.forEach( ( el ) => el.addEventListener( 'click', (  ) => {
// 	bonus = this.el.closest('.bonus-value').text;
// 	var result = bonus;
// console.log(result);
// }) );
// document.querySelectorAll( '.foot-submenu-item' ).forEach( ( button ) => {
// 	button.onhover = function() {
// 		console.log( 'ssdfsdf' );
// 	};
// } );
// jQuery('html').click(function(event){
//     if(event.target.id == 'searchButton' || event.target.id == 's') {
//         if ($(window).width() > 650) {
//             $("#s").fadeIn();
//             $("#s").focus();
//             $("#searchButton").removeClass('search');
//             $("#searchButton").addClass('searching');
//         }
//         else {
//             $("#s").fadeIn();
//             $("#s").focus();
//             $("#pearLogo").css('opacity','0');
//             $("#pearText").css('opacity','0');
//             $("#searchButton").removeClass('search');
//             $("#searchButton").addClass('searching');
//         }
//     }
//     else {
//         if($("#s").val().length <= 0){
//             $("#s").fadeOut(0);
//             $("#searchButton").removeClass('searching');
//             $("#searchButton").addClass('search');
//             $("#pearLogo").css('opacity','1');
//             $("#pearText").css('opacity','1');
//         }
//     }
// });
const triggerTabList = document.querySelectorAll('#myTab button')
triggerTabList.forEach(triggerEl => {
    const tabTrigger = new bootstrap.Tab(triggerEl)

    triggerEl.addEventListener('click', event => {
        event.preventDefault()
        tabTrigger.show()
    })
})

jQuery(document).ready(function ($) {
    $('.search-field').keypress(function (eventObject) {
        // eventObject.preventDefault();
        var searchTerm = $('.search-field').val();
        // проверим, если в поле ввода более 2 символов, запускаем ajax
        if (searchTerm.length >= 2) {
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'POST',
                data: {
                    'action': 'codyshop_ajax_search',
                    'term': searchTerm
                },
                success: function (result) {
                    $('.codyshop-ajax-search').fadeIn().html(result);
                    $('.all-reviews-list').hide();
                }
            });
        }
        eventObject.stopPropagation();
        if (searchTerm.length == '') {
            $('.all-reviews-list').show();
            $('.codyshop-ajax-search').hide();
        }
    });
    $('#view-all-casinos').click(function () {
        $('.all-reviews-list').toggleClass('open');
    });
});
jQuery(document).ready(function () {
    jQuery('.vg-nav-sidebar__content').scroll(function () {
        if (jQuery('.vg-nav-sidebar__content').scrollTop() > 100) {
            jQuery('.btn-top').fadeIn(250);
        } else {
            jQuery('.btn-top').fadeOut(250);
        }
    });
    jQuery('.btn-top').click(function () {
        jQuery('.vg-nav-sidebar__content').animate({scrollTop: 0}, 200);
        return false;
    });
});
window.onload = function () {
    checkBonus();
}
jQuery('#bonus-val').parent().find('#get-result').on('click', function () {
    checkBonus();
});

jQuery('#bonus-val').on('keydown', function (e) {
    if (e.keyCode == 13) {
        checkBonus();
    }
});

function checkBonus() {
    var sum = jQuery("#bonus-val").val();
    jQuery('.bon-val').parent().each(function () {
        max = jQuery(this).find('.bon-val').find('.maxval').val();
        coef = jQuery(this).find('.bon-val').find('.coef').val() / 100;
        roll = jQuery(this).find('.bankroll-col').find('.roll').val();
        total = sum * coef;
        koef = max * coef;
        if (total >= koef) {
            total = max * coef;
        }

        jQuery(this).find('.bon-val').find('span').html(total + ' C$');
        jQuery(this).find('.bankroll-col').find('span').html(total * roll + ' C$')
    });
};

jQuery(document).ready(function () {
    var windowWidth = jQuery(window).width();
    if (windowWidth <= 1100) {
        jQuery('.vg-nav').vegasMenu({
            toggle: '<span class="custom-toggle"></span>'
        });
        jQuery('.vg-nav-sidebar__close').html('<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 7L25 25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M25 7L7 25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>CLOSE</span>')
    }
    // if (windowWidth <= 600) {
    //     jQuery('.play-free-games-grid .play-free-grid-item:first-child').addClass('active');
    // jQuery('#tab-carousel').carousel({
    //     interval: 10000,
    //     keyboard: false,
    //     pause: 'hover',
    //     ride: 'carousel',
    //     wrap: false
    // });
    // }
});

jQuery(document).ready(function ($) {
    // jQuery.responsiveTables('900px');

    // count_num = jQuery('.bonus-tab-col').length;
    // console.log(count_num);
    // if (count_num > 4) {
    //     jQuery('.bonus-tab-col').each(function () {
    //         jQuery(this).addClass('hide');
    //     })
    // }

    jQuery('.open-faq').click(function (e) {
        e.preventDefault();
        const $this = $(this),
            $container = $this.closest('.question');
        $container.find('.answer-block').slideToggle(function () {
            $container.toggleClass('open');
            if ($container.hasClass('open')) {
                $this.html('<svg width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.7188 10.2924C22.1093 10.6829 22.1093 11.3161 21.7188 11.7066C21.3583 12.0671 20.7911 12.0948 20.3988 11.7898L20.3046 11.7066L11.0117 2.41451L1.71883 11.7066C1.35834 12.0671 0.791111 12.0948 0.39882 11.7898L0.304612 11.7066C-0.0558715 11.3461 -0.0835995 10.7789 0.221425 10.3866L0.304612 10.2924L10.3046 0.292405C10.6651 -0.068079 11.2323 -0.0958086 11.6246 0.209216L11.7188 0.292405L21.7188 10.2924Z" fill="white"/></svg>');
            } else {
                $this.html('<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683418 0.292893 0.292893C0.653377 -0.0675906 1.22061 -0.0953205 1.6129 0.209704L1.70711 0.292893L11 9.585L20.2929 0.292893C20.6534 -0.0675906 21.2206 -0.0953205 21.6129 0.209704L21.7071 0.292893C22.0676 0.653377 22.0953 1.22061 21.7903 1.6129L21.7071 1.70711L11.7071 11.7071C11.3466 12.0676 10.7794 12.0953 10.3871 11.7903L10.2929 11.7071L0.292893 1.70711Z" fill="white"/></svg>');
            }
        });
        $container.find('.answer-block:first-child').css('display', 'block');
    });
    //jQuery( '.claim-bonus-value' ).each( function( $ ) {

    jQuery('.bonus-share-col').each(function () {
        var val = jQuery(this);
        console.log(val.text().replace('%', ''), 10);
    });
    jQuery('.open-search').on('click', function (e) {
        e.preventDefault();
        // const input_value = jQuery( 'input#bonus-val' ).val();
        // const val = parseInt(jQuery( this ).parent().find( '.bonus-value' ).text().replace( '$', '' ),10);
        // var result = input_value * val;
        //alert(typeof val);
        // if(isNaN(result)){
        // 	alert('Fuck you');
        // }
        e.stopPropagation();
        jQuery(this).parent().parent().find('.search-block').toggleClass('open-mob');
        jQuery(this).toggleClass('opening');
        // if (this.hasClass('opening')) {
        //     jQuery(this).append.('<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.8125 4.8125L17.1875 17.1875" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M17.1875 4.8125L4.8125 17.1875" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>');
        //
        // } else {
        //     jQuery(this).html('<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd"  d="M6.91927 2.16634C4.29592 2.16634 2.16927 4.29299 2.16927 6.91634C2.16927 9.53969 4.29592 11.6663 6.91927 11.6663C9.54262 11.6663 11.6693 9.53969 11.6693 6.91634C11.6693 4.29299 9.54262 2.16634 6.91927 2.16634ZM0.585938 6.91634C0.585938 3.41854 3.42147 0.583008 6.91927 0.583008C10.4171 0.583008 13.2526 3.41854 13.2526 6.91634C13.2526 8.3799 12.7562 9.72752 11.9225 10.8L16.1874 15.0649C16.4966 15.374 16.4966 15.8753 16.1874 16.1845C15.8782 16.4936 15.377 16.4936 15.0678 16.1845L10.8029 11.9196C9.73045 12.7532 8.38283 13.2497 6.91927 13.2497C3.42147 13.2497 0.585938 10.4141 0.585938 6.91634Z" fill="white"/></svg>');
        // }
    });
    jQuery('.close-search').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        jQuery(this).parent().parent().find('.search-block').removeClass('open-mob');
    });

    //});
});

jQuery(document).ready(function ($) {
    jQuery('svg.msg').hover(function () {
        jQuery(this).parent().parent().find('div.tab-msg').addClass('hoverstate');
    }, function () {
        jQuery(this).parent().parent().find('div.tab-msg').removeClass('hoverstate');
    });
    // jQuery('.msg')each((function (e) {
    // 	jQuery('.msg').hover(function (){
    // 		jQuery(this).parent().find('.tab-msg').toggle();
    // 	});
    jQuery("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
        jQuery(e.target)
            .parent()
            .find(".fa-stack")
            .toggleClass("show-ico");
    });
    jQuery('.dropdown-toggle').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        jQuery(this).toggleClass('active');
        jQuery(this).parent().find('ul.dropdown-menu').toggleClass('show');
        jQuery(this).parent().find('.menu-mobile-casinos-by-type-device-container ul.dropdown-menu').toggleClass('show');
    });
    jQuery('.top-block button.open-filter').click(function (e) {
        e.preventDefault();
        e.stopPropagation();

        jQuery(this).parents().eq(6).find('.filter').toggleClass('show');
        // jQuery(this).parents().eq(6).find('.filter .filter-sidebar .filter-head').append('<button class="close-filter"><span>X</span></button>');
        jQuery(this).parents().eq(10).find('div.filter-overlay').addClass('active');
        jQuery('html, body').animate({scrollTop: 0}, 200);
        return false;
    });
    jQuery('button.close-filter').click(function (e) {
        //e.preventDefault();
        jQuery(this).parent().parent().parent().parent().find('.filter').removeClass('show');
        jQuery(this).parents().eq(10).find('.filter-overlay').removeClass('active');
    });
    jQuery('.open-block').click(function (e) {
        e.preventDefault();
        const $this = $(this),
            $container = $this.closest('.accord-block.light-block');
        $container.find('.hidden-block').slideToggle(function () {
            $container.toggleClass('open');
            if ($container.hasClass('open')) {
                $this.html('<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893C0.653377 -0.0675907 1.22061 -0.0953207 1.6129 0.209704L1.70711 0.292893L11 9.585L20.2929 0.292893C20.6534 -0.0675907 21.2206 -0.0953207 21.6129 0.209704L21.7071 0.292893C22.0676 0.653378 22.0953 1.22061 21.7903 1.6129L21.7071 1.70711L11.7071 11.7071C11.3466 12.0676 10.7794 12.0953 10.3871 11.7903L10.2929 11.7071L0.292893 1.70711Z" fill="#6667AB"/><path d="M0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893C0.653377 -0.0675907 1.22061 -0.0953207 1.6129 0.209704L1.70711 0.292893L11 9.585L20.2929 0.292893C20.6534 -0.0675907 21.2206 -0.0953207 21.6129 0.209704L21.7071 0.292893C22.0676 0.653378 22.0953 1.22061 21.7903 1.6129L21.7071 1.70711L11.7071 11.7071C11.3466 12.0676 10.7794 12.0953 10.3871 11.7903L10.2929 11.7071L0.292893 1.70711Z" fill="url(#paint0_linear_3667_5867)" fill-opacity="0.2"/><defs><linearGradient id="paint0_linear_3667_5867" x1="3.35099" y1="6" x2="19.8146" y2="6" gradientUnits="userSpaceOnUse"><stop offset="0.421875" stop-color="#A119E0"/><stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/></linearGradient></defs></svg>');

            } else {
                $this.html('<svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.7188 11.2914C22.1093 11.682 22.1093 12.3151 21.7188 12.7056C21.3583 13.0661 20.7911 13.0939 20.3988 12.7888L20.3046 12.7056L11.0117 3.41353L1.71883 12.7056C1.35834 13.0661 0.791111 13.0939 0.39882 12.7888L0.304612 12.7056C-0.0558715 12.3452 -0.0835995 11.7779 0.221425 11.3856L0.304612 11.2914L10.3046 1.29143C10.6651 0.930944 11.2323 0.903215 11.6246 1.20824L11.7188 1.29143L21.7188 11.2914Z" fill="#6667AB"/><path d="M21.7188 11.2914C22.1093 11.682 22.1093 12.3151 21.7188 12.7056C21.3583 13.0661 20.7911 13.0939 20.3988 12.7888L20.3046 12.7056L11.0117 3.41353L1.71883 12.7056C1.35834 13.0661 0.791111 13.0939 0.39882 12.7888L0.304612 12.7056C-0.0558715 12.3452 -0.0835995 11.7779 0.221425 11.3856L0.304612 11.2914L10.3046 1.29143C10.6651 0.930944 11.2323 0.903215 11.6246 1.20824L11.7188 1.29143L21.7188 11.2914Z" fill="url(#paint0_linear_302_2)" fill-opacity="0.2"/><defs><linearGradient id="paint0_linear_302_2" x1="18.6607" y1="6.99853" x2="2.19715" y2="6.99853" gradientUnits="userSpaceOnUse"><stop offset="0.421875" stop-color="#A119E0"/><stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/></linearGradient></defs></svg>');
            }
        });
        $container.find('.hidden-block:first-child').css('display', 'block');
    });
});
jQuery(document).ready(function ($) {
    jQuery('.open-block').click(function (e) {
        e.preventDefault();
        const $this = $(this),
            $container = $this.closest('.accord-block.dark-block');
        $container.find('.hidden-block').slideToggle(function () {
            $container.toggleClass('open');
            if ($container.hasClass('open')) {
                $this.html('<svg width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.7188 10.2924C22.1093 10.6829 22.1093 11.3161 21.7188 11.7066C21.3583 12.0671 20.7911 12.0948 20.3988 11.7898L20.3046 11.7066L11.0117 2.41451L1.71883 11.7066C1.35834 12.0671 0.791111 12.0948 0.39882 11.7898L0.304612 11.7066C-0.0558715 11.3461 -0.0835995 10.7789 0.221425 10.3866L0.304612 10.2924L10.3046 0.292405C10.6651 -0.068079 11.2323 -0.0958086 11.6246 0.209216L11.7188 0.292405L21.7188 10.2924Z" fill="white"/></svg>');
            } else {
                $this.html('<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683418 0.292893 0.292893C0.653377 -0.0675906 1.22061 -0.0953205 1.6129 0.209704L1.70711 0.292893L11 9.585L20.2929 0.292893C20.6534 -0.0675906 21.2206 -0.0953205 21.6129 0.209704L21.7071 0.292893C22.0676 0.653377 22.0953 1.22061 21.7903 1.6129L21.7071 1.70711L11.7071 11.7071C11.3466 12.0676 10.7794 12.0953 10.3871 11.7903L10.2929 11.7071L0.292893 1.70711Z" fill="white"/></svg>');
            }
        });
        $container.find('.hidden-block:first-child').css('display', 'block');
    });
    var textDefault = 'More details <svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.146447 0.646447C0.341709 0.451184 0.658291 0.451184 0.853553 0.646447L3.5 3.29289L6.14645 0.646447C6.34171 0.451184 6.65829 0.451184 6.85355 0.646447C7.04881 0.841709 7.04881 1.15829 6.85355 1.35355L3.85355 4.35355C3.65829 4.54882 3.34171 4.54882 3.14645 4.35355L0.146447 1.35355C-0.0488155 1.15829 -0.0488155 0.841709 0.146447 0.646447Z" fill="white"/></svg>';
    var textOther = 'Hide details <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.35355 4.35355C7.15829 4.54882 6.84171 4.54882 6.64645 4.35355L4 1.70711L1.35355 4.35355C1.15829 4.54882 0.84171 4.54882 0.646448 4.35355C0.451185 4.15829 0.451185 3.84171 0.646448 3.64645L3.64645 0.646446C3.84171 0.451184 4.15829 0.451184 4.35355 0.646446L7.35355 3.64645C7.54882 3.84171 7.54882 4.15829 7.35355 4.35355Z" fill="white"/></svg>';
    jQuery('.open-details').click(function (e) {
        e.preventDefault();
        textDefault = textOther;
        textOther = jQuery(this).html();
        jQuery(this).html(textDefault);
        const $this = $(this),
            $container = $this.closest('.top-casino-item');
        $container.find('.hidden-info').slideToggle(function () {
            $container.toggleClass('open');
        });
        $this.toggleClass('show');
        $container.find('.hidden-block:first-child').css('display', 'block');
    });
});
jQuery(document).ready(function ($) {
    jQuery('ul.languages>li.current-lang').clone().appendTo('button.current-lang');
    jQuery('ul.languages>li.current-lang').hide();
    jQuery('button.current-lang').text().replace('<a>', '<span>');
    jQuery('button.current-lang').text().replace('</a>', '</span>');
    $('.language-switcher').hover(
        function () {
            $(this).addClass('active');
            $(this).find('ul').stop(true, true);
            $(this).find('ul').slideDown();
        },
        function () {
            $(this).removeClass('active');
            $(this).find('ul').slideUp('slow');
        }
    );

    jQuery('.images-slider').slick(
        {
            adaptiveHeight: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            autoplay: false,
            dots: true,
            centerMode: true,
            centerPadding: 10,
            variableWidth: false,
            rows: 0,
            prevArrow: '<button type="button" class="slick-prev slide-arrow"><svg width="30" height="41" viewBox="0 0 30 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.02148 18.0529L20.7614 0.88971C22.1258 -0.29657 24.332 -0.29657 25.6819 0.88971L28.9622 3.74183C30.3266 4.92811 30.3266 6.84635 28.9622 8.02001L14.9846 20.1983L28.9767 32.364C30.3411 33.5503 30.3411 35.4685 28.9767 36.6422L25.6964 39.5069C24.332 40.6932 22.1258 40.6932 20.7759 39.5069L1.03599 22.3437C-0.342902 21.1574 -0.342902 19.2392 1.02148 18.0529Z" fill="white"/></svg></button>',
            nextArrow: '<button type="button" class="slick-next slide-arrow"><svg width="30" height="41" viewBox="0 0 30 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.02148 18.0529L20.7614 0.88971C22.1258 -0.29657 24.332 -0.29657 25.6819 0.88971L28.9622 3.74183C30.3266 4.92811 30.3266 6.84635 28.9622 8.02001L14.9846 20.1983L28.9767 32.364C30.3411 33.5503 30.3411 35.4685 28.9767 36.6422L25.6964 39.5069C24.332 40.6932 22.1258 40.6932 20.7759 39.5069L1.03599 22.3437C-0.342902 21.1574 -0.342902 19.2392 1.02148 18.0529Z" fill="white"/></svg></button>',
            responsive: [
                {
                    breakpoint: 768,
                    // variableWidth: true,
                    settings: {
                        slidesToShow: 1,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });
    jQuery('.images-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        console.log('beforeChange', currentSlide, nextSlide);
    });
    jQuery('.images-slider').on('afterChange', function (event, slick, currentSlide) {
        console.log('afterChange', currentSlide);
    });
    jQuery('.video-slider').slick(
        {
            adaptiveHeight: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            autoplay: false,
            centerMode: true,
            centerPadding: 10,
            variableWidth: false,
            rows: 0,
            prevArrow: '<button type="button" class="slick-prev slide-arrow"><svg width="30" height="41" viewBox="0 0 30 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.02148 18.0529L20.7614 0.88971C22.1258 -0.29657 24.332 -0.29657 25.6819 0.88971L28.9622 3.74183C30.3266 4.92811 30.3266 6.84635 28.9622 8.02001L14.9846 20.1983L28.9767 32.364C30.3411 33.5503 30.3411 35.4685 28.9767 36.6422L25.6964 39.5069C24.332 40.6932 22.1258 40.6932 20.7759 39.5069L1.03599 22.3437C-0.342902 21.1574 -0.342902 19.2392 1.02148 18.0529Z" fill="white"/></svg></button>',
            nextArrow: '<button type="button" class="slick-next slide-arrow"><svg width="30" height="41" viewBox="0 0 30 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.02148 18.0529L20.7614 0.88971C22.1258 -0.29657 24.332 -0.29657 25.6819 0.88971L28.9622 3.74183C30.3266 4.92811 30.3266 6.84635 28.9622 8.02001L14.9846 20.1983L28.9767 32.364C30.3411 33.5503 30.3411 35.4685 28.9767 36.6422L25.6964 39.5069C24.332 40.6932 22.1258 40.6932 20.7759 39.5069L1.03599 22.3437C-0.342902 21.1574 -0.342902 19.2392 1.02148 18.0529Z" fill="white"/></svg></button>',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: 20
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });
    jQuery('.video-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        console.log('beforeChange', currentSlide, nextSlide);
    });
    jQuery('.video-slider').on('afterChange', function (event, slick, currentSlide) {
        console.log('afterChange', currentSlide);
    });
    jQuery('.best-casino-slider').slick(
        {
            adaptiveHeight: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            autoplay: false,
            dots: true,
            centerMode: true,
            centerPadding: 40,
            variableWidth: false,
            rows: 0,
            arrows: 0,
            // prevArrow: '<button type="button" class="slick-prev slide-arrow"><svg width="30" height="41" viewBox="0 0 30 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.02148 18.0529L20.7614 0.88971C22.1258 -0.29657 24.332 -0.29657 25.6819 0.88971L28.9622 3.74183C30.3266 4.92811 30.3266 6.84635 28.9622 8.02001L14.9846 20.1983L28.9767 32.364C30.3411 33.5503 30.3411 35.4685 28.9767 36.6422L25.6964 39.5069C24.332 40.6932 22.1258 40.6932 20.7759 39.5069L1.03599 22.3437C-0.342902 21.1574 -0.342902 19.2392 1.02148 18.0529Z" fill="white"/></svg></button>',
            // nextArrow: '<button type="button" class="slick-next slide-arrow"><svg width="30" height="41" viewBox="0 0 30 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.02148 18.0529L20.7614 0.88971C22.1258 -0.29657 24.332 -0.29657 25.6819 0.88971L28.9622 3.74183C30.3266 4.92811 30.3266 6.84635 28.9622 8.02001L14.9846 20.1983L28.9767 32.364C30.3411 33.5503 30.3411 35.4685 28.9767 36.6422L25.6964 39.5069C24.332 40.6932 22.1258 40.6932 20.7759 39.5069L1.03599 22.3437C-0.342902 21.1574 -0.342902 19.2392 1.02148 18.0529Z" fill="white"/></svg></button>',
            responsive: [
                {
                    breakpoint: 900,
                    // variableWidth: true,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 560,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });
    jQuery('.best-casino-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        console.log('beforeChange', currentSlide, nextSlide);
    });
    jQuery('.best-casino-slider').on('afterChange', function (event, slick, currentSlide) {
        console.log('afterChange', currentSlide);
    });
    jQuery('.games-type-slider').slick(
        {
            adaptiveHeight: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            autoplay: false,
            dots: false,
            centerMode: true,
            centerPadding: 10,
            variableWidth: false,
            rows: 0,
            prevArrow: '<button type="button" class="slick-prev slide-arrow">    <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="17" cy="17.9092" r="17" fill="white"/><path d="M12.3384 17.4933L18.979 12.6674C19.438 12.3338 20.1802 12.3338 20.6343 12.6674L21.7378 13.4694C22.1968 13.8029 22.1968 14.3423 21.7378 14.6723L17.0308 18.093L21.7378 21.5137C22.1968 21.8473 22.1968 22.3867 21.7378 22.7167L20.6392 23.5257C20.1802 23.8593 19.438 23.8593 18.9839 23.5257L12.3433 18.6998C11.8794 18.3662 11.8794 17.8269 12.3384 17.4933Z" fill="#6667AB"/><path d="M12.3384 17.4933L18.979 12.6674C19.438 12.3338 20.1802 12.3338 20.6343 12.6674L21.7378 13.4694C22.1968 13.8029 22.1968 14.3423 21.7378 14.6723L17.0308 18.093L21.7378 21.5137C22.1968 21.8473 22.1968 22.3867 21.7378 22.7167L20.6392 23.5257C20.1802 23.8593 19.438 23.8593 18.9839 23.5257L12.3433 18.6998C11.8794 18.3662 11.8794 17.8269 12.3384 17.4933Z" fill="url(#paint0_linear_350_3)" fill-opacity="0.2"/><defs><linearGradient id="paint0_linear_350_3" x1="17.0384" y1="22.0458" x2="17.0384" y2="13.5456" gradientUnits="userSpaceOnUse"><stop offset="0.421875" stop-color="#A119E0"/><stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/></linearGradient></defs></svg></button>',
            nextArrow: '<button type="button" class="slick-next slide-arrow"><svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="17.9922" cy="17.9131" r="17" transform="rotate(-180 17.9922 17.9131)" fill="white"/><path d="M22.6538 18.3289L16.0132 23.1549C15.5542 23.4884 14.812 23.4884 14.3579 23.1549L13.2544 22.3529C12.7954 22.0194 12.7954 21.48 13.2544 21.15L17.9614 17.7293L13.2544 14.3085C12.7954 13.975 12.7954 13.4356 13.2544 13.1056L14.353 12.2966C14.812 11.963 15.5542 11.963 16.0083 12.2966L22.6489 17.1225C23.1128 17.456 23.1128 17.9954 22.6538 18.3289Z" fill="#6667AB"/><path d="M22.6538 18.3289L16.0132 23.1549C15.5542 23.4884 14.812 23.4884 14.3579 23.1549L13.2544 22.3529C12.7954 22.0194 12.7954 21.48 13.2544 21.15L17.9614 17.7293L13.2544 14.3085C12.7954 13.975 12.7954 13.4356 13.2544 13.1056L14.353 12.2966C14.812 11.963 15.5542 11.963 16.0083 12.2966L22.6489 17.1225C23.1128 17.456 23.1128 17.9954 22.6538 18.3289Z" fill="url(#paint0_linear_350_3)" fill-opacity="0.2"/><defs><linearGradient id="paint0_linear_350_3" x1="17.9538" y1="13.7765" x2="17.9538" y2="22.2767" gradientUnits="userSpaceOnUse"><stop offset="0.421875" stop-color="#A119E0"/><stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/></linearGradient></defs></svg></button>',
            responsive: [
                {
                    breakpoint: 768,
                    // variableWidth: true,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 560,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });
    // jQuery('.games-type-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    //     console.log('beforeChange', currentSlide, nextSlide);
    // });
    // jQuery('.games-type-slider').on('afterChange', function (event, slick, currentSlide) {
    //     console.log('afterChange', currentSlide);
    // });
});
jQuery(document).ready(function ($) {
    const $this = $('.deposit-method-list');
    $('.deposit-method-list .part-item').slice(0, 2).appendTo('.deposit-method-list .more-items');
    $('.ShowMore').click(function (ev) {
        ev.stopPropagation();
        $(ev.currentTarget).parent().find('.more-items').css('display', 'flex');
        // $(this).hide();
        // $('.ShowLess').show();
    });

    // $('.ShowLess').click(function(ev) {
    // 	ev.stopPropagation();
    // 	$(ev.currentTarget).parent().find('.more-items').hide();
    // 	$('.ShowMore').show();
    // 	$(this).hide();
    // });
    $(document).mouseup(function (e) { // событие клика по веб-документу
        const div = $('.deposit-method-list .more-items'); // тут указываем класс элемента
        if (!div.is(e.target) && // если клик был не по нашему блоку
            div.has(e.target).length === 0) { // и не по его дочерним элементам
            div.hide(); // скрываем его
        }
    });
});
jQuery(document).ready(function ($) {
    const $this = $('.games-type-list');
    $('.games-type-list .part-item').slice(0, 2).appendTo('.games-type-list .more-items');
    // $('.part-items .part-item').hide();
    // $('.game-type-list.part-items').find('.part-item:lt(3)').show();
    // $('.game-type-list').find('.part-item').not(':lt3').appendTo('.game-type-list .more-items');
    // $('.more-items .part-item').show();

    // $('.ShowLess').hide();
    $('.ShowMore').click(function (ev) {
        ev.stopPropagation();
        $(ev.currentTarget).parent().find('.more-items').css('display', 'flex');
        // $(this).hide();
        // $('.ShowLess').show();
    });

    // $('.ShowLess').click(function(ev) {
    // 	ev.stopPropagation();
    // 	$(ev.currentTarget).parent().find('.more-items').hide();
    // 	$('.ShowMore').show();
    // 	$(this).hide();
    // });
    $(document).mouseup(function (e) { // событие клика по веб-документу
        const div = $('.games-type-list .more-items'); // тут указываем класс элемента
        if (!div.is(e.target) && // если клик был не по нашему блоку
            div.has(e.target).length === 0) { // и не по его дочерним элементам
            div.hide(); // скрываем его
        }
    });
});

// document.addEventListener('DOMContentLoaded', function () {
//
// new ShowMore('.deposit-method-list', {
// 	config:{
// 	"type":	"list",
// 		"limit":	3,
// 		"element":	"div",
// 		"more":	"→ show more",
// 		"less":	"← less",
// 		"number":	true
// }
// });
// });

jQuery('#container-async').on('click', 'a[data-filter], .pagination a', function (event) {
    if (event.preventDefault) {
        event.preventDefault();
    }

    $this = jQuery(this);

    if ($this.data('filter')) {
        /**
         * Click on tag cloud
         */
        $this.closest('ul').find('.active').removeClass('active');
        $this.parent('li').addClass('active');
        $page = $this.data('page');
    } else {
        /**
         * Click on pagination
         */
        $page = parseInt($this.attr('href').replace(/\D/g, ''));
        $this = jQuery('.nav-filter .active a');
    }


    $params = {
        'page': $page,
        'tax': $this.data('filter'),
        'term': $this.data('term'),
        'qty': $this.closest('#container-async').data('paged'),
    };

    // Run query
    get_posts($params);
});

function get_posts($params) {

    let $container = jQuery('#container-async');
    let $content = $container.find('.content');
    let $status = $container.find('.status');

    $status.text('Loading posts ...');

    jQuery.ajax({
        url: bobz.ajax_url,
        data: {
            action: 'do_filter_posts',
            nonce: bobz.nonce,
            params: $params
        },
        type: 'post',
        dataType: 'json',
        success: function (data, textStatus, XMLHttpRequest) {

            if (data.status === 200) {
                $content.html(data.content);
            } else if (data.status === 201) {
                $content.html(data.message);
            } else {
                $status.html(data.message);
            }
        },
        error: function (MLHttpRequest, textStatus, errorThrown) {

            $status.html(textStatus);

            /*console.log(MLHttpRequest);
            console.log(textStatus);
            console.log(errorThrown);*/
        },
        complete: function (data, textStatus) {

            msg = textStatus;

            if (textStatus === 'success') {
                msg = data.responseJSON.found;
            }

            $status.text('Posts found: ' + msg);

            /*console.log(data);
            console.log(textStatus);*/
        }
    });
}
