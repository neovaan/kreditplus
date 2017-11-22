/*=============================================================================================	
 Company    : PT Web Architect Technology - webarq.com
 Document   : Javascript Plugin Lib
 Author     : Iqbal Wahyudi Pratama - iqbalwahyudip.com
 ==============================================================================================*/

$.fn.isOnScreen = function () {
    if (this.length) {
        var viewport = {};
        viewport.top = $(window).scrollTop();
        viewport.bottom = viewport.top + $(window).height();
        var bounds = {};
        bounds.top = this.offset().top;
        bounds.bottom = bounds.top + this.outerHeight();
        return ((bounds.top <= viewport.bottom) && (bounds.bottom >= viewport.top));
    } else
        return false
};

$.fn.fileInput = function (e) {
    var elem = this;

    elem.wrap('<div class="' + e.class_name + '"></div>');
    elem.css({
        position: 'absolute',
        top: 0,
        left: 0,
        opacity: 0
    });
    elem.parent('.' + e.class_name).css({
        position: 'relative',
        width: elem.outerWidth() - 2,
        height: elem.outerHeight() - 2,
        display: 'inline-block'
    });
    elem.parent('.' + e.class_name).append("<span>"+elem.attr('placeholder-text')+"</span>");
    elem.on('change', function () {
        var value = $(this).val();
        if (value != "") {
            value = value.substring(12, value.length);
            $(this).next("span").html(value);
        } else {
            $(this).next("span").html(elem.attr('placeholder-text'));
        }
    });
};


$.fn.optCustom = function (q) {
    var
            elem = this,
            s = {
                className: 'checkbox_custom',
            };
    s = $.extend(s, q);
    elem.wrap("<div class='" + s.className + "' style='position:relative' ></div>");
    elem.css({
        position: 'absolute',
        top: 0,
        left: 0,
        opacity: 0,
        width: "100%",
        height: "100%"
    });
    elem.each(function () {
        if ($(this).is(":checked")) {
            $(this).parent().addClass('active');
        }
    });
    elem.on('change', function () {
        if ($(this).attr('type') === "checkbox")
            if (!$(this).is(":checked")) {
                $(this).parent().removeClass('active');
            } else {
                $(this).parent().addClass('active');
            }
        else
            $("input[type=radio][name=" + $(this).attr('name') + "]").each(function () {
                if ($(this).is(":checked")) {
                    $("input[type=radio][name=" + $(this).attr('name') + "]").parent().removeClass('active');
                    $(this).parent().addClass('active');
                    return false;
                }
            });
    });

    elem.parent().on('click', function () {
        if ($(this).attr('type') === "checkbox")
            if (!$(this).children('input').is(":checked")) {
                $(this).removeClass('active');
            } else {
                // console.log('sa')
                $(this).addClass('active');
            }
        else
            $("input[type=radio][name=" + $(this).attr('name') + "]").each(function () {
                if ($(this).is(":checked")) {
                    $("input[type=radio][name=" + $(this).attr('name') + "]").parent().removeClass('active');
                    $(this).parent().addClass('active');
                    return false;
                }
            });
    });

};



$.fn.placeHolder = function () {
    var
            elem = this,
            data = elem.attr('data-placeholder'),
            _this;

    elem.each(function () {
        _this = $(this);
        data = _this.attr('data-placeholder');

        _this.val(data);

        _this.focusin(function () {
            data = $(this).attr('data-placeholder');
            if ($(this).val() === data) {
                $(this).val("")
            }
        });
        _this.focusout(function () {
            data = $(this).attr('data-placeholder');
            if ($(this).val() === "") {
                $(this).val(data);
            }
        });
    });
};

