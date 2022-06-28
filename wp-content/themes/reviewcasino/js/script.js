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

jQuery(document).ready(function ($) {
    // jQuery('.dropdown-toggle').dropdown();


    var windowWidth = jQuery(window).width();
    if (windowWidth <= 560) {
        jQuery('<li class="all-categories-list"></li>').appendTo('.nav-menu');
        jQuery('.all-categories-grid').appendTo(jQuery(".nav-menu>li.all-categories-list"));
    }
});
String.prototype.toNum = function () {
    return parseInt(this, 10);
};
jQuery(document).ready(function ($) {
    jQuery.responsiveTables('900px');

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
    jQuery('.claim-bonus-value').on('click', function (e) {
        e.preventDefault();
        // const input_value = jQuery( 'input#bonus-val' ).val();
        // const val = parseInt(jQuery( this ).parent().find( '.bonus-value' ).text().replace( '$', '' ),10);
        // var result = input_value * val;
        //alert(typeof val);
        // if(isNaN(result)){
        // 	alert('Fuck you');
        // }
        jQuery(this).parent().find('.bonus-value').css('background', '#7a0f0f');
        jQuery(this).parent().find('.bankroll-col').append(input_value);
        console.log(typeof input_value); // number
        console.log(typeof val); // number
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
        jQuery(this).parent().find('.search-form').toggleClass('open-mob');

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
            .prev()
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
    // });
    jQuery('.open-block').click(function (e) {
        e.preventDefault();
        const $this = $(this),
            $container = $this.closest('.accord-block.light-block');
        $container.find('.hidden-block').slideToggle(function () {
            $container.toggleClass('open');
            if ($container.hasClass('open')) {
                $this.html('<svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.7188 11.2914C22.1093 11.682 22.1093 12.3151 21.7188 12.7056C21.3583 13.0661 20.7911 13.0939 20.3988 12.7888L20.3046 12.7056L11.0117 3.41353L1.71883 12.7056C1.35834 13.0661 0.791111 13.0939 0.39882 12.7888L0.304612 12.7056C-0.0558715 12.3452 -0.0835995 11.7779 0.221425 11.3856L0.304612 11.2914L10.3046 1.29143C10.6651 0.930944 11.2323 0.903215 11.6246 1.20824L11.7188 1.29143L21.7188 11.2914Z" fill="#6667AB"/><path d="M21.7188 11.2914C22.1093 11.682 22.1093 12.3151 21.7188 12.7056C21.3583 13.0661 20.7911 13.0939 20.3988 12.7888L20.3046 12.7056L11.0117 3.41353L1.71883 12.7056C1.35834 13.0661 0.791111 13.0939 0.39882 12.7888L0.304612 12.7056C-0.0558715 12.3452 -0.0835995 11.7779 0.221425 11.3856L0.304612 11.2914L10.3046 1.29143C10.6651 0.930944 11.2323 0.903215 11.6246 1.20824L11.7188 1.29143L21.7188 11.2914Z" fill="url(#paint0_linear_302_2)" fill-opacity="0.2"/><defs><linearGradient id="paint0_linear_302_2" x1="18.6607" y1="6.99853" x2="2.19715" y2="6.99853" gradientUnits="userSpaceOnUse"><stop offset="0.421875" stop-color="#A119E0"/><stop offset="0.869792" stop-color="#A119E0" stop-opacity="0.92"/></linearGradient></defs></svg>');
            } else {
                $this.html('<svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893C0.653377 -0.0675907 1.22061 -0.0953207 1.6129 0.209704L1.70711 0.292893L11 9.585L20.2929 0.292893C20.6534 -0.0675907 21.2206 -0.0953207 21.6129 0.209704L21.7071 0.292893C22.0676 0.653378 22.0953 1.22061 21.7903 1.6129L21.7071 1.70711L11.7071 11.7071C11.3466 12.0676 10.7794 12.0953 10.3871 11.7903L10.2929 11.7071L0.292893 1.70711Z" fill="url(#paint0_linear_2335_9308)"/><defs><linearGradient id="paint0_linear_2335_9308" x1="0" y1="12" x2="22" y2="12" gradientUnits="userSpaceOnUse"><stop offset="0.00169362" stop-color="#A300FF"/><stop offset="1" stop-color="#2C00FF"/></linearGradient></defs></svg>');
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
    var textDefault = 'More details';
    var textOther = 'Hide details';
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
        $container.find('.hidden-block:first-child').css('display', 'block');
    });
});
jQuery(document).ready(function ($) {
    jQuery('ul.languages>li.current-lang').clone().appendTo('button.current-lang');
    jQuery('ul.languages>li.current-lang').hide();
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
