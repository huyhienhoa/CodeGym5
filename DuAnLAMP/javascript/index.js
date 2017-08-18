
$(document).ready(function () {
//        slider = $('.bxslider').bxSlider();
//        slider.goToNextSlide();
    $('.bxslider1').bxSlider({
        auto: true,//tự động next trang
        pause:5000,//độ trễ slider
        mode:'horizontal',//chiều chuyển slide
        startSlide:0,//slide bắt đầu
        captions:true,//hiển thị title là captions
      //  autoControls: true,//Hiển thị controls
        pager: true,// hiển thị hay không dấu chấm tròn.
        moveSlides: 1
    });

    $('.slide-sanphamnoibat').bxSlider({
        slideWidth: 300,
        minSlides: 2,
        maxSlides: 4,
        moveSlides: 1,
        slideMargin: 10,
        captions:true
        
    });

    $(window).scroll(function () {
        //if you hard code, then use console
        //.log to determine when you want the
        //nav bar to stick.
        console.log($(window).scrollTop())
        if ($(window).scrollTop() > 185) {
            $('.link').addClass('fixed');
        }
        if ($(window).scrollTop() < 185) {
            $('.link').removeClass('fixed');
        }
    });

    if($(".btn-top").length > 0){
        $(window).scroll(function () {
            var e = $(window).scrollTop();
            if (e > 400) {
                $(".btn-top").show()
            } else {
                $(".btn-top").hide()
            }
        });
        $(".btn-top").click(function () {
            $('body,html').animate({
                scrollTop: 0
            })
        })
    }

})