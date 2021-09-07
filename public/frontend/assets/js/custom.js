// Quantity plus minus ................
jQuery(document).ready(function () {
    $('[data-quantity="plus"]').click(function (e) {
        e.preventDefault();
        fieldName = $(this).attr('data-field');
        var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        if (!isNaN(currentVal)) {
            $('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
            $('input[name=' + fieldName + ']').val(0);
        }
    });
    $('[data-quantity="minus"]').click(function (e) {
        e.preventDefault();
        fieldName = $(this).attr('data-field');
        var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        if (!isNaN(currentVal) && currentVal > 0) {
            $('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
            $('input[name=' + fieldName + ']').val(0);
        }
    });
});



$(function () {
    'use strict';


    // PC Menu
    $("#pills-home-tab").hover(function () {
        $("#pills-home").toggleClass("active");  //Toggle the active class to the area is hovered
        $("#pills-home").toggleClass("show");  //Toggle the active class to the area is hovered
    });

    $("#pills-profile-tab").hover(function () {
        $("#pills-shoes").toggleClass("active");  //Toggle the active class to the area is hovered
        $("#pills-shoes").toggleClass("show");  //Toggle the active class to the area is hovered
    });
    $("#pills-contact-tab").hover(function () {
        $("#pills-plus").toggleClass("active");  //Toggle the active class to the area is hovered
        $("#pills-plus").toggleClass("show");  //Toggle the active class to the area is hovered
    });
    $("#pills-men-tab").hover(function () {
        $("#pills-men").toggleClass("active");  //Toggle the active class to the area is hovered
        $("#pills-men").toggleClass("show");  //Toggle the active class to the area is hovered
    });
    $("#pills-jewelry-tab").hover(function () {
        $("#pills-Jewelry").toggleClass("active");  //Toggle the active class to the area is hovered
        $("#pills-Jewelry").toggleClass("show");  //Toggle the active class to the area is hovered
    });
    $("#pills-bag-tab").hover(function () {
        $("#pills-bag").toggleClass("active");  //Toggle the active class to the area is hovered
        $("#pills-bag").toggleClass("show");  //Toggle the active class to the area is hovered
    });
    $("#pills-garden-tab").hover(function () {
        $("#pills-garden").toggleClass("active");  //Toggle the active class to the area is hovered
        $("#pills-garden").toggleClass("show");  //Toggle the active class to the area is hovered
    });
    $("#pills-kid-tab").hover(function () {
        $("#pills-kid").toggleClass("active");  //Toggle the active class to the area is hovered
        $("#pills-kid").toggleClass("show");  //Toggle the active class to the area is hovered
    });
    $("#pills-beauty-tab").hover(function () {
        $("#pills-beauty").toggleClass("active");  //Toggle the active class to the area is hovered
        $("#pills-beauty").toggleClass("show");  //Toggle the active class to the area is hovered
    });
    $("#pills-baby-tab").hover(function () {
        $("#pills-baby").toggleClass("active");  //Toggle the active class to the area is hovered
        $("#pills-baby").toggleClass("show");  //Toggle the active class to the area is hovered
    });

    // flash js start
    $('.flash_slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: false,
        nextArrow: '<i class="fas fa-chevron-right nxt_arr"></i>',
        prevArrow: false,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        }
        ]
    });
    // Mobile Side Menu Frist Categories
    $(document).on('click', '#Click', function () {
        $('.one').toggleClass("visible"); //you can list several class names
        e.preventDefault();
    });
    //Mobile Side Menu Secound Categories
    $(document).on('click', '#Click2', function () {
        $('.two').toggleClass("visible"); //you can list several class names
        e.preventDefault();
    });
    // Toggle Class
    // $('#Click').on('click', function(e){
    //   $('.hide').removeClass('visible').addClass('hide');
    //   e.preventDefault();
    // };
    // Cart Counter
    var quantitiy = 0;
    $('.quantity-right-plus').click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        // If is not undefined
        $('#quantity').val(quantity + 1);
        // Increment
    });
    $('.quantity-left-minus').click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        // If is not undefined
        // Increment
        if (quantity > 0) {
            $('#quantity').val(quantity - 1);
        }
    });
    // Admin section tabs
    $(document).on('click', '.nav-link.active', function () {
        var href = $(this).attr('href').substring(1);
        //alert(href);
        $(this).removeClass('active');
        $('.tab-pane[id="' + href + '"]').removeClass('active');

    });
    $(document).mouseup(function (e) {
        var container = $("#pills-tabContent"); // target ID or class
        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            // get Event here
            $('.active').removeClass('active');
        }
    });



    // price range part js start

    $(".range-example-input").asRange({
        range: true,
        limit: true,
        tip: {
            active: 'onMove'
        }
    });


    // register js start
    $('.img_slide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: false,
        dots: true,
    });


});