$.fn.autoheight = function(s){
    var e = {
        column:'auto',
        boxList:''
    }
    e = $.extend(e,s);
    var elem = this, a, b = 0, outheight = $(this).height(), column = e.column, excol = column - 1;
    var ffirst = 0, flast;

    var setheight = function(){

        if(column != 'auto'){
            for (var i = 0; i < elem.length; i++) {
                a = $(elem).eq(i).height();
                if(a > b){
                    b = a;
                }
                if(i % column == excol || i == elem.length - 1){
                    var minex = excol;
                    if(i % column == excol){
                        minex = excol;
                    }else{
                        if(i % column == excol){
                            minex = 0;
                        }else if(i == elem.length - 1){
                            if(i - flast > 1){
                                minex = elem.length - i;
                            }else{
                                minex = elem.length - i - 1;
                            }
                        }else{
                            minex = elem.length - i - 1;
                        }
                    }
                    ffirst = i - minex;
                    flast = i;
                    for(var lss = ffirst; lss <= flast; lss++){
                        $(elem).eq(lss).css('height', b+'px');
                    }
                    b = 0;
                }
            }
        }

        // $(elem).each(function(){
        //     a = outheight;
        //     if(a > b){
        //         b = a;
        //     }
        // });
        // $(elem).css('height', b+'px');
    }
    setheight();
    var resizeTimer;

    $(window).resize(function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            if(setheight()){
                location.reload();
            }
        }, 500);
    });
}

$.fn.responsiveImage = function (s) {
    var e ={
        type:undefined
    }
    e = $.extend(e,s);
    var elem = this, etype,
            action = function () {
                if(e.type == undefined){
                    etype = "background";
                }else{
                    etype = e.type;
                }
                window_width = $(window).width();
                elem.each(function () {
                    flag = false;
                    if (window_width > 1023 && $(this).attr('has_load') != 'large') {
                        images_url = $(this).attr('img-large');
                        $(this).attr('has_load', 'large');
                        flag = true;
                    } else if (window_width <= 1023 && window_width >= 640 && $(this).attr('has_load') != 'medium') {
                        images_url = $(this).attr('img-medium');
                        $(this).attr('has_load', 'medium');
                        flag = true;
                    } else if (window_width < 640 && window_width >= 0 && $(this).attr('has_load') != 'small') {
                        images_url = $(this).attr('img-small');
                        $(this).attr('has_load', 'small');
                        flag = true;
                    }
                    if (images_url == undefined) {
                        images_url = $(this).attr('img-large');
                        $(this).attr('has_load', 'large');
                    }

                    if (flag){
                        if(etype == "background"){
                            $(this).css('background-image', 'url('+images_url+')');
                        }else{
                            $(this).attr('src', images_url);
                        }     
                    }     
                });

            }
    action();
   
    var resizeTimer;

    $(window).resize(function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            action();
        }, 500);
    });
}


$.fn.animationFrom = function (e) {
    if ($(window).width() > 800) {
        var elem = this,
                from = e.from,
                time = e.time,
                ease = e.ease;
        elem.each(function () {
            TweenLite.set($(this), {
                position: 'relative',
                opacity: 0
            });
            switch (from) {
                case "from_top":
                    TweenLite.set($(this), {
                        top: '-50px'
                    });
                    break;
                case "from_bottom":
                    TweenLite.set($(this), {
                        bottom: '-50px'
                    });
                    break;
                case "from_left":
                    TweenLite.set($(this), {
                        left: '-50px'
                    });
                    break;
                case "from_right":
                    TweenLite.set($(this), {
                        right: '-50px'
                    });
                    break;
            }
        });
        $(window).scroll(function () {
            elem.animatingFrom({
                from: from,
                time: time,
                ease: ease
            });
        });
        elem.animatingFrom({
            from: from,
            time: time,
            ease: ease
        });
    }
};
$.fn.animatingFrom = function (e) {
    var
            elem = this,
            from = e.from,
            time = e.time,
            ease = e.ease,
            trigger_elem = "";
    elem.each(function () {
        if ($(this).attr('trigger-anim') !== undefined) {
            trigger_elem = $($(this).attr('trigger-anim'));
        } else
            trigger_elem = $(this);

        switch (from) {
            case "from_top":
                delay = parseFloat($(this).attr('delay'));
                if (trigger_elem.isOnScreen() && !TweenMax.isTweening(trigger_elem) && !$(this).hasClass('actived')) {
                    TweenLite.to($(this), time, {
                        css: {
                            top: 0,
                            opacity: 1
                        },
                        delay: delay,
                        ease: ease
                    });
                    $(this).addClass('actived');
                }
                break;
            case "from_bottom":
                delay = parseFloat($(this).attr('delay'));
                if (trigger_elem.isOnScreen() && !TweenMax.isTweening(trigger_elem) && !$(this).hasClass('actived')) {
                    TweenLite.to($(this), time, {
                        css: {
                            bottom: 0,
                            opacity: 1
                        },
                        delay: delay,
                        ease: ease
                    })
                    $(this).addClass('actived');
                }
                break;
            case "from_left":
                delay = parseFloat($(this).attr('delay'));
                if (trigger_elem.isOnScreen() && !TweenMax.isTweening(trigger_elem) && !$(this).hasClass('actived')) {
                    TweenLite.to($(this), time, {
                        css: {
                            left: 0,
                            opacity: 1
                        },
                        delay: delay,
                        ease: ease
                    })
                    $(this).addClass('actived');
                }
                break;
            case "from_right":
                delay = parseFloat($(this).attr('delay'));
                if (trigger_elem.isOnScreen() && !TweenMax.isTweening(trigger_elem) && !$(this).hasClass('actived')) {
                    TweenLite.to($(this), time, {
                        css: {
                            right: 0,
                            opacity: 1
                        },
                        delay: delay,
                        ease: ease
                    })
                    $(this).addClass('actived');
                }
                break;
        }
    });
};

