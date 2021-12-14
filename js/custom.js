$(document).ready(function(){
    $('input[name="newsletterAcceptance"]').on('click', function(){
        if($(this).is(':checked')){
            $(this).parent().addClass('checked');
        }else if($(this).is(':not(:checked)')){
            $(this).parent().removeClass('checked');
        }
    });
});

/**
 * Menu bar clone
 */
$(document).ready(function(){
    var clone = $('.headerClone');
    var headerHeight = $('.siteHeader').outerHeight();

    clone.css('height', headerHeight);
});

/**
 * Menu bar scrolled
 */
 $(document).ready(function(){
    setTimeout(function(){
        var siteHeader = $('.siteHeader');
        var didScroll;
        var lastScrollTop = 0;
        var delta = 50;
        var navbarHeight = siteHeader.outerHeight();

        $(window).scroll(function(event){
            var siteHeader = $('.siteHeader');
            if($(document).scrollTop() > 67){
                siteHeader.addClass('siteHeader--shadow');
            }else{
                siteHeader.removeClass('siteHeader--shadow');
            }
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var siteHeader = $('.siteHeader');
            var st = $(this).scrollTop();
            
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            if (st > lastScrollTop && st > navbarHeight){
                if($('body').hasClass('promocode-blackweek')){
                    siteHeader.css('top', - siteHeader.height() - 35);
                }else{
                    siteHeader.addClass('siteHeader--scrolled');
                }
            } else {
                if(st + $(window).height() < $(document).height()) {
                    if($('body').hasClass('promocode-blackweek')){
                        siteHeader.css('top', 0);
                    }else{
                        siteHeader.removeClass('siteHeader--scrolled');
                    }
                }
            }
            lastScrollTop = st;
        }
    }, 150);
});

$(document).ready(function(){
    var mobileMenu = $('#mobileMenu');

    $('.openMobileMenu').on('click', function(){
        if($(this).hasClass('close')){
            $(this).removeClass('close');
            mobileMenu.removeClass('active');
            $('body').removeClass('noscroll');
        }else{
            $(this).addClass('close');
            mobileMenu.addClass('active');
            $('body').addClass('noscroll');
        }
    });
    // $(document).mouseup(function(e){
    //     if (!mobileMenu.is(e.target) && mobileMenu.has(e.target).length === 0){
    //         if($('.openMobileMenu').hasClass('close')){
    //             $('.openMobileMenu').removeClass('close');
    //             mobileMenu.removeClass('active');
    //             $('body').removeClass('noscroll');
    //         }
    //     }
    // }); 
});