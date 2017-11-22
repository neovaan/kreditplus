/*=============================================================================================	
 Company    : PT Web Architect Technology - webarq.com
 Document   : Javascript Plugin Exe
 Author     : Iqbal Wahyudi Pratama - iqbalwahyudip.com
 ==============================================================================================*/
$(document).ready(function () {
    sliderHome();
    searchHeader();
    scrollbtm();
    floatHeader();
    subMenu();
    accordion();
    popupPrestasi();
    chooseproduct();
    loader();
    floatChat();
    burgMenu();
    slideSponsor();
    slideprodhome();
    slidetestimoni();
    slidesponsor();
    // officeClick();

    if($(window).width() > 1200){
        if($(".office-list .list-office .in-office").length){
            $(".office-list .list-office .in-office").autoheight({
                column: 5,
            });
        }
    }else if($(window).width() > 690 && $(window).width() <= 1200){
        if($(".office-list .list-office .in-office").length){
            $(".office-list .list-office .in-office").autoheight({
                column: 3,
            });
        }
        if($(".box-list-achievement").length){
            $(".box-list-achievement .list-achievement .in-achievement").autoheight({
                column: 3,
            });
        }
    }
    $(".boxsliderhome .list-slide figure img").responsiveImage({
        type: 'image',
    });

    $(".banner > figure > img").responsiveImage({
        type: 'image',
    });

    if($(window).width() > 690){
        $(".a-from-bottom").animationFrom({
            from: 'from_bottom',
            time: 1,
            ease: Cubic.easeOut 
        });
        $(".a-from-left").animationFrom({
            from: 'from_left',
            time: 1,
            ease: Quint.easeOut
        });
        $(".a-from-right").animationFrom({
            from: 'from_right',
            time: 1,
            ease: Quint.easeOut
        });
        animService();
        animProduct();
        animTestimoni();
        animSponsor();
    }
});
