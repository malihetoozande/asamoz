//پنل مدیریت
$(document).ready(function() {
    $('.admin-menu > ul > li.user').click(function () {
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-user").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.staff').click(function () {
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-staff").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.cost').click(function () {
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-cost").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.teach').click(function () {
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-teach").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.onlineregistration').click(function () {
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-onlineregistration").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.onlinetest').click(function () {
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-onlinetest").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.time').click(function () {
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-time").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.onlinechat').click(function () {
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-onlinechat").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.dialogueforum').click(function () {
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-dialogueforum").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.book').click(function () {
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-book").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.certificate').click(function () {
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-certificate").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.advice').click(function () {
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-advice").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});

$(document).ready(function() {
    $('.admin-menu > ul > li.sms').click(function () {
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-sms").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    },
    navText:Array ('<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'),
    dots:true,
    autoplay:true,
});



