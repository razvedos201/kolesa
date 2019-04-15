$(document).ready(function() {
	//SELECT
	$('.select').click(function(event) {
		$('.select').not(this).removeClass('active').find('.js-select-options').slideUp(50);
		$(this).toggleClass('active');
		$(this).find('.js-select-options').slideToggle(100);
	});
	$('.js-value').click(function() {
		$(this).parents('.select').find('.js-title .value').html('<span>'+$(this).html()+'</span>');
	});

	//MENU
	$('.has-submenu > a').click(function(e) {
		e.preventDefault();  
        $(this).parent().siblings().find('a').removeClass('is-active');
        $(this).parent().siblings().find('.submenu').slideUp();

        if ( $(this).hasClass('is-active') ) {
            $(this).removeClass('is-active').parent().find('.submenu').slideUp();
            $('.box-overlay').fadeOut(300);
        } else {
            $(this).addClass('is-active').parent().find('.submenu').slideDown();
            $('.box-overlay').fadeIn(300);
        }
	});

	var fadeOut = function(){
		$('.submenu').fadeOut(300, function(){
		$('.box-overlay').fadeOut(400);
		});
		$('.has-submenu a').removeClass('is-active');
	}
	$('.box-overlay').click(fadeOut);
	$('.close').click(fadeOut);

    //MAIN MOBILE MENU
    $('.hamburger').click(function() {
        $(this).toggleClass('is-active');
        $('.main-menu > ul').slideToggle(function() {
             if ( $(this).css('display') === 'none' ) {
                $(this).removeAttr('style');
            }
        });
        $('.box-overlay').removeAttr('style');
    });

	//SLIDERS
	$('.promo-slider').slick({
		 dots: true,
		 fade: true,
		 arrows: false,
		 cssEase: 'linear'
	});

	$('.brands-carousel').slick({
		slidesToShow: 6,
  		slidesToScroll: 1,
        autoplay: true,
  		prevArrow: '<div class="slick-prev"></div>',
	  	nextArrow: '<div class="slick-next"></div>',
        responsive: [
            {
              breakpoint: 1250,
              settings: {
                slidesToShow: 5
              }
            },
            {
              breakpoint: 943,
              settings: {
                slidesToShow: 3
              }
            },
             {
              breakpoint: 580,
              settings: {
                slidesToShow: 2
              }
            },
             {
              breakpoint: 380,
              settings: {
                slidesToShow: 1
              }
            }
        ]
	});

	$('.carousel-product').slick({
		slidesToShow: 4,
  		slidesToScroll: 1,
  		prevArrow: '<div class="slick-prev"></div>',
	  	nextArrow: '<div class="slick-next"></div>',
        responsive: [
            {
              breakpoint: 1250,
              settings: {
                slidesToShow: 3
              }
            },
            {
              breakpoint: 943,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 630,
              settings: {
                slidesToShow: 1
              }
            }
        ]
	});

    $('.compare-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<div class="slick-prev"></div>',
        nextArrow: '<div class="slick-next"></div>',
        responsive: [
            {
              breakpoint: 1250,
              settings: {
                slidesToShow: 3
              }
            },
            {
              breakpoint: 943,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 630,
              settings: {
                slidesToShow: 1
              }
            }
        ]
    });

     $('.tabs-search').easyResponsiveTabs({
        type: 'default',
        width: 'auto',
        fit: true, 
        tabidentify: 'tabs_1'
    });

    $( "#datepicker" ).datepicker({
        monthNames: ['Январь', 'Февраль', 'Март', 'Апрель',
        'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь',
        'Октябрь', 'Ноябрь', 'Декабрь'],
        monthNamesShort: [ 'Январь', 'Февраль', 'Март', 'Апрель',
        'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь',
        'Октябрь', 'Ноябрь', 'Декабрь' ],
        dayNamesMin: ['вс','пн','вт','ср','чт','пт','сб'],
        firstDay: 1, 
        mindate: 0
    });

    //price-slider
    $('#filterPrice1').change(function() {
        var val = $(this).val();
        $('#slider').slider('values',0,val);
    });
    $('#filterPrice2').change(function() {
        var val = $(this).val();
        $('#slider').slider('values',1,val);
    });
    $("#slider").slider({
        values: [5000, 40000],
        min:0,
        max:50000,
        step:1000,
        range:true,
        slide: function( event, ui ) {
            $("#filterPrice1").val(ui.values[0]);
            $("#filterPrice2").val(ui.values[1]);
        }
    });
    $("#filterPrice1").val($('#slider').slider( "values",0 ));
    $("#filterPrice2").val($('#slider').slider( "values",1 ));

    //Tabs
    $('.js-tabs-list').on('click', 'li:not(.current)', function() {
        $(this).addClass('current').siblings().removeClass('current')
            .parents('.js-tabs-wrap').find('div.box').eq($(this).index()).fadeIn(100).addClass('box-visible').siblings('div.box').hide().removeClass('box-visible');
    });

    $('.product-accordion-header').click(function() {
        $(this).toggleClass('active').parent().find('.product-accordion-dropdown').slideToggle();
    });

    //VIEW
    $('.view-btn').click(function(event) {
        $('.view-btn').removeClass('active');
        $(this).addClass('active');
        if( $('.view-btn.active').hasClass('view-table') ){
            $('.product-box-wrap .product-box').removeClass('list').addClass('table');
        } else {
            $('.product-box-wrap .product-box').removeClass('table').addClass('list');
        }
    });

    //TOP MOBILE MENU 
    $('.toggle-btn').click(function(){
        $('.mobile-menu').css('left','0');
        $('body').addClass('menu');
    });
    $('.mobile-menu-close').click(function(){
        $('.mobile-menu').css('left','');
        $('body').removeClass('menu');
    });

    //FILTER-TOGGLE 
    $('.filter-sidebar-mobile').click(function() {
        $('.filter-toggle').slideToggle(function() {
            if ( $(this).css('display') === 'none' ) {
                $(this).removeAttr('style');
            }
        });
    });

     $('.js-view-filter').click(function(e) {
        e.preventDefault();
        $(this).fadeOut().parents().find('.filter-input-toggle').slideToggle();
    });

    $('.title-toggle').click(function() {
        $(this).toggleClass('active').parent().find('.filter-sidebar-dropdown').slideToggle();
    });

    //FILE UPLOAD
    $('.file-upload input[type="file"]').change(function() {
        var filename = $(this).val().replace(/.*\\/, "");
        $('#filename').val(filename).css('height','20');
    });

    //ORDER CART
    $('.order-id').click(function() {
        $(this).toggleClass('active').parents('.order-list').find('.cart-product-dropdown').slideToggle();
    });

    //mask 
    $(".js-mask").mask("+7( 999 ) - 999 - 99 - 99");

    //checkout.php input[radio]
    if ( $('#individual').prop("checked")) {
        $('.js-individual').slideDown();
    }

     if ( $('#entity').prop("checked")) {
        $('.js-entity').slideDown();
    } 

    $('#individual').click(function() {
        $('.js-individual').slideDown();
        $('.js-entity').slideUp();
    });

     $('#entity').click(function() {
        $('.js-entity').slideDown();
        $('.js-individual').slideUp();
    });

	//TOOLTIP
	 var targets = $( '[rel~=tooltip]' ),
        target  = false,
        tooltip = false,
        title   = false;
  
    targets.bind( 'mouseenter', function() {
        target  = $( this );
        tip     = target.attr( 'title' );
        tooltip = $( '<div class="tooltip"></div>' );
  
        if( !tip || tip == '' )
            return false;
  
        target.removeAttr( 'title' );
        tooltip.css( 'opacity', 0 )
               .html( tip )
               .appendTo( 'body' );
  
        var init_tooltip = function() {
            if( $( window ).width() < tooltip.outerWidth() * 1.5 )
                tooltip.css( 'max-width', $( window ).width() / 2 );
            else
                tooltip.css( 'max-width', 340 );
  
            var pos_left = target.offset().left + ( target.outerWidth() / 2 ) - ( tooltip.outerWidth() / 2 ),
                pos_top  = target.offset().top + tooltip.outerHeight() + 10;
  
            if( pos_left < 0 )
            {
                pos_left = target.offset().left + target.outerWidth() / 2 - 20;
                tooltip.addClass( 'left' );
            }
            else
                tooltip.removeClass( 'left' );
  
            if( pos_left + tooltip.outerWidth() > $( window ).width() )
            {
                pos_left = target.offset().left - tooltip.outerWidth() + target.outerWidth() / 2 + 20;
                tooltip.addClass( 'right' );
            }
            else
                tooltip.removeClass( 'right' );
  
            if( pos_top < 0 )
            {
                var pos_top  = target.offset().top + target.outerHeight();
                tooltip.addClass( 'top' );
            }
            else
                tooltip.removeClass( 'top' );
  
            tooltip.css( { left: pos_left, top: pos_top } )
                   .animate( { top: '+=10', opacity: 1 }, 50 );
        };
  
        init_tooltip();
        $( window ).resize( init_tooltip );
  
        var remove_tooltip = function() {
            tooltip.animate( { top: '-=10', opacity: 0 }, 50, function()
            {
                $( this ).remove();
            });
  
            target.attr( 'title', tip );
        };
  
        target.bind( 'mouseleave', remove_tooltip );
        tooltip.bind( 'click', remove_tooltip );
    });

    //MAP
    ymaps.ready(init);
        var myMap, 
            myPlacemark;

        function init(){ 
            myMap = new ymaps.Map("map", {
                center: [56.81998012934136,60.6724245753937],
                zoom: 16
            }); 
            
            myPlacemark = new ymaps.Placemark([56.81998012934136,60.6724245753937], {
                balloonContent: 'г. Екатеринбург, ул. Карьерная 2А'
            }, {
                iconLayout: 'default#image',
                iconImageHref: 'local/template/.default/images/map.png',
                iconImageSize: [55, 71]
            });

            myMap.geoObjects.add(myPlacemark);
            myMap.behaviors.disable('scrollZoom');
        }
});