function sliderHome(){
    var elem = $(".boxsliderhome"),
        caps = elem.find(".desc");

    $(".boxsliderhome").slick({
        fade: true,
        autoplay: true,
        arrow: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        autoplaySpeed: 5000
    });

    if(elem.length){
        var bg = elem.find(".slick-list .slick-slide figure");
        TweenLite.set(bg, {scale:1.2});
        TweenLite.to(bg, 7, {scale:1, ease:Linear.easeNone});
        TweenLite.set([caps.find('.dotted'), caps.find('h1'), caps.find('p'), caps.find('p')], {css: {'position':'relative'}});
    }
    
    elem.on('beforeChange', function(slick, direction, currentSlide){
        animCaption("in");
        animBg("in");
    });
    elem.on('afterChange', function(event, slick, currentSlide){
        animCaption("out");
        animBg("out");
    });
}

function animBg(type){
    var elem = $(".boxsliderhome"),
        bg = elem.find(".slick-list .slick-slide figure"),
        randval = "";

    if (type === "in") {
        TweenLite.to(bg, 0.5, {scale:1.1, ease:Linear.easeNone});
    }else{
        TweenLite.to(bg, 7, {scale:1, ease:Linear.easeNone});
    }
}

function animCaption(type){
    var elem = $(".boxsliderhome"),
        caps = elem.find(".desc"),
        franim = 'left';

    if(caps.parent().hasClass('sright')){
        franim = 'right';
    }else if(caps.parent().hasClass('sright')){
        franim = 'top';
    }else{
        franim = 'left';
    }
    franim = 'left';

    if (type === "in") {
        TweenLite.to([caps.find('h1'), caps.find('p'), caps.find('a'), caps.find('.dotted')], 0.4, {css: {'left': '-50px','opacity': '0',},ease: Quart.easeOut});
        // console.log("as");
    } else {
        TweenLite.to(caps.find('.dotted'), 0.4, {css: {'left': '0','opacity': '1',},delay: 0.4,ease: Quart.easeOut});
        TweenLite.to(caps.find('h1'), 0.4, {css: {'left': '0','opacity': '1',},delay: 0.6,ease: Quart.easeOut});
        TweenLite.to(caps.find('p'), 0.4, {css: {'left': '0','opacity': '1',},delay: 0.8,ease: Quart.easeOut});
        TweenLite.to(caps.find('a'), 0.4, {css: {'left': '0','opacity': '1',},delay: 1,ease: Quart.easeOut});
    }
}

function searchHeader(){
    $(".box-search .btn-search").click(function(){
        $(this).parent().find(".drop-search").fadeIn(200);
    });
    $(".box-search .drop-search .sub-search").click(function(){
        $(this).parents(".drop-search").fadeOut(200);
    });
}

function scrollbtm(){
    if($(".scbtm").length){
        var btn = $(".scbtm"), box = $("#scbtm").offset().top, sto = box - 87;
        btn.click(function(){
            $("html, body").animate({ scrollTop: sto }, 800);
            // TweenLite.to(window, 1, {scrollTo:sto, ease: Power2.easeInOut});
        });
    }
}

