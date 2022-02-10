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

/**
 * FAQ list
 */
$(document).ready(function(){
    $('.question').on('click', function(){
        $(this).toggleClass('question--active');
        $(this).find('.question__content').slideToggle();
    });
});

/**
 * Age confirm
 */
$(document).ready(function(){

    function ageModal(status){
        if(status == true){
            $('body').addClass('noscroll');
            $('.ageModal').addClass('ageModal--ready');
            setTimeout(function(){
                $('.ageModal').addClass('ageModal--active');
            }, 300);
        }else if(status == false){
            $('body').removeClass('noscroll');
            $('.ageModal').removeClass('ageModal--active');
            setTimeout(function(){
                $('.ageModal').removeClass('ageModal--ready');
            }, 300);
        }
    }

    if(typeof $.cookie('birthDate') === 'undefined'){
        if($('body').hasClass('page-template-page_degustacja')){
            ageModal(true);
        }
    }

    var form = $('form.ageForm');
        year = form.find('input.ageForm__input--year');
        month = form.find('input.ageForm__input--month');
        day = form.find('input.ageForm__input--day');
        remember = form.find('input[name="remember"]');
    
    year.on('keyup paste', function(){
        var val = $(this).val();
            max = $(this).attr('maxlength');
            currentYear = (new Date).getFullYear();

        if(val > currentYear){
            $(this).val(currentYear);
        }
        if(val.length == max) {
            $(this).next('.ageForm__input').focus();
        }
    });

    month.on('keyup paste', function(){
        var val = $(this).val();
            max = $(this).attr('maxlength');

        if(val > 12){
            $(this).val('12');
        }
        if(val.length == max) {
            $(this).next('.ageForm__input').focus();
        }
    });

    day.on('keyup paste', function(){
        var val = $(this).val();

        if(val > 31){
            $(this).val('31');
        }
    });

    $(form).on('submit', function(e){
        e.preventDefault();
        year.removeClass('ageForm__input--error');

        var status = true;

        var yearVal = year.val();
            monthVal = month.val();
            dayVal = day.val();
            rememberVal = 'false';
            
        if($(remember).is(':checked')){
            rememberVal = 'true';
        }else{
            rememberVal = 'false';
        }

            
        var data = {
            action: 'checkAge',
            year: yearVal,
            month: monthVal,
            day: dayVal,
            remember: rememberVal,
        }

        if(yearVal.length < 4){
            status = false;
            year.addClass('ageForm__input--error');
        }

        if(status == true){
            $.ajax({
                type: 'POST', 
                data: data,
                url: PBAjax.ajaxurl,
                success: function(respond){
                    if(respond == 'true'){
                        console.log('true');
                        ageModal(false);
                    }else if (respond == 'false'){
                        console.log('false');
                        year.val('').addClass('ageForm__input--error');
                        month.val('').addClass('ageForm__input--error');
                        day.val('').addClass('ageForm__input--error');
                    }else{
                        $.cookie('birthDate', respond, {expires: 24/24 * 7});
                        console.log('true - remember');
                        ageModal(false);
                    }
                }
            });
        }else{
            console.error('ERROR: Status error - fields not validated');
        }
    })
});