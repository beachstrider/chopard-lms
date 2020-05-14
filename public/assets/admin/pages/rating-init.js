/*
 Template Name: Admiry - Bootstrap 4 Admin Dashboard
 Author: Themesdesign
 Website: www.themesdesign.in
 File: Rating init
 */

$(function () {
    
    $('input.check').on('change', function () {
        alert('Rating: ' + $(this).val());

    });
    $('.rating-tooltip').rating({
        extendSymbol: function (rate) {

            $(this).tooltip({
                container: 'body',
                placement: 'bottom',
                title: 'Rate ' + rate
            });
        }
    });
    $('.rating-tooltip-manual').rating({
        extendSymbol: function () {
 
            var title;
            $(this).tooltip({
                container: 'body',
                placement: 'bottom',
                trigger: 'manual',
                title: function () {
                    return title;
                }
            });
            $(this).on('rating.rateenter', function (e, rate) {
                title = rate;
                $(this).tooltip('show');
            })
                .on('rating.rateleave', function () {
                    $(this).tooltip('hide');
                });
        }
    });
    $('.rating').each(function () {
        $('<span class="label label-default"></span>')
            .text($(this).val() || ' ')
            .insertAfter(this);
    });
    $('.rating').on('change', function () {
        $(this).next('.label').text($(this).val());
    });

    $('.rating-symbol').each(function(){
        if($(this).find('.mdi.mdi-star').length){
            $(this).css("background-image", "url('/assets/img/palm-32-33.5.png')");
            $(this).css("background-size", "100%");
            $(this).css("background-repeat", "no-repeat");
            $(this).css("width", "32px");
            $(this).css("height", "33.5px");
            $(this).css("top", "6px");
            $(this).children().remove();
        }else{
            $(this).remove();
        }
    });
});