function floatHeader(){
    if($("header").length){
        $(window).scroll(function(){
            var header = $("header");
            if($(this).scrollTop() >= 1 ) {
                header.addClass("float");
            }else{
                header.removeClass("float");
            }
        });
    }
}
function floatChat(){
    if($(".box-chat").length){
        $(window).scroll(function(){
            var boxchat = $(".box-chat");
            if($(window).scrollTop() >= 200 ) {
                boxchat.addClass("float");
                // console.log("sd");
            }else{
                boxchat.removeClass("float");
                // console.log("de");
            }
        });
    }
}

function subMenu(){
    $(".box-submenu .btn-submenu").click(function(){
        $(this).parent().find(".drop-submenu").slideToggle(200);
    });
    $(document).bind("click", function(e){
        var $clicked = $(e.target);
        if(!$clicked.parents().hasClass("box-submenu")){
            $(".box-submenu .drop-submenu").slideUp(200);
        }
    })
}
function accordion(){
    $(".box-acc .list-acc").each(function(){
        if($(this).hasClass("active")){
            $(this).find('.desc-acc').slideDown(200);
        }
    })
    $(".box-acc .list-acc .btn-acc").click(function(){
        $(this).parent().prevAll().find(".desc-acc").slideUp(200);
        $(this).parent().nextAll().find(".desc-acc").slideUp(200);
        $(this).parent().find(".desc-acc").slideToggle(200);

        $(this).parent().prevAll().removeClass("active");
        $(this).parent().nextAll().removeClass("active");
        $(this).parent().toggleClass("active");

        // setTimeout(function(){
        // }, 200);
    });
}

function popupPrestasi(){
    $(".btn-poppres").click(function(){
        var inpres = $(".popup#pop-prestasi"),
            cont = $(this).find(".inpop").html();


        TweenLite.set(inpres, {scale: 0.95});
        $(".popup#pop-prestasi").find(".shpop").html(cont);
        $(".popup#pop-prestasi").fadeIn(300);
        TweenLite.to(inpres, 0.3, {scale: 1, ease: Power1.easeOut});
    });

    $(".popup .in-popup .btn-close").click(function(){
        $(this).parents(".popup").fadeOut(300);
    })
}

function chooseproduct(){
    $(".produk-list").find(".btn-box").click(function(){
        var dvalue = $(this).attr("data-value");

        $(this).parents(".l-produk").prevAll().removeClass("active");
        $(this).parents(".l-produk").nextAll().removeClass("active");
        $(this).parents(".l-produk").addClass("active");
        $(".box-chooseproduct input").val(dvalue);
        // console.log($(".box-chooseproduct input").val());
    });
}


function animService(){
    if($(".right-service").length){
        var elem = $(".right-service"),
            anim = {},
            mcycle = elem.find(".mcycle"),
            scar = elem.find(".scar"),
            dots = elem.find(".dots"),
            triggerElem = $(".trig-service");

        TweenLite.set([mcycle, scar, dots], {css: {'opacity': '0'}});
        anim.runanim = function () {
            elem.each(function (i) {
                elem_ = $(this);
                if (triggerElem.isOnScreen() && !elem.hasClass('animated')) {
                    TweenMax.staggerTo([mcycle, scar, dots], 0.8, {opacity:1, delay:1.4, ease: Power2.easeOut}, 0.2);

                    elem_.addClass('animated');
                }
            })
        }
        $(window).scroll(function () {
            anim.runanim();
        })
        anim.runanim();
    }
}
function animProduct(){
    if($(".produkkredit").length){
        var elem = $(".produkkredit"),
            anim = {},
            bgwhite = elem.find(".circwhite"),
            lsproduk = elem.find(".box-list-product .list-product"),
            triggerElem = $(".trig-produk");

        TweenLite.set(bgwhite, {scale: 1.1, opacity: 0});
        TweenLite.set(lsproduk, {css: {'opacity': '0', 'position':'relative', 'top':'10px'}});
        anim.runanim = function () {
            elem.each(function (i) {
                elem_ = $(this);
                if (triggerElem.isOnScreen() && !elem.hasClass('animated')) {
                    TweenLite.to(bgwhite, 0.5, {opacity:1, delay:1.4, scale: 1, ease: Power2.easeOut}, 0.2);
                    TweenMax.staggerTo(lsproduk, 0.8, {opacity:1, delay:1.8, top: 0, ease: Power2.easeOut}, 0.2);

                    elem_.addClass('animated');
                }
            })
        }
        $(window).scroll(function () {
            anim.runanim();
        })
        anim.runanim();
    }
}
function animTestimoni(){
    if($(".testimonihome").length){
        var elem = $(".testimonihome"),
            anim = {},
            lstestimoni = elem.find(".box-list-testimoni .list-testimoni"),
            triggerElem = $(".trig-testimoni");

        TweenLite.set(lstestimoni, {scale: 0.9, opacity: 0});
        anim.runanim = function () {
            elem.each(function (i) {
                elem_ = $(this);
                if (triggerElem.isOnScreen() && !elem.hasClass('animated')) {
                    TweenMax.staggerTo(lstestimoni, 0.8, {opacity:1, delay:1.4, scale: 1, ease: Power2.easeOut}, 0.2);

                    elem_.addClass('animated');
                }
            })
        }
        $(window).scroll(function () {
            anim.runanim();
        })
        anim.runanim();
    }
}
function animSponsor(){
    if($(".sponsorhome").length){
        var elem = $(".sponsorhome"),
            anim = {},
            lssponsor = elem.find(".box-list-sponsor .list-sponsor"),
            triggerElem = $(".trig-sponsor");

        TweenLite.set(lssponsor, {scale: 0.9, opacity: 0});
        anim.runanim = function () {
            elem.each(function (i) {
                elem_ = $(this);
                if (triggerElem.isOnScreen() && !elem.hasClass('animated')) {
                    TweenMax.staggerTo(lssponsor, 0.8, {opacity:1, delay:1, scale: 1, ease: Power2.easeOut}, 0.2);

                    elem_.addClass('animated');
                }
            })
        }
        $(window).scroll(function () {
            anim.runanim();
        })
        anim.runanim();
    }
}

