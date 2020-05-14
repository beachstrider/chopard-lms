$(document).ready(function(){
    $(".btn-show-feedback-model").click(function(){
        var modal = $("#userfeedback-modal");
        modal.find('h4').text($(this).data('username'));
        modal.find('.description').text($(this).data('description'));
        modal.find('.modal-avatar-container img').attr('src', $(this).data('avatar'));

        var rate1 = $(this).data('rate1');
        var rate2 = $(this).data('rate2');
        var rate3 = $(this).data('rate3');
        var rate4 = $(this).data('rate4');

        console.log(rate1,rate2,rate3,rate4);

        modal.find('.div-modal-rate1').children().slice(1).remove();
        modal.find('.div-modal-rate2').children().slice(1).remove();
        modal.find('.div-modal-rate3').children().slice(1).remove();
        modal.find('.div-modal-rate4').children().slice(1).remove();
        modal.find('.div-modal-rate5').children().slice(1).remove();

        if(rate1==5){
            modal.find('.div-modal-rate1').children().last().after($('#star-lib').children().eq(5).children().clone());
        }else if(rate1==4){
            modal.find('.div-modal-rate1').children().last().after($('#star-lib').children().eq(4).children().clone());
        }else if(rate1==3){
            modal.find('.div-modal-rate1').children().last().after($('#star-lib').children().eq(3).children().clone());
        }else if(rate1==2){
            modal.find('.div-modal-rate1').children().last().after($('#star-lib').children().eq(2).children().clone());
        }else if(rate1==1){
            modal.find('.div-modal-rate1').children().last().after($('#star-lib').children().eq(1).children().clone());
        }else if(rate1==0){
            modal.find('.div-modal-rate1').children().last().after($('#star-lib').children().eq(0).children().clone());
        }
        if(rate2==5){
            modal.find('.div-modal-rate2').children().last().after($('#star-lib').children().eq(5).children().clone());
        }else if(rate2==4){
            modal.find('.div-modal-rate2').children().last().after($('#star-lib').children().eq(4).children().clone());
        }else if(rate2==3){
            modal.find('.div-modal-rate2').children().last().after($('#star-lib').children().eq(3).children().clone());
        }else if(rate2==2){
            modal.find('.div-modal-rate2').children().last().after($('#star-lib').children().eq(2).children().clone());
        }else if(rate2==1){
            modal.find('.div-modal-rate2').children().last().after($('#star-lib').children().eq(1).children().clone());
        }else if(rate2==0){
            modal.find('.div-modal-rate2').children().last().after($('#star-lib').children().eq(0).children().clone());
        }
        if(rate3==5){
            modal.find('.div-modal-rate3').children().last().after($('#star-lib').children().eq(5).children().clone());
        }else if(rate3==4){
            modal.find('.div-modal-rate3').children().last().after($('#star-lib').children().eq(4).children().clone());
        }else if(rate3==3){
            modal.find('.div-modal-rate3').children().last().after($('#star-lib').children().eq(3).children().clone());
        }else if(rate3==2){
            modal.find('.div-modal-rate3').children().last().after($('#star-lib').children().eq(2).children().clone());
        }else if(rate3==1){
            modal.find('.div-modal-rate3').children().last().after($('#star-lib').children().eq(1).children().clone());
        }else if(rate3==0){
            modal.find('.div-modal-rate3').children().last().after($('#star-lib').children().eq(0).children().clone());
        }
        if(rate4==5){
            modal.find('.div-modal-rate4').children().last().after($('#star-lib').children().eq(5).children().clone());
        }else if(rate4==4){
            modal.find('.div-modal-rate4').children().last().after($('#star-lib').children().eq(4).children().clone());
        }else if(rate4==3){
            modal.find('.div-modal-rate4').children().last().after($('#star-lib').children().eq(3).children().clone());
        }else if(rate4==2){
            modal.find('.div-modal-rate4').children().last().after($('#star-lib').children().eq(2).children().clone());
        }else if(rate4==1){
            modal.find('.div-modal-rate4').children().last().after($('#star-lib').children().eq(1).children().clone());
        }else if(rate4==0){
            modal.find('.div-modal-rate4').children().last().after($('#star-lib').children().eq(0).children().clone());
        }

    });

    $(".btn-show-report-model").click(function(){
        var modal = $("#userreport-modal");
        modal.find('h4').text($(this).data('username'));
        modal.find('.description').text($(this).data('description'));

    });

});