function loader(){
    var wrap  = $(".loaderpage"),
        iload = 0,
        width = 0,
        load  = $("body img").length,
        anim = function(){
            TweenLite.to(wrap, 1, {opacity: 0, delay:0.7, ease: Power2.easeOut, onComplete: function(){
                TweenLite.set(wrap, {css: {display: 'none'}});
            }});
        }


    if($(".loaderpage").length){
        // console.log('sdg');
        var delay = 0;
        $("body img").bind('load',function(){
            iload++;
            delay =iload;
            width = (iload/load) * 100;
            if(iload == load){
                anim();
            }

        });

        $(window).load(function(){
            anim();
        });
    }
}

function burgMenu(){
    $(".burg-menu").click(function(){
        $(".mainmenu ul").slideToggle(200);
        $(".bg-overlay").fadeToggle(200);
    });
    $(".mainmenu").find(".menures").click(function(){
        $(".mainmenu ul").slideUp(200);
        $(".bg-overlay").fadeOut(200);
    })
    $(".mainmenu").find(".bg-overlay").click(function(){
        $(".mainmenu ul").slideUp(200);
        $(".bg-overlay").fadeOut(200);
    })
}

function slideSponsor(){
    var ww = $(window).width();
    var ff = function(){
        if(ww <= 690){
            $(".box-list-sponsor").slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: false,
                arrows: false,
                dots: false,
            });
        }else{
            if($(".box-list-sponsor").slick()){
                $(".box-list-sponsor").slick("unslick");
            }
        }
    }

    ff();
    var resizeTimer;
    $(window).resize(function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            ff();
        }, 500);
    });
}

function officeClick(){
    $(".office-list .list-office .in-office").click(function(){
        if($(".box-maps").length){
            $(".office-list .list-office .in-office").removeClass("active");
            $(this).addClass("active");
            TweenLite.to(window, 1, {scrollTo:0, ease:Quart.easeInOut});
        }
    })
}

function slideprodhome(){
    $(".slideprodhome").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        responsive: [{
            breakpoint: 690,
            settings: 'unslick'
        }]
    })
}
function slidetestimoni(){
    $(".slidetestimoni").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        responsive: [{
            breakpoint: 690,
            settings: 'unslick'
        }]
    })
}
function slidesponsor(){
    $(".slidesponsor").slick({
        slidesToShow: 8,
        slidesToScroll: 2,
        arrows: false,
        dots: false,
        responsive: [{
            breakpoint: 690,
            settings: {
                slidesToShow: 4,
            }
        }]
    })
}