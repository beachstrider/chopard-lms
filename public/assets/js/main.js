var dlw = function() {
    'use strict';
    var wh = 0;
    var sp = 0;
    var breakpoint_tablet = 1023;
    var breakpoint_movil = 767;

    var loadPage = function() {
        $(window).load(function() {
            $('#preloader').fadeOut('slow', function() {
                $('body').removeClass('preload');
                $(this).remove();
            });
            if ($('#act13').length == 1) {
                auto_slide_after_start(2, 4000);
                $('.banner-content-wrapper.hhtemp').show();
            }
        });
    };

    var fijarAltoReel = function() {
        wh = $(window).height();
        wh = wh - $('.cabecera').outerHeight(true);
        wh = wh - $('.pie').outerHeight(true);
        $('#reel').css('height', wh + 'px');
    };

    var initMenu = function() {
        var scrollpos = 0;
        $('#btn-menu-offcanvas').on('click', function(e) {
            e.preventDefault();
            if ($('#offcanvas-overlay').length === 0) {
                $('<div>', { id: 'offcanvas-overlay' }).appendTo('body');
            }
            $('#offcanvas-overlay').fadeIn(200);
            scrollpos = $(window).scrollTop();
            if (hasScrollbar()) {
                $('body').addClass('scroll');
            }
            $('body').addClass('offcanvas').css('top', '-' + scrollpos + 'px');
        });

        $(document).on('click', '#offcanvas-overlay, #btn-menu-offcanvas-close', function(e) {
            e.preventDefault();
            $('body').removeClass('offcanvas scroll');
            $(window).scrollTop(scrollpos);
            $('#offcanvas-overlay').fadeOut(function() {
                $('#offcanvas-overlay').remove();
            });
        });

        $('#scrollable-area').slimScroll({
            height: '100%'
        });

        $(document).on('click', '.chapter a', function(e) {
            e.stopPropagation();
        });

        $(document).on('click', '.menu-offcanvas-item > .menu-offcanvas-item-title', function() {
            var $item_title = $(this);
            var $chapter = $(this).closest('.chapter');
            $item_title.next('ul').slideToggle(200, function() {
                if ($(this).is(':hidden')) {
                    $chapter.animate({
                        backgroundColor: "transparent"
                    }, 600);
                    $chapter.removeClass('abierto');
                    $(this).removeAttr('style');
                } else {
                    $chapter.animate({
                        backgroundColor: "#e7e7e7"
                    }, 600);
                    $chapter.addClass('abierto');
                }
            });
        });

        $(document).on('click', '.btn-reset-activity', function(e) {
            e.preventDefault();
            $('#btn-confirm-reset-activity').data('reset-id', $(this).data('reset-id'));
            $('#btn-confirm-reset-activity').data('reset-route', $(this).data('reset-route'));
            $('#btn-menu-offcanvas-close').trigger('click');
            openConfirmDialog('#confirm-reset-activity');
        });

        $(document).on('click', '#btn-confirm-reset-activity', function(e) {
            var aid = $(this).data('reset-id');
            var route = $(this).data('reset-route');
            if (aid) {
                resetIndividualActivity(aid, route);
            }
        });

        $(document).on('click', '#btn-cancel-reset-activity', function(e) {
            closeConfirmDialog('#confirm-reset-activity');
        });

        $(document).on('click', '#reset-all', function(e) {
            e.preventDefault();
            $('#btn-menu-offcanvas-close').trigger('click');
            openConfirmDialog('#confirm-reset');
        });

        $(document).on('click', '#btn-reset-activities', function(e) {
            resetAllActivities();
        });

        $(document).on('click', '#btn-cancel-reset-activities', function(e) {
            closeConfirmDialog('#confirm-reset');
        });
    };

    var hasScrollbar = function() {
        var fullWindowWidth = window.innerWidth
        if (!fullWindowWidth) {
            var documentElementRect = document.documentElement.getBoundingClientRect();
            fullWindowWidth = documentElementRect.right - Math.abs(documentElementRect.left);
        }
        return document.body.clientWidth < fullWindowWidth;
    };

    var initAnclas = function() {
        $('.ancla').click(function(e) {
            e.preventDefault();
            var $this = $(this);
            var margin_top = ($this.data('margin-top')) ? $this.data('margin-top') : 0;
            var $seccion = $($this.attr('href'));
            var top = $seccion.offset().top - margin_top;
            $('html,body').animate({ scrollTop: top }, 'slow');
        });
    };

    var initModal = function() {
        $('.modal-open').on('click', function(e) {
            e.preventDefault();
            var $btn = $(this);
            var modalId = $btn.data('modal');
            $('body').addClass('modal-abierto');
            $(modalId).fadeIn(function() {
                if ($btn.hasClass('pdf')) {
                    var $pdf_frame = $('#pdf-frame');
                    if (!$pdf_frame.attr('src')) {
                        $pdf_frame.attr('src', window.pdf_src);
                    }
                    $('.btn.modal-open').off('click')
                        .attr('href', window.first_activity)
                        .removeAttr('data-modal')
                        .removeClass('modal-open pdf');
                    setTimeout(function() {
                        $('.modal-close').fadeIn();
                    }, 1500);
                }
            });
            if ($btn.hasClass('offcanvas-close')) {
                $('#btn-menu-offcanvas-close').trigger('click');
            }
        });

        $('.modal-close').on('click', function(e) {
            e.preventDefault();
            if ($(this).parent().hasClass('justClose')) {} else if ($(this).parent().hasClass('pdf')) {
                var str = window.location.pathname;
                var sVal = str.replace("/chapter/", "");
                var activity = parseInt(sVal);
                activity = sVal;
                if (activity == '1') {
                    window.location.href = window.location.origin + '/chapter/1/1';
                } else if (activity == '2') {
                    window.location.href = window.location.origin + '/chapter/2/3';
                } else if (activity == '3') {
                    window.location.href = window.location.origin + '/chapter/3/5';
                } else if (activity == '3.1') {
                    window.location.href = window.location.origin + '/chapter/3.1/6';
                } else if (activity == '3.2') {
                    window.location.href = window.location.origin + '/chapter/3.2/9';
                } else if (activity == '3.3') {
                    window.location.href = window.location.origin + '/chapter/3.3/12';
                } else if (activity == '3.4') {
                    window.location.href = window.location.origin + '/chapter/3.5';
                } else if (activity == '3.5') {
                    window.location.href = window.location.origin + '/chapter/4';
                } else if (activity == '4') {
                    window.location.href = window.location.origin + '/chapter/4/15';
                } else if (activity == '5') {
                    window.location.href = window.location.origin + '/chapter/5.1';
                } else if (activity == '5.1') {
                    window.location.href = window.location.origin + '/chapter/5.1/20';
                } else if (activity == '5.2') {
                    window.location.href = window.location.origin + '/chapter/5.3';
                } else if (activity == '5.3') {
                    window.location.href = window.location.origin + '/chapter/6';
                } else if (activity == '6') {
                    window.location.href = window.location.origin + '/chapter/1';
                } else {
                    window.location.reload();
                }
            }
            $('body').removeClass('modal-abierto');
            $(this).closest('.modal-box').fadeOut();
            tree_tree_slider();
        });

        $(document).on('mousemove', '.rate-item', function(e) {
            $(this).siblings().removeClass('selected');
            $(this).prevAll().addClass('selected');
        });

        $(document).on('mouseleave', '.rate-container', function(e) {
            $(this).children().removeClass('selected');
            rate_init();
        });

        $(document).on('click', '.rate-item', function(e) {
            var rate = $(this).data('rate_val');
            $(this).siblings('input').val(rate);
        });

        $(document).on('submit', '#feedback-form', function(){
            var form = $(this);
            event.preventDefault();

            var formData = {
                knowledge : $(this).find('#knowledge').val(),
                answering : $(this).find('#answering').val(),
                enjoying : $(this).find('#enjoying').val(),
                quality : $(this).find('#quality').val(),
                description : $(this).find('#description').val(),
            }

            $.ajax({
                type     : "POST",
                url      : $(this).attr('action'),
                headers: { 'X-CSRF-TOKEN': window.token },
                data     : formData,
                cache    : false,

                success  : function(data) {
                    if(data == 'ok'){
                        form.remove();
                        $('.feedback-thanks').fadeIn();
                    }else{
                        alert('Oops! Something went wront.');
                    }
                }
            });

        });

        $(".readonly").keydown(function(e){
            e.preventDefault();
        });
    };

    var rate_init = function(){
        $('.rate-container').each(function(){
            $(this).children('.rate-item').slice(0, $(this).find('input').val()).addClass('selected');
        });
    };

    var visibleInDocument = function(element) {
        var $el = $(element);
        var doc_top = $(window).scrollTop();
        var doc_bottom = doc_top + $(window).height();
        var el_top = $el.offset().top;
        var el_bottom = el_top + $el.height();
        return ((el_bottom <= doc_bottom) && (el_top >= doc_top));
    };

    var initReel = function() {
        $('.vegas').vegas({
            slides: [
                { src: "assets/img/reel/01.jpg" },
                { src: "assets/img/reel/01.jpg" },
                { src: "assets/img/reel/01.jpg" },
                { src: "assets/img/reel/01.jpg" }
            ],
            delay: 4000,
            timer: false
        });
    };


    var initChapterReel = function(arr_slides) {
        $('.vegas').vegas({
            slides: arr_slides,
            delay: 3000,
            timer: false
        });
    };

    var initMenuChapters = function() {
        $('.chapter a').on('click', function(e) {
            e.stopPropagation();
        });
        $(document).on('click', '.chapter-info', function() {
            var $chapter = $(this);
            if ($chapter.closest('#base-summary').length && $(window).width() > breakpoint_tablet) {
                return false;
            }
            $chapter.next('.chapter-steps').slideToggle(200, function() {
                if ($(this).is(':hidden')) {
                    if ($chapter.closest('#menu-offcanvas').length) {
                        $chapter.closest("div[class^='col-']").animate({
                            backgroundColor: "transparent"
                        }, 600);
                    }
                    $chapter.removeClass('abierto');
                    $(this).removeAttr('style');
                } else {
                    if ($chapter.closest('#menu-offcanvas').length) {
                        $chapter.closest("div[class^='col-']").animate({
                            backgroundColor: "#e4e4e4"
                        }, 600);
                    }
                    $chapter.addClass('abierto');
                }
            });
        });
    };

    var initLogout = function() {
        $('.logout-action').on('click', function(e) {
            e.preventDefault()
            $('#logout-form').submit();
        });
    };



    var showSplash = function(splash_id) {
        sp = $(window).scrollTop();
        if (hasScrollbar()) {
            $('body').css('top', -(sp) + 'px').addClass('noscroll1');
        }
        var selector = (arguments.length === 0) ? '.splash' : splash_id;
        var $ventana = $(selector);
        var $video = $ventana.find('.splash-video');
        if ($video.length > 0) {
            $video.css('max-width', $(window).height() * 16 / 9);
            $(window).on('resize', function() {
                $video.css('max-width', $(window).height() * 16 / 9);
            });
        }
        $ventana.fadeIn();
    };

    var closeSplash = function(splash_id) {
        var selector = (arguments.length === 0) ? '.splash' : splash_id;
        $(selector).fadeOut();
        $('body').removeClass('noscroll');
        $(window).scrollTop(sp);
    };

    var openConfirmDialog = function(selector) {
        sp = $(window).scrollTop();
        if (hasScrollbar()) {
            $('body').css('top', -(sp) + 'px').addClass('noscroll1');
        }
        var dialog = (selector) ? selector : '#confirm';
        $(dialog).fadeIn();
    };

    var openFeedbackDialog = function(){
        $("#feedback-dialog").fadeIn();
    }

    var closeConfirmDialog = function(selector) {
        var dialog = (selector) ? selector : '#confirm';
        $(dialog).fadeOut();
        $('body').removeClass('noscroll');
        $(window).scrollTop(sp);
    };

    var registerActivity = function(aid, score, next_route) {
        $.ajax({
            type: "POST",
            url: window.register_url,
            data: { activity_id: aid, score: score },
            headers: { 'X-CSRF-TOKEN': window.token },
            success: function(data) {
                $(window).off('beforeunload');
                window.location.href = next_route;
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error: ' + errorThrown);
            }
        });
    };

    var registerActivity_without_next = function(aid, score) {
        $.ajax({
            type: "POST",
            url: window.register_url,
            data: { activity_id: aid, score: score },
            headers: { 'X-CSRF-TOKEN': window.token },
            success: function(data) {
                $(window).off('beforeunload');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error: ' + errorThrown);
            }
        });
    };

    var resetActivity = function(aid) {
        $.ajax({
            type: "POST",
            url: window.reset_url,
            data: { activity_id: aid },
            headers: { 'X-CSRF-TOKEN': window.token },
            success: function(data) {
                if (aid == '6') {
                    location.reload(true);
                } else {
                    $(window).off('beforeunload');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error: ' + errorThrown);
            }
        });
    };

    var resetIndividualActivity = function(aid, route) {
        $.ajax({
            type: "POST",
            url: window.reset_url,
            data: { activity_id: aid },
            headers: { 'X-CSRF-TOKEN': window.token },
            success: function(data) {
                if (route) {
                    window.location.href = route;
                } else {
                    window.location.href = window.base_url;
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error: ' + errorThrown);
            }
        });
    };

    var resetAllActivities = function() {
        $.ajax({
            type: "POST",
            url: window.reset_url + '/all',
            headers: { 'X-CSRF-TOKEN': window.token },
            success: function(data) {
                $(window).off('beforeunload');
                window.location.href = window.base_url;
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error: ' + errorThrown);
            }
        });
    };

    var activitySlider = function() {
        $(".action-slider > .item:gt(0)").hide();
        setInterval(function() {
            $('.action-slider > .item:first')
                .fadeOut(1000)
                .next('.item')
                .fadeIn(1000)
                .end()
                .appendTo('.action-slider');
        }, 3000);
    };

    var activityAnimation = function($img) {
        var first = false;
        if (!$img.length) {
            $img = $('#img1');
            first = true;
        }
        var delay = $img.data('delay');
        var trans = 1000;
        if ($img.data('trans')) {
            trans = $img.data('trans');
        }
        if ($img.is(':visible')) {
            $img.delay(delay).fadeOut(trans, function() {
                activityAnimation($img.prev());
            });
        } else {
            if (first) delay = 0;
            $img.delay(delay).fadeIn(trans, function() {
                if (first) $img.siblings('.item').show();
                activityAnimation($img);
            });
        }
    };

    var initHome = function(homeId) {
        switch (homeId) {

            case '3.3':

                var video1 = document.getElementById("video1");
                var video2 = document.getElementById("video2");
                var player1 = new Vimeo.Player(video1);
                var player2 = new Vimeo.Player(video2);

                player1.onended = function(data) {
                    justclose_splash(1);
                };

                player2.onended = function(data) {
                    window.location.href = window.location.origin + '/chapter/3.3/12';
                };

                break;
        }
    };


    var initActivity = function(current_activity_id, next_route, complete) {
        var modified = false;
        var activity = $('.banner-chapter').attr('id');

        $(document).on('click', '.item-img.correct .btn-action-delete, .item-img.wrong .btn-action-palm', function() {
            $(this).closest('.item-img').children('.item-img-tryagain').fadeIn();
        });

        jQuery(document).on('click', '.item-img.correct .btn-action-palm, .item-img.wrong .btn-action-delete', function() {
            jQuery(this).parent().parent().addClass('clicked');
        });

        $(document).on('click', '.item-img-tryagain .btn', function() {
            $(this).parent('.item-img-tryagain').fadeOut();
            $(this).closest('.splash-galeria-item').find('.action-btn-palm').prop('disabled', true);
        });

        $(document).on('click', '.item-img.wrong .btn-action-delete', function() {
            $(this).closest('.item-img').find('.item-img-msg').fadeIn();
            modified = true;
        });

        $(window).on('beforeunload', function() {
            if (modified) {
                return 'Changes made to the activity will be lost.';
            }
        });

        switch (activity) {

            case 'act1':
                var oks = 0;
                var total_items = 6;
                var total_score = 0;

                if (complete) {
                    $('.item-txt-tag').each(function() {
                        var $this = $(this);
                        $this.children('.item-txt-titulo')
                            .addClass('completado')
                            .text($this.find('.item-txt-btn[data-result="ok"]').data('value'));
                        $this.children('.item-txt-tag-hover').hide();
                    });
                }

                var player = document.getElementById("video");

                player.onended =  function(data) {
                    closeSplash();
                    openConfirmDialog();
                };

                $('.item-txt-btn').on('click', function(e) {
                    e.preventDefault();
                    modified = true;
                    var $contenedor = $(this).closest('.item-txt-tag');
                    var retry_count = $contenedor.data('retry');
                    if ($(this).data('result') === 'ok') {
                        oks++;
                        if (retry_count == 0){
                            total_score += 5;
                        }else if(retry_count == 1){
                            total_score +=3;
                        }
                        
                        $(this).closest('.item-txt-tag-hover').hide();
                        $contenedor.children('.item-txt-titulo')
                            .addClass('completado')
                            .text($(this).data('value'));
                    } else {
                        $(this).addClass('ko');
                        $contenedor.data('retry', retry_count + 1);
                    }
                    if (oks >= total_items) {
                        showSplash();
                        player.play();
                        $('#btn-save').prop('disabled', false);
                        $('#btn-reset').prop('disabled', false);
                    }
                });


                $(document).on('click', '.splash-close', function() {
                    closeSplash();
                    player.pause();
                    openConfirmDialog();
                });

                $(document).on('click', '#btn-save', function() {
                    if (oks >= total_items) {
                        registerActivity(current_activity_id, total_score/total_items, next_route);
                    }
                });

                $(document).on('click', '#btn-reset', function() {
                    oks = 0;
                    total_score = 0;

                    $('.item-txt-tag').each(function() {
                        var $this = $(this);
                        var $titulo = $this.children('.item-txt-titulo');
                        var default_value = $titulo.data('default-value');
                        if (!default_value) default_value = '';
                        $titulo.removeClass('completado').text(default_value);
                        $this.children('.item-txt-tag-hover').show();
                        $this.data('retry', 0);
                    });
                    resetActivity(current_activity_id);
                    closeConfirmDialog();
                });

                break;

            case 'act2':
                var total_score = 0;
                var total_items = 24;
                var oks = 0;
                var player = document.getElementById("video");

                $(document).on('click', '.btn-action-video', function() {
                    player.play();
                });

                // player.on('play', function(data) {
                //     $('.btn-action-video').fadeTo('slow', 0);
                // });

                // player.on('pause', function(data) {
                //     $('.btn-action-video').fadeTo('slow', 1);
                // });

                player.onended =  function(data) {
                    $('.btn-action-video').fadeTo('slow', 1);
                };

                $(document).on('click', '.item-img.correct .btn-action-delete, .item-img.wrong .btn-action-palm', function() {
                    var $item = $(this).closest('.item-img');
                    $item.data('retry', $item.data('retry') + 1);
                    $(this).closest('.item-img').children('.item-img-tryagain').fadeIn();
                });

                $(document).on('click', '.item-img-tryagain .btn', function() {
                    $(this).parent('.item-img-tryagain').fadeOut();
                });

                $(document).on('click', '.item-img.correct .btn-action-palm', function() {
                    var $item = $(this).closest('.item-img');
                    var retry_count = $item.data('retry');
                    oks++;

                    if (retry_count == 0){
                        total_score += 5;
                    }else if(retry_count == 1){
                        total_score +=3;
                    }

                    modified = true;

                    $item.children('.item-img-hover').fadeOut(300, function() {
                        $item.addClass('complete');
                    });
                });

                $(document).on('click', '.item-img.wrong .btn-action-delete', function() {
                    var $item = $(this).closest('.item-img');
                    var retry_count = $item.data('retry');
                    oks++;

                    if (retry_count == 0){
                        total_score += 5;
                    }else if(retry_count == 1){
                        total_score +=3;
                    }

                    $item.find('.item-img-msg').fadeIn();
                    modified = true;
                });

                $(document).on('click', '.item-img', function() {
                    modified = true;

                    var clickcount = jQuery('.item-img-btn-lista.clicked').length;
                    var parentClass = jQuery('.row.gutters-10.imgs').parent().attr('class');

                    var parentId = jQuery('.row.gutters-10.imgs').parent().attr('id');
                    if (parentId == "#galeria-1") {
                        var totalimage = jQuery('#galeria-1').find('.row.gutters-10.imgs').find('.col-xs-4').length;
                    } else if (parentClass == "action-activity") {
                        var totalimage = jQuery('.action-activity').find('.row.gutters-10.imgs').find('.col-xs-4').length;
                    }

                    if (clickcount == totalimage) {
                        $('.item-img.correct').each(function() {
                            $(this).addClass('complete');
                        });

                        $('#btn-save').prop('disabled', false);
                        $('#btn-reset').prop('disabled', false);

                        setTimeout(function() {
                            openConfirmDialog();
                        }, 500);
                    }
                });

                $(document).on('click', '#btn-save', function() {
                    if (oks >= total_items) {
                        registerActivity(current_activity_id, total_score/total_items, next_route);
                    }
                });

                $(document).on('click', '#btn-reset', function() {
                    oks = 0;
                    total_score = 0;

                    $('.item-img.correct').removeClass('complete');
                    jQuery('.item-img-btn-lista.clicked').removeClass('clicked');
                    $('.item-img.wrong').each(function() {
                        $(this).children('.item-img-hover').show();
                        $(this).children('.item-img-msg').hide();
                        $(this).data('retry', 0);
                    });

                    $('.item-img.correct').each(function() {
                        $(this).children('.item-img-hover').show();
                        $(this).data('retry', 0);
                    });

                    resetActivity(current_activity_id);
                    closeConfirmDialog();
                });

                break;

            

            case 'act3':
                var oks = 0;
                var total_items = 12;
                var total_score = 0;

                if (complete) {
                    $('.item-img-tag').each(function() {
                        var $item = $(this);
                        var tag = $item.find('.item-img-btn[data-result="ok"]').data('value');
                        $item.find('.tag-ok').text(tag);
                        $('.item-img-tag-hover').hide();
                    });

                    $(document).on('click', '#btn-reset', function() {
                        oks = 0;
                        $('.tag-ok').text('#');
                        $('.item-img-tag-hover').show();

                        resetActivity(current_activity_id);
                    });
                }

                $(document).on('click', '.item-img-btn', function(e) {
                    e.preventDefault();
                    modified = true;

                    var $contenedor = $(this).closest('.item-img-tag');
                    var retry_count = $contenedor.data('retry');

                    if ($(this).data('result') === 'ok') {
                        oks++
                        $(this).closest('.item-img-tag-hover').hide();
                        $contenedor.find('.tag-ok').text($(this).data('value'));

                        if (retry_count == 0){
                            total_score += 5;
                        }else if(retry_count == 1){
                            total_score +=3;
                        }
                    } else {
                        $(this).addClass('ko');
                        $contenedor.data('retry', retry_count + 1);
                    }

                    if (oks >= total_items) {
                        $('#btn-save').prop('disabled', false);
                        $('#btn-reset').prop('disabled', false);

                        if (activity === 'act17') {
                            showSplash();
                            player.play();
                        } else {
                            openConfirmDialog();
                        }

                    }

                });

                $(document).on('click', '.splash-close', function() {
                    if (activity === 'act17') {
                        closeSplash();
                        player.pause();
                        openConfirmDialog();
                    }
                });

                $(document).on('click', '#btn-save', function() {
                    if (oks >= total_items) {
                        registerActivity(current_activity_id, total_score/total_items, next_route);
                    }
                });

                $(document).on('click', '#btn-reset', function() {
                    oks = 0;
                    total_score = 0;
                    $('.tag-ok').text('#');
                    $('.item-img-btn').removeClass('ko');
                    $('.item-img-tag-hover').show();

                    resetActivity(current_activity_id);
                    closeConfirmDialog();

                    $('.item-img-tag').each(function(){
                        $(this).data('retry', 0);
                    });
                });

                break;

            case 'act4':
                var ok = false;
                var score = 0;

                if (complete) {
                    $('.input-complete').each(function() {
                        var $el = $(this);
                        var sol = $el.attr('id')
                            .replace('txt_', '')
                            .replace('_', ' ');
                        $el.val(sol);
                        $el.css('border-color', 'transparent');
                    });
                }

                var player = document.getElementById("video");

                $(document).on('click', '.btn-action-video', function() {
                    player.play();
                });

                // player.on('play', function(data) {
                //     $('.btn-action-video').fadeTo('slow', 0);
                // });

                // player.on('pause', function(data) {
                //     $('.btn-action-video').fadeTo('slow', 1);
                // });

                player.onended =  function(data) {
                    $('.btn-action-video').fadeTo('slow', 1);
                };

                $(document).on('change', '.activity-concepts-text :input', function() {
                    modified = true;
                });

                $(document).on('click', '#btn-check', function(e) {
                    e.preventDefault();
                    var errores = 0;
                    var excellence = jQuery("#txt_excellence span").text();
                    var ethical = jQuery("#txt_ethical span").text();
                    var hightest_quality = jQuery("#txt_highest_quality span").text();
                    var responsibly = jQuery("#txt_responsibly span").text();
                    var s_luxury = jQuery("#txt_sustainable_luxury span").text();
                    var nature_positivity = jQuery("#txt_nature_and_positivity span").text();

                    if (excellence == '' || ethical == '' || hightest_quality == '' || responsibly == '' || s_luxury == '' || nature_positivity == '') {
                        alert("Please fill all these fields!");
                        errores = 1;
                    } else {
                        if ((excellence.trim() != "EXCELLENCE") || (ethical.trim() != "ETHICAL") || (hightest_quality.trim() != "HIGHEST QUALITY") || (responsibly.trim() != "RESPONSIBLY") || (s_luxury.trim() != "SUSTAINABLE LUXURY") || (nature_positivity.trim() != "NATURE AND POSITIVITY")) {
                            errores = 1;
                            alert("You might fill incorrect Answer. Please try again!");
                        } else {
                            errores = 0;
                        }
                    }

                    $('.input-invisible').each(function() {
                        var $el = $(this);
                        var val = $.trim($el.val().toLowerCase());
                        if (val.length < 1) {
                            $el.css('border-color', '#FF0000');
                            errores++;
                            return true;
                        } else {
                            $el.css('border-color', 'transparent');
                        }
                        var sol = $el.attr('id')
                            .replace('txt_', '')
                            .replace(new RegExp('_', 'g'), ' ');
                        if (val !== sol) {
                            $el.css('color', '#FF0000');
                            errores++;
                        } else {
                            $el.css('color', '#6a6a6a');
                        }
                    });

                    if (errores === 0) {
                        ok = true;
                        var retry_count = $('.activity-concepts-text').data('retry');
                        if(retry_count==0){
                            score = 5;
                        }else if(retry_count==1){
                            score = 4;
                        }else if(retry_count==2){
                            score = 3;
                        }else if(retry_count==3){
                            score = 2;
                        }else if(retry_count==4){
                            score = 1;
                        }else{
                            score = 0;
                        }
                        $('#btn-save').prop('disabled', false);
                        $('#btn-reset').prop('disabled', false);
                        openConfirmDialog();
                    }
                });

                $('.input-invisible').on('keypress', function() {
                    $(this).css({
                        'color': '#6a6a6a',
                        'border-color': 'transparent'
                    });
                });


                $(document).on('click', '#btn-save', function() {
                    if (ok) {
                        

                        registerActivity(current_activity_id, score, next_route);
                    }
                });


                $(document).on('click', '#btn-reset', function() {
                    ok = false;
                    $('.input-invisible').css('border-color', '#000').val('');
                    resetActivity(current_activity_id);
                    closeConfirmDialog();
                });

                break;

            case 'act5':
                var oks = 0;
                var total_items = 12;
                var total_score = 0;

                if (complete) {
                    $('.item-img.correct').each(function() {
                        $(this).addClass('complete');
                    });

                    $('.item-img.wrong').find('.item-img-msg').show();
                    $('.item-img-hover').hide();
                }

                $(document).on('click', '.item-img.correct .btn-action-palm', function() {
                    var $item = $(this).closest('.item-img');
                    var retry_count = $item.data('retry');
                    if (retry_count == 0){
                        total_score += 5;
                    }else if(retry_count == 1){
                        total_score +=3;
                    }
                    modified = true;

                    $item.children('.item-img-hover').fadeOut(300, function() {
                        $item.addClass('complete');
                    });
                });

                $(document).on('click', '.item-img', function() {
                    oks++;
                    modified = true;

                    var clickcount = jQuery('.item-img-btn-lista.clicked').length;
                    var parentClass = jQuery('.row.gutters-10.imgs').parent().attr('class');

                    var parentId = jQuery('.row.gutters-10.imgs').parent().attr('id');
                    if (parentId == "#galeria-1") {
                        var totalimage = jQuery('#galeria-1').find('.row.gutters-10.imgs').find('.col-xs-4').length;
                    } else if (parentClass == "action-activity") {
                        var totalimage = jQuery('.action-activity').find('.row.gutters-10.imgs').find('.col-xs-4').length;
                    }

                    if (clickcount == totalimage) {
                        $('.item-img.correct').each(function() {
                            $(this).addClass('complete');
                        });

                        $('#btn-save').prop('disabled', false);
                        $('#btn-reset').prop('disabled', false);

                        setTimeout(function() {
                            openConfirmDialog();
                        }, 500);
                    }
                });

                $(document).on('click', '.item-img.correct .btn-action-delete, .item-img.wrong .btn-action-palm', function() {
                    var $item = $(this).closest('item-img');
                    var retry_count = $item.data('retry');
                    $(this).closest('.item-img').children('.item-img-tryagain').fadeIn();
                    $item.data('retry', retry_count + 1);
                });

                $(document).on('click', '#btn-save', function() {
                    if (oks >= total_items) {
                        registerActivity(current_activity_id, total_score/total_items, next_route);
                    }
                });

                $(document).on('click', '#btn-reset', function() {
                    oks = 0;

                    $('.item-img.correct').removeClass('complete');
                    jQuery('.item-img-btn-lista.clicked').removeClass('clicked');
                    $('.item-img.wrong').each(function() {
                        $(this).children('.item-img-hover').show();
                        $(this).children('.item-img-msg').hide();
                        $(this).data('retry', 0);
                    });

                    $('.item-img.correct').each(function() {
                        $(this).children('.item-img-hover').show();
                        $(this).data('retry', 0);
                    });

                    resetActivity(current_activity_id);
                    closeConfirmDialog();
                });
                
                break;

            case 'act6':
                var oks = 0;
                var total_items = 4;
                var total_score = 0;

                $('.item-txt-titulo, .btn-action-gallery').on('click', function() {
                    showSplash($(this).data('splash'));
                });

                if (complete) {
                    $('.item-perfumista').each(function() {
                        var $this = $(this);
                        var $img = $this.find('.item-perfumista-figure img');
                        $img.css('opacity', '1');
                        $this.find('.action-btn-gallery').hide();
                        $this.children('.item-txt-titulo')
                            .off('click')
                            .addClass('completado')
                            .text($img.attr('alt'));
                    });
                }

                $(document).on('click', '.item-nombre-btn', function(e) {
                    e.preventDefault();
                    modified = true;
                    var $btn = $(this);
                    var $item = $btn.closest('.splash-nombre-lista');
                    var retry_count = $item.data('retry');

                    if ($btn.data('result') === 'ok') {
                        oks++;
                        if (retry_count == 0){
                            total_score += 5;
                        }else if(retry_count == 1){
                            total_score +=3;
                        }
                        var $input = $($btn.data('ref') + ' .item-txt-titulo');
                        $input.addClass('completado').text($btn.data('value'));
                        $input.off('click');
                        closeSplash('#' + $btn.closest('.splash').attr('id'));
                    } else {
                        $btn.addClass('ko');
                        $item.data('retry', retry_count + 1);
                    }

                    if (oks >= total_items) {
                        $('#btn-save').prop('disabled', false);
                        $('#btn-reset').prop('disabled', false);

                        setTimeout(function() {
                            openConfirmDialog();
                        }, 1500);
                    }
                });

                $(document).on('click', '.btn-action-palm', function(e) {
                    e.preventDefault();
                    modified = true;
                    var $btn = $(this);
                    var $item = $btn.closest('.splash-galeria');
                    var retry_count = $item.data('retry');

                    if ($btn.data('result') === 'ok') {
                        oks++;
                        if (retry_count == 0){
                            total_score += 5;
                        }else if(retry_count == 1){
                            total_score +=3;
                        }
                        var ref = $btn.data('ref');
                        $(ref + ' .item-perfumista-figure .btn').hide();
                        closeSplash('#' + $btn.closest('.splash').attr('id'));
                        $(ref + ' .item-perfumista-figure img').delay(600).fadeTo('slow', 1);
                    } else {
                        $(this).closest('.splash-galeria-item').children('.item-img-tryagain').fadeIn();
                        $item.data('retry', retry_count + 1);
                    }

                    if (oks >= total_items) {
                        $('#btn-save').prop('disabled', false);
                        $('#btn-reset').prop('disabled', false);

                        setTimeout(function() {
                            openConfirmDialog();
                        }, 1500);
                    }
                });

                $(document).on('click', '.item-img-tryagain .btn', function() {
                    $(this).parent('.item-img-tryagain').fadeOut();
                    $(this).closest('.splash-galeria-item').find('.action-btn-palm').prop('disabled', true);
                });

                $(document).on('click', '#btn-save', function() {
                    if (oks >= total_items) {
                        registerActivity(current_activity_id, total_score/total_items, next_route);
                    }
                });

                $(document).on('click', '#btn-reset', function() {
                    oks = 0;
                    $('.item-txt-titulo').removeClass('completado').text('');
                    $('.item-nombre-btn').removeClass('ko');

                    $('.item-txt-titulo').on('click', function() {
                        showSplash($(this).data('splash'));
                    });

                    $('.item-perfumista-figure img').fadeTo('slow', 0, function() {
                        $('.item-perfumista-figure .btn').show();
                        $('.item-img-tryagain').hide();
                    });

                    $('.splash-nombre-lista').data('retry', 0);
                    $('.splash-galeria').data('retry', 0);

                    resetActivity(current_activity_id);
                    closeConfirmDialog();
                });

                break;

            case 'act7':

            case 'act10':

            case 'act17':

                var oks = 0;
                var oks_gal = 0;
                var total_score = 0;
                var total_items = 4;
                var tt_items = 0;

                if (complete) {
                    $('.galeria-container').addClass('solucionado');
                }

                if (activity == 'act7') {
                    tt_items = 24;

                    var player1 = document.getElementById("video1");
                    var player2 = document.getElementById("video2");

                    player1.onended =  function(data) {
                        closeSplash('#video-galeria-1');
                        $('html, body').scrollTop($('#act-galeria-1').offset().top - 60);
                    };

                    player2.onended = function(data) {
                        closeSplash('#video-galeria-3');
                        $('html, body').scrollTop($('#act-galeria-3').offset().top - 60);
                    };

                } else if (activity == 'act10') {

                    tt_items = 24;
                    var player1 = document.getElementById("video1");
                    var player2 = document.getElementById("video2");
                    var player3 = document.getElementById("video3");

                    player1.onended = function(data) {
                        closeSplash('#video-galeria-1');
                        $('html, body').scrollTop($('#act-galeria-1').offset().top - 60);
                    };

                    player2.onended = function(data) {
                        closeSplash('#video-galeria-2');
                        $('html, body').scrollTop($('#act-galeria-2').offset().top - 60);
                    };

                    player3.onended = function(data) {
                        closeSplash('#video-galeria-3');
                        $('html, body').scrollTop($('#act-galeria-3').offset().top - 60);
                    };

                } else if (activity == 'act17') {
                    tt_items = 27;
                    total_items = 3;
                }

                $('.galeria-action-btn').on('click', function(e) {
                    e.preventDefault();
                    oks_gal = 0

                    var $this = $(this);
                    var splashId = $this.data('galeria');

                    var top = 0;
                    $(splashId).css('top', top + 'px');

                    if ($('#galeria-overlay').length === 0) {
                        $('<div>', { id: 'galeria-overlay' }).appendTo('body');
                    }

                    $('#galeria-overlay').fadeIn(500, function() {
                        $(splashId).fadeIn(300, function() {
                            $('html, body').stop().animate({ scrollTop: top }, 700);
                        });
                    });
                });

                $(document).on('click', '.item-img-tryagain .btn', function() {
                    $(this).parent('.item-img-tryagain').fadeOut();
                    modified = true;
                });

                $(document).on('click', '.item-img.wrong .btn-action-delete', function() {
                    var $item = $(this).closest('.item-img');
                    var retry_count = $item.data('retry');

                    if (retry_count == 0){
                        total_score += 5;
                    }else if(retry_count == 1){
                        total_score +=3;
                    }
                    $(this).closest('.item-img').find('.item-img-msg').fadeIn();
                    modified = true;
                });

                $(document).on('click', '.item-img.correct .btn-action-palm', function() {
                    var $item = $(this).closest('.item-img');
                    var retry_count = $item.data('retry');

                    if (retry_count == 0){
                        total_score += 5;
                    }else if(retry_count == 1){
                        total_score +=3;
                    }
                    $item.children('.item-img-hover').fadeOut(300, function() {
                        $item.addClass('complete');
                    });

                    modified = true;
                });

                $(document).on('click', '.item-img.correct .btn-action-delete, .item-img.wrong .btn-action-palm', function() {
                    var $item = $(this).closest('.item-img');
                    var retry_count = $item.data('retry');
                    $(this).closest('.item-img').children('.item-img-tryagain').fadeIn();
                    $item.data('retry', retry_count + 1);
                });

                $(document).on('click', '.splash-close', function() {

                    var splashId = $(this).closest('.splash').attr('id');
                    var videoId = $(this).next().find('video').attr('id');
                    closeSplash('#' + splashId);
                    var top = 0;

                    if (videoId === 'video1') {
                        player1.pause();
                        top = $('#act-galeria-1').offset().top - 60;
                    } else if (activity === 'act7' && videoId === 'video2') {
                        player2.pause();
                        top = $('#act-galeria-3').offset().top - 60;
                    } else if (activity === 'act10' && videoId === 'video2') {
                        player2.pause();
                        top = $('#act-galeria-2').offset().top - 60;
                    } else if (activity === 'act10' && videoId === 'video3') {
                        player3.pause();
                        top = $('#act-galeria-3').offset().top - 60;
                    }

                    $('html, body').scrollTop(top);
                });

                $(document).on('click', '.solucion-video', function() {
                    var videoId = $(this).data('video');
                    showSplash(videoId);
                    if (videoId === '#video-galeria-1') {
                        player1.play();
                    } else if (videoId === '#video-galeria-2') {
                        player2.play();
                    } else if (videoId === '#video-galeria-3') {
                        player3.play();
                    }

                });

                $(document).on('click', '.item-img.wrong item-img correct', function() {
                    $(this).closest('.item-img').find('.item-img-msg').fadeIn();
                    modified = true;
                });

                $(document).on('click', '.item-img', function() {
                    var $galeria = $(this).closest('.galeria-splash');
                    var oks_gal_total = $galeria.data('oks');

                    oks_gal++;
                    modified = true;

                    var clickcount = jQuery('.item-img-btn-lista.clicked').length;

                    var totalimage = jQuery('#galeria-1').find('.row.gutters-10.imgs').find('.col-xs-4').length;

                    if (totalimage == clickcount) {
                        jQuery('.item-img-btn-lista').removeClass('clicked');
                        oks++;

                        var galeriaId = $galeria.attr('id');
                        var $galeriaContainer = $('#act-' + galeriaId);

                        $galeriaContainer.addClass('solucionado');

                        var videoId = '#video-' + galeriaId;

                        if (activity === 'act7') {
                            if (galeriaId === 'galeria-1') {
                                setTimeout(function() {
                                    showSplash(videoId);
                                    player1.play();
                                }, 1500);
                            } else if (galeriaId === 'galeria-3') {
                                setTimeout(function() {
                                    showSplash(videoId);
                                    player2.play();
                                }, 1500);
                            }
                        } else if (activity === 'act10') {
                            if (galeriaId === 'galeria-1') {
                                setTimeout(function() {
                                    showSplash(videoId);
                                    player1.play();
                                }, 1500);
                            } else if (galeriaId === 'galeria-2') {
                                setTimeout(function() {
                                    showSplash(videoId);
                                    player2.play();
                                }, 1500);
                            } else if (galeriaId === 'galeria-3') {
                                setTimeout(function() {
                                    showSplash(videoId);
                                    player3.play();
                                }, 1500);
                            }
                        }

                        if (clickcount = 9) {
                            $galeria.delay(1500).fadeOut(function() {
                                $('html, body').scrollTop($galeriaContainer.offset().top - 60);
                                $('#galeria-overlay').fadeOut(function() {
                                    $('#galeria-overlay').remove();
                                });
                            });
                        }
                    }

                    if (oks >= total_items) {
                        $('#btn-save').prop('disabled', false);
                        $('#btn-reset').prop('disabled', false);

                        setTimeout(openConfirmDialog, 3500);
                    }
                });

                $(document).on('click', '#btn-save', function() {
                    if (oks >= total_items) {
                        registerActivity(current_activity_id, total_score/tt_items, next_route);
                    }
                });

                $(document).on('click', '#btn-reset', function() {

                    oks = 0;
                    oks_gal = 0;
                    total_score = 0;

                    $('.item-img').removeClass('complete');
                    $('.item-img-hover').show();
                    $('.item-img-msg').hide();
                    $('.item-img-tryagain').hide();
                    $('.galeria-container').removeClass('solucionado');
                    $('.item-img').data('retry', 0);

                    resetActivity(current_activity_id);
                    closeConfirmDialog();
                });

                break;

            case 'act8':
                var oks = 0;
                var total_items = 7;
                var score = 0;
                var retry_count = 0;

                $(window).load(function() {
                    activityAnimation($('#img1'));
                });

                $(document).on('click', '.btn-concepto', function(e) {
                    e.preventDefault();
                    modified = true;
                    var $btn = $(this);

                    if ($btn.data('result') === 'ok') {
                        oks++;
                        $btn.addClass('ok');
                    } else {
                        $btn.addClass('ko');
                        retry_count++;
                    }

                    if (oks >= total_items) {
                        $('.btn-concepto[data-result="ko"]').addClass('ko');
                        $('#btn-save').prop('disabled', false);
                        $('#btn-reset').prop('disabled', false);
                        setTimeout(openConfirmDialog, 600);
                    }
                });

                $(document).on('click', '#btn-save', function() {
                    if (oks >= total_items) {
                        if (retry_count == 0){
                            score += 5;
                        }else if(retry_count == 1){
                            score +=3;
                        }
                        registerActivity(current_activity_id, score, next_route);
                    }
                });

                $(document).on('click', '#btn-reset', function() {
                    oks = 0;
                    score = 0;
                    retry_count = 0;
                    $('.btn-concepto').removeClass('ok')
                        .removeClass('ko');

                    resetActivity(current_activity_id);
                    closeConfirmDialog();
                });

                break;

            case 'act9':
                var oks = 0;
                var total_items = 2;
                var total_score = 0;
                
                $(window).load(function() {
                    activitySlider();
                });

                $('.item-txt-titulo, .btn-action-gallery').on('click', function() {
                    showSplash($(this).data('splash'));
                });

                if (complete) {
                    $('.item-perfumista').each(function() {
                        var $this = $(this);
                        var $img = $this.find('.item-perfumista-figure img');
                        $img.css('opacity', '1');
                        $this.find('.action-btn-gallery').hide();
                        $this.children('.item-txt-titulo')
                            .off('click')
                            .addClass('completado')
                            .text($img.attr('alt'));
                    });
                }

                $(document).on('click', '.item-nombre-btn', function(e) {
                    e.preventDefault();
                    modified = true;
                    var $btn = $(this);
                    var $item = $btn.closest('.splash-nombre-lista');
                    var retry_count = $item.data('retry');

                    if ($btn.data('result') === 'ok') {
                        oks++;
                        if (retry_count == 0){
                            total_score += 5;
                        }else if(retry_count == 1){
                            total_score +=3;
                        }
                        var $input = $($btn.data('ref') + ' .item-txt-titulo');
                        $input.addClass('completado').text($btn.data('value'));
                        $input.off('click');
                        closeSplash('#' + $btn.closest('.splash').attr('id'));
                    } else {
                        $btn.addClass('ko');
                        $item.data('retry', retry_count + 1);
                    }

                    if (oks >= total_items) {
                        $('#btn-save').prop('disabled', false);
                        $('#btn-reset').prop('disabled', false);

                        setTimeout(function() {
                            openConfirmDialog();
                        }, 1500);
                    }
                });

                $(document).on('click', '#btn-save', function() {
                    if (oks >= total_items) {
                        registerActivity(current_activity_id,  total_score/total_items, next_route);
                    }
                });

                $(document).on('click', '#btn-reset', function() {
                    oks = 0;
                    $('.item-txt-titulo').removeClass('completado').text('');
                    $('.item-nombre-btn').removeClass('ko');

                    $('.item-txt-titulo').on('click', function() {
                        showSplash($(this).data('splash'));
                    });

                    $('.item-perfumista-figure img').fadeTo('slow', 0, function() {
                        $('.item-perfumista-figure .btn').show();
                        $('.item-img-tryagain').hide();
                    });

                    $('.splash-nombre-lista').data('retry', 0);

                    resetActivity(current_activity_id);
                    closeConfirmDialog();
                });

                break;

            case 'act11':
                var oks = 0;
                var total_items = 7;
                var score = 0;
                var retry_count = 0;

                $(window).load(function() {
                    activityAnimation($('#img1'));
                });

                $(document).on('click', '.btn-concepto', function(e) {
                    e.preventDefault();
                    modified = true;
                    var $btn = $(this);

                    if ($btn.data('result') === 'ok') {
                        oks++;
                        $btn.addClass('ok');
                    } else {
                        $btn.addClass('ko');
                        retry_count++;
                    }

                    if (oks >= total_items) {
                        $('.btn-concepto[data-result="ko"]').addClass('ko');
                        $('#btn-save').prop('disabled', false);
                        $('#btn-reset').prop('disabled', false);
                        setTimeout(openConfirmDialog, 600);
                    }
                });

                $(document).on('click', '#btn-save', function() {
                    if (oks >= total_items) {
                        if (retry_count == 0){
                            score += 5;
                        }else if(retry_count == 1){
                            score +=3;
                        }
                        registerActivity(current_activity_id, score, next_route);
                    }
                });

                $(document).on('click', '#btn-reset', function() {
                    oks = 0;
                    retry_count = 0;
                    score = 0;
                    $('.btn-concepto').removeClass('ok')
                        .removeClass('ko');

                    resetActivity(current_activity_id);
                    closeConfirmDialog();
                });

                break;

            case 'act12':
                var oks = 0;
                var total_items = 9;
                var total_score = 0;

                if (activity === 'act2') {
                    var player = document.getElementById("video");

                    $(document).on('click', '.btn-action-video', function() {
                        player.play();
                    });

                    // player.on('play', function(data) {
                    //     $('.btn-action-video').fadeTo('slow', 0);
                    // });

                    // player.on('pause', function(data) {
                    //     $('.btn-action-video').fadeTo('slow', 1);
                    // });

                    player.onended = function(data) {
                        $('.btn-action-video').fadeTo('slow', 1);
                    };
                }
                
                $(document).on('click', '.item-img.correct .btn-action-palm', function() {
                    var $item = $(this).closest('.item-img');
                    var retry_count = $item.data('retry');
                    if (retry_count == 0){
                        total_score += 5;
                    }else if(retry_count == 1){
                        total_score +=3;
                    }

                    modified = true;

                    $item.children('.item-img-hover').fadeOut(300, function() {
                        $item.addClass('complete');
                        $item.find('.item-img-msg').show();
                    });
                });

                $(document).on('click', '.item-img.wrong .btn-action-delete', function() {
                    var $item = $(this).closest('.item-img');
                    var retry_count = $item.data('retry');

                    if (retry_count == 0){
                        total_score += 5;
                    }else if(retry_count == 1){
                        total_score +=3;
                    }

                    $item.children('.item-img-hover').fadeOut(300, function() {
                        $item.addClass('complete');
                        $item.find('.wrong-black-mask').show();
                    });
                });

                $(document).on('click', '.item-img.correct .btn-action-delete, .item-img.wrong .btn-action-palm', function() {
                    var $item = $(this).closest('.item-img');
                    var retry_count = $item.data('retry');
                    $item.children('.item-img-tryagain').fadeIn();
                    $item.data('retry', retry_count + 1);
                });

                $(document).on('click', '.item-img', function() {
                    oks++;
                    modified = true;

                    var clickcount = jQuery('.item-img-btn-lista.clicked').length;
                    var parentClass = jQuery('.row.gutters-10.imgs').parent().attr('class');

                    var parentId = jQuery('.row.gutters-10.imgs').parent().attr('id');
                    if (parentId == "#galeria-1") {
                        var totalimage = jQuery('#galeria-1').find('.row.gutters-10.imgs').find('.col-xs-4').length;
                    } else if (parentClass == "action-activity") {
                        var totalimage = jQuery('.action-activity').find('.row.gutters-10.imgs').find('.col-xs-4').length;
                    }

                    if (clickcount == totalimage) {
                        $('.item-img.correct').each(function() {
                            $(this).addClass('complete');
                        });

                        $('#btn-save').prop('disabled', false);
                        $('#btn-reset').prop('disabled', false);
                        setTimeout(function() {
                            openConfirmDialog();
                        }, 6000);
                    }
                });
                
                $(document).on('click', '#btn-save', function() {
                    if (oks >= total_items) {
                        registerActivity(current_activity_id, total_score/total_items, next_route);
                    }
                });

                $(document).on('click', '#btn-reset', function() {
                    oks = 0;

                    $('.item-img.correct').removeClass('complete');
                    $('.item-img.wrong').removeClass('complete');
                    $('.wrong-black-mask').hide();
                    jQuery('.item-img-btn-lista.clicked').removeClass('clicked');
                    $('.item-img.correct').each(function() {
                        $(this).children('.item-img-hover').show();
                        $(this).children('.item-img-msg').hide();
                        $(this).data('retry', 0);
                    });

                    $('.item-img.wrong').each(function() {
                        $(this).children('.item-img-hover').show();
                        $(this).data('retry', 0);
                    });

                    resetActivity(current_activity_id);
                    closeConfirmDialog();
                });

                break;

            case 'act13':
                var oks = 0;
                var total_items = 6;
                var current_partnum = 0;
                var total_partnum = 8;
                var total_score = 0;
                var tt_items = 36;

                $(document).on('click', '.item-img-tryagain .btn', function() {
                    $(this).parent('.item-img-tryagain').fadeOut();
                    modified = true;
                });

                $(document).on('click', '.item-img.correct .bbtn-action-delete', function() {
                    var $item = $(this).parents('.item-img');
                    $item.find('.item-img-tryagain').fadeIn();
                    modified = true;
                    $item.data('retry', $item.data('retry') + 1);
                });

                $(document).on('click', '.item-img.wrong .bbtn-action-palm', function() {
                    var $item = $(this).parents('.item-img');
                    $item.find('.item-img-tryagain').fadeIn();
                    modified = true;
                    $item.data('retry', $item.data('retry') + 1);
                });

                $(document).on('click', '.item-img.correct .bbtn-action-palm', function() {
                    oks++;
                    var part_div = $(this).parents('.banner-chapter');
                    var $item = $(this).parents('.item-img');
                    var retry_count = $item.data('retry');

                    if (retry_count == 0){
                        total_score += 5;
                    }

                    $item.find('.item-bottom-btn-list').hide();
                    $item.addClass('completed');

                    $item.find('.item-bottom-solution').addClass("palm");
                    $item.find('.item-bottom-solution').fadeIn(function() {
                        if (oks >= total_items) {
                            setTimeout(function() {
                                $item.parents('.banner-chapter').fadeOut(1000, function() {
                                    current_partnum++;
                                    continue_partActivity($item.parents('.banner-chapter').data('partnum') + 1);
                                    part_div.find('.item-img-mask').css("opacity", 1);
                                    part_div.find('.item-bottom-solution').hide();
                                    part_div.find('.item-bottom-btn-list').show();
                                    part_div.find('.col-xs-4').children('.item-img').removeClass('completed');
                                });
                            }, 6000);
                        }
                    });
                    modified = true;

                });

                $(document).on('click', '.item-img.wrong .bbtn-action-delete', function() {
                    oks++;
                    var part_div = $(this).parents('.banner-chapter');
                    var $item = $(this).parents('.item-img');
                    var retry_count = $item.data('retry');

                    if (retry_count == 0){
                        total_score += 5;
                    }

                    $item.find('.item-bottom-btn-list').hide();
                    $item.addClass('completed');
                    $item.find('.item-img-mask').animate({ opacity: '0.2' }, 500);
                    $item.find('.item-bottom-solution').addClass("delete");
                    $item.find('.item-bottom-solution').fadeIn(function() {
                        if (oks >= total_items) {
                            setTimeout(function() {
                                $item.parents('.banner-chapter').fadeOut(1000, function() {
                                    current_partnum++;
                                    continue_partActivity($item.parents('.banner-chapter').data('partnum') + 1);
                                    part_div.find('.item-img-mask').css("opacity", 1);
                                    part_div.find('.item-bottom-solution').hide();
                                    part_div.find('.item-bottom-btn-list').show();
                                    part_div.find('.col-xs-4').children('.item-img').removeClass('completed');
                                });
                            }, 6000);
                        }
                    });
                    modified = true;

                });

                $(".sample-item.drag").draggable();
                $('.banner-chapter').droppable(false);

                $(".banner-chapter").droppable({
                    drop: function(event, ui){

                    }
                });

                $(".item-bottom-btn-container").droppable({
                    drop: function(event, ui) {
                        var part_div = $(this).parents('.banner-chapter');
                        var dragElement = $(ui.draggable);
                        var dragParent = dragElement.closest('.sample-container');
                        var $item = $(this).parents('.item-img');
                        var retry_count = dragElement.data('retry');

                        dragElement.css({ "left": "0", "top": "0" });

                        if (dragElement.data('number') == $item.data('solution')) {
                            $(this).append(dragElement);
                            dragParent.append(dragElement.clone());
                            dragParent.find('.sample-item.drag').hide();
                            dragElement.draggable('disable');
                            dragParent.find('.sample-item.empty').show();
                            oks++;
                            
                            if (retry_count == 0){
                                total_score += 5;
                            }else if(retry_count == 1){
                                total_score +=3;
                            }

                        }else{
                            dragElement.data('retry', dragElement.data('retry') + 1);
                        }

                        if (oks >= total_items) {
                            total_items = 6;
                            oks = 0;
                            current_partnum++;


                            if (current_partnum >= total_partnum) {
                                $('#btn-save').prop('disabled', false);
                                $('#btn-reset').prop('disabled', false);
                                setTimeout(openConfirmDialog, 6000);
                                return;
                            }

                            setTimeout(function() {
                                $item.parents('.banner-chapter').fadeOut(1000, function() {
                                    $('#slide-container').show();
                                    tree_tree_slider_none_first();
                                    part_div.find('.item-bottom-btn-container > .sample-item.drag').remove();
                                    part_div.find('.sample-item.empty').hide();
                                    part_div.find('.sample-item.drag').show();
                                    part_div.find('.sample-item.drag').draggable();
                                });
                            }, 6000);

                        }
                    }
                });

                function continue_partActivity(part_number) {
                    $('.banner-chapter').eq(part_number).fadeIn(1000);
                    total_items = 3;
                    oks = 0;

                }

                $(document).on('click', '#btn-save', function() {
                    registerActivity(current_activity_id, total_score/tt_items, next_route);
                });

                $(document).on('click', '#btn-reset', function() {
                    $('#slide-container').find('.vegas').first().hide();
                    $('#slide-container').find('.vegas').last().after($('#slide-container').find('.vegas').first());
                    $("#slide-container").find(".vegas").first().show();
                    $('.banner-content-wrapper.hhtemp').show();
                    $('.banner-content-wrapper.hhtemp').find(".btn.btn-blanco").css("opacity", 0);
                    $(".banner-chapter").last().fadeOut(function() {
                        oks = 0;
                        current_partnum = 0;
                        $(".banner-chapter").hide();

                        $("#slide-container").fadeIn(function() {
                            auto_slide_after_start(2);
                        });
                    });
                    $('.item-img.correct').data('retry', 0);
                    $('.item-img.wrong').data('retry', 0);
                    $('.sample-item').data('retry', 0);
                    total_score = 0;
                });

                var player1 = document.getElementById("video1");
                var player2 = document.getElementById("video2");

                player1.onended = function(data) {
                    justclose_splash(1);
                };

                player2.onended = function(data) {
                    justclose_splash(2);
                };


                break;

            case 'act14':
                var oks = 0;
                var total_items = 4;
                var total_score = 0;
                var total_first_score = 0;
                var total_second_score = 0;
                var retry_first_count = 0;

                var sample_item0 = $('.sample-container').eq(0).find('.sample-item.drag');
                var sample_item1 = $('.sample-container').eq(1).find('.sample-item.drag');
                var sample_item2 = $('.sample-container').eq(2).find('.sample-item.drag');
                var sample_item3 = $('.sample-container').eq(3).find('.sample-item.drag');

                $(window).load(function() {
                    activityAnimation($('#img1'));
                });

                $(document).on('click', '.btn-concepto', function(e) {
                    e.preventDefault();
                    modified = true;
                    var $btn = $(this);

                    if ($btn.data('result') === 'ok') {
                        oks++;
                        $btn.addClass('ok');
                    } else {
                        retry_first_count++;
                        $btn.addClass('ko');
                    }

                    if (oks >= total_items) {
                        $('.btn-concepto[data-result="ko"]').addClass('ko');
                        oks = 0;
                        
                        if(retry_first_count == 0){
                            total_first_score += 5;
                        }else if(retry_first_count == 1){
                            total_first_score += 3;
                        }else if(retry_first_count == 2){
                            total_first_score += 1;
                        }

                        var banner_chapter = $(this).parents('.banner-chapter');
                        setTimeout(function() {
                            banner_chapter.fadeOut(function() {
                                $('.banner-chapter').eq(1).fadeIn();
                            });
                        }, 6000);

                    }
                });

                $(document).on('click', '#btn-save', function() {
                    if (oks >= total_items) {
                        if( feedbackable == true ){
                            registerActivity_without_next(current_activity_id, ( total_first_score + ( total_second_score / 4 )) / 2);
                            openFeedbackDialog();
                        }else{
                            registerActivity(current_activity_id, ( total_first_score + ( total_second_score / 4 )) / 2, next_route);
                        }

                    }
                });

                $(document).on('click', '.feedback-close-btn', function(){
                    window.location.href = next_route;
                });

                $(document).on('click', '#btn-reset', function() {
                    oks = 0;
                    $('.btn-concepto').removeClass('ok')
                        .removeClass('ko');

                    resetActivity(current_activity_id);
                    closeConfirmDialog();

                    var banner_chapter = $(this).parents('.banner-chapter');
                    banner_chapter.fadeOut(function() {
                        $('.banner-chapter').eq(0).fadeIn(function() {
                            banner_chapter.find('.item-img').children('.sample-item.drag').remove();
                            var default_child = "<div class=\"item-bottom-btn-container\"></div>";
                            banner_chapter.find('.item-img').append(default_child);

                            $('.sample-container').children('.sample-item.empty').hide();
                            $('.sample-container').eq(0).prepend($(sample_item0));
                            $('.sample-container').eq(1).prepend($(sample_item1));
                            $('.sample-container').eq(2).prepend($(sample_item2));
                            $('.sample-container').eq(3).prepend($(sample_item3));
                            $('.sample-item.drag').draggable();
                            init_drag_drop();
                        });
                    });

                    total_score = 0;
                    total_first_score = 0;
                    total_second_score = 0;
                    retry_first_count = 0;

                    $('.sample-item drag').data('retry', 0);
                });

                init_drag_drop();

                $(".banner-chapter").droppable({
                    drop: function(event, ui){

                    }
                });

                function init_drag_drop() {
                    $(".sample-item.drag").draggable();
                    $('.banner-chapter').droppable(false);
                    $(".item-bottom-btn-container").droppable({
                        drop: function(event, ui) {
                            var dragElement = $(ui.draggable);
                            var dragParent = dragElement.closest('.sample-container');
                            var $item = $(this).parents('.item-img');
                            var retry_count = dragElement.data('retry');

                            dragElement.css({ "left": "0", "top": "0" });

                            if (dragElement.data('number') == $item.data('solution')) {
                                $(this).remove();
                                $item.append(dragElement);
                                dragElement.draggable('disable');
                                dragParent.find('.sample-item.empty').show();
                                oks++;

                                if (retry_count == 0){
                                    total_second_score += 5;
                                }else if(retry_count == 1){
                                    total_second_score +=3;
                                }

                            }else{
                                dragElement.data('retry', dragElement.data('retry') + 1);
                            }

                            if (oks >= total_items) {
                                $('#btn-save').prop('disabled', false);
                                $('#btn-reset').prop('disabled', false);
                                setTimeout(openConfirmDialog, 6000);
                                return;
                            }
                        }
                    });
                }

                break;

            case 'act15':
                var oks = 0;
                var total_items = 12;
                var total_score = 0;

                if (complete) {
                    $('.item-img-tag').each(function() {
                        var $item = $(this);
                        var tag = $item.find('.item-img-btn[data-result="ok"]').data('value');
                        $item.find('.tag-ok').text(tag);
                        $('.item-img-tag-hover').hide();
                    });

                    $(document).on('click', '#btn-reset', function() {
                        oks = 0;
                        $('.tag-ok').text('#');
                        $('.item-img-tag-hover').show();
                        resetActivity(current_activity_id);
                    });
                }

                $(document).on('click', '.item-img-btn', function(e) {
                    e.preventDefault();
                    modified = true;

                    var $contenedor = $(this).closest('.item-img-tag');
                    var retry_count = $contenedor.data('retry');

                    if ($(this).data('result') === 'ok') {
                        oks++
                        $(this).closest('.item-img-tag-hover').hide();
                        $contenedor.find('.tag-ok').text($(this).data('value'));

                        if (retry_count == 0){
                            total_score += 5;
                        }else if(retry_count == 1){
                            total_score +=3;
                        }
                    } else {
                        $(this).addClass('ko');
                        $contenedor.data('retry', retry_count + 1);
                    }

                    if (oks >= total_items) {
                        $('#btn-save').prop('disabled', false);
                        $('#btn-reset').prop('disabled', false);

                        if (activity === 'act17') {
                            showSplash();
                            player.play();
                        } else {
                            openConfirmDialog();
                        }
                    }
                });

                $(document).on('click', '.splash-close', function() {
                    if (activity === 'act17') {
                        closeSplash();
                        player.pause();
                        openConfirmDialog();
                    }
                });

                $(document).on('click', '#btn-save', function() {
                    if (oks >= total_items) {
                        registerActivity(current_activity_id, total_score/total_items, next_route);
                    }
                });

                $(document).on('click', '#btn-reset', function() {
                    oks = 0;
                    $('.tag-ok').text('#');
                    $('.item-img-btn').removeClass('ko');
                    $('.item-img-tag-hover').show();

                    resetActivity(current_activity_id);
                    closeConfirmDialog();

                    $('.item-img-tag').each(function(){
                        $(this).data('retry', 0);
                    });
                });

                break;

            case 'act16':
                var oks = 0;
                var total_items = 4;
                var total_score = 0;

                $('.item-txt-titulo, .btn-action-gallery').on('click', function() {
                    showSplash($(this).data('splash'));
                });

                if (complete) {
                    $('.item-perfumista').each(function() {
                        var $this = $(this);
                        var $img = $this.find('.item-perfumista-figure img');
                        $img.css('opacity', '1');
                        $this.find('.action-btn-gallery').hide();
                        $this.children('.item-txt-titulo')
                            .off('click')
                            .addClass('completado')
                            .text($img.attr('alt'));
                    });
                }

                $(document).on('click', '.item-nombre-btn', function(e) {
                    e.preventDefault();
                    modified = true;
                    var $btn = $(this);
                    var $item = $btn.closest('.splash-nombre-lista');
                    var retry_count = $item.data('retry');

                    if ($btn.data('result') === 'ok') {
                        oks++;
                        if (retry_count == 0){
                            total_score += 5;
                        }else if(retry_count == 1){
                            total_score +=3;
                        }
                        var $input = $($btn.data('ref') + ' .item-txt-titulo');
                        $input.addClass('completado').text($btn.data('value'));
                        $input.off('click');
                        closeSplash('#' + $btn.closest('.splash').attr('id'));
                    } else {
                        $btn.addClass('ko');
                        $item.data('retry', retry_count + 1);
                    }

                    if (oks >= total_items) {
                        $('#btn-save').prop('disabled', false);
                        $('#btn-reset').prop('disabled', false);

                        setTimeout(function() {
                            openConfirmDialog();
                        }, 1500);
                    }
                });

                $(document).on('click', '.btn-action-palm', function(e) {
                    e.preventDefault();
                    modified = true;
                    var $btn = $(this);
                    var $item = $btn.closest('.splash-galeria');
                    var retry_count = $item.data('retry');

                    if ($btn.data('result') === 'ok') {
                        oks++;
                        if (retry_count == 0){
                            total_score += 5;
                        }else if(retry_count == 1){
                            total_score +=3;
                        }
                        var ref = $btn.data('ref');
                        $(ref + ' .item-perfumista-figure .btn').hide();
                        closeSplash('#' + $btn.closest('.splash').attr('id'));
                        $(ref + ' .item-perfumista-figure img').delay(600).fadeTo('slow', 1);
                    } else {
                        $(this).closest('.splash-galeria-item').children('.item-img-tryagain').fadeIn();
                        $item.data('retry', retry_count + 1);
                    }

                    if (oks >= total_items) {
                        $('#btn-save').prop('disabled', false);
                        $('#btn-reset').prop('disabled', false);

                        setTimeout(function() {
                            openConfirmDialog();
                        }, 1500);
                    }
                });

                $(document).on('click', '.item-img-tryagain .btn', function() {
                    $(this).parent('.item-img-tryagain').fadeOut();
                    $(this).closest('.splash-galeria-item').find('.action-btn-palm').prop('disabled', true);
                });

                $(document).on('click', '#btn-save', function() {
                    if (oks >= total_items) {
                        registerActivity(current_activity_id, total_score/total_items, next_route);
                    }
                });

                $(document).on('click', '#btn-reset', function() {
                    oks = 0;
                    $('.item-txt-titulo').removeClass('completado').text('');
                    $('.item-nombre-btn').removeClass('ko');

                    $('.item-txt-titulo').on('click', function() {
                        showSplash($(this).data('splash'));
                    });

                    $('.item-perfumista-figure img').fadeTo('slow', 0, function() {
                        $('.item-perfumista-figure .btn').show();
                        $('.item-img-tryagain').hide();
                    });

                    $('.splash-nombre-lista').data('retry', 0);
                    $('.splash-galeria').data('retry', 0);

                    resetActivity(current_activity_id);
                    closeConfirmDialog();
                });

                break;

            case 'act18':
                var oks = 0;
                var total_items = 7;
                var score = 0;
                var retry_count = 0;

                $(window).load(function() {
                    activityAnimation($('#img1'));
                });

                $(document).on('click', '.btn-concepto', function(e) {
                    e.preventDefault();
                    modified = true;
                    var $btn = $(this);

                    if ($btn.data('result') === 'ok') {
                        oks++;
                        $btn.addClass('ok');
                    } else {
                        $btn.addClass('ko');
                        retry_count++;
                        console.log();
                    }

                    if (oks >= total_items) {
                        $('.btn-concepto[data-result="ko"]').addClass('ko');
                        $('#btn-save').prop('disabled', false);
                        $('#btn-reset').prop('disabled', false);
                        setTimeout(openConfirmDialog, 600);
                    }
                });

                $(document).on('click', '#btn-save', function() {
                    if (oks >= total_items) {
                        if (retry_count == 0){
                            score += 5;
                        }else if(retry_count == 1){
                            score +=3;
                        }else if(retry_count == 2){
                            score +=1;
                        }
                        registerActivity(current_activity_id, score, next_route);
                    }
                });

                $(document).on('click', '#btn-reset', function() {
                    oks = 0;
                    score = 0;
                    retry_count = 0;
                    $('.btn-concepto').removeClass('ok')
                        .removeClass('ko');

                    resetActivity(current_activity_id);
                    closeConfirmDialog();
                });

                break;

            case 'act19':

                var oks = 0;
                var total_items = 9;
                var total_score = 0;

                var player = document.getElementById("video");

                player.onended = function(data) {
                    closeSplash();
                    openConfirmDialog();
                };

                if (complete) {
                    $('.item-img-tag').each(function() {
                        var $item = $(this);
                        var tag = $item.find('.item-img-btn[data-result="ok"]').data('value');
                        $item.find('.tag-ok').text(tag);
                        $('.item-img-tag-hover').hide();
                    });

                    $(document).on('click', '#btn-reset', function() {
                        oks = 0;
                        $('.tag-ok').text('#');
                        $('.item-img-tag-hover').show();

                        resetActivity(current_activity_id);
                    });
                }

                $(document).on('click', '.item-img-btn', function(e) {
                    e.preventDefault();
                    modified = true;

                    var $contenedor = $(this).closest('.item-img-tag');
                    var retry_count = $contenedor.data('retry');

                    if ($(this).data('result') === 'ok') {
                        oks++
                        $(this).closest('.item-img-tag-hover').hide();
                        $contenedor.find('.tag-ok').text($(this).data('value'));

                        if (retry_count == 0){
                            total_score += 5;
                        }else if(retry_count == 1){
                            total_score +=3;
                        }
                    } else {
                        $(this).addClass('ko');
                        $contenedor.data('retry', retry_count + 1);
                    }

                    if (oks >= total_items) {
                        showSplash();
                        player.play();

                        $('#btn-save').prop('disabled', false);
                        $('#btn-reset').prop('disabled', false);
                    }

                });

                $(document).on('click', '.splash-close', function() {
                    closeSplash();
                    player.pause();
                    openConfirmDialog();
                });

                $(document).on('click', '#btn-save', function() {
                    if (oks >= total_items) {
                        if( feedbackable == true ){
                            registerActivity_without_next(current_activity_id, total_score/total_items);
                            openFeedbackDialog();
                        }else{
                            registerActivity(current_activity_id, total_score/total_items, next_route);
                        }
                    }
                });

                $(document).on('click', '.feedback-close-btn', function(){
                    window.location.href = "/";
                });

                $(document).on('click', '#btn-reset', function() {
                    oks = 0;
                    $('.tag-ok').text('#');
                    $('.item-img-btn').removeClass('ko');
                    $('.item-img-tag-hover').show();

                    resetActivity(current_activity_id);
                    closeConfirmDialog();

                    $('.item-img-tag').each(function(){
                        $(this).data('retry', 0);
                    });
                });

                break;

            case 'act20':

                setTimeout(function(){
                    $('.mosaic-container').css('background-image', 'url("/assets/chapters/5.1/20/img/mosaic-banner.jpg")');
                }, 4000);

                $(document).on('click', '.mosaic-item.active', function(){
                    var mos_num = $(this).data('mos-num');
                    var next_mos_num = mos_num + 1;
                    var next_item = $('.mosaic-item[data-mos-num=' + next_mos_num + ']');

                    $(this).addClass('complete');
                    $(this).css('cursor', 'unset');

                    next_item.addClass('active');
                });




                break;
            
            

            case 'home5':

                var player = document.getElementById("video");

                $(document).on('click', '.action-btn-video', function() {
                    player.play();
                });

                // player.on('play', function(data) {
                //     $('.action-btn-video').fadeTo('slow', 0);
                // });

                // player.on('pause', function(data) {
                //     $('.action-btn-video').fadeTo('slow', 1);
                // });

                player.onended = function(data) {
                    $('.action-btn-video').fadeTo('slow', 1);
                };

                break;

        }

    };



    return {

        base: function() {
            if (typeof performance.navigation !== 'undefined') {
                if (performance.navigation.type === 2) {
                    location.reload(true);
                }
            }

            loadPage();

            $(document).ready(function() {
                initLogout();
                initMenu();
                initAnclas();
                initModal();
            });
        },

        home: function() {
            $(document).ready(function() {
                initReel();
            });
        },

        chapter_home: function(slides) {
            $(document).ready(function() {
                fijarAltoReel();

                if (arguments.length && $.isArray(slides)) {
                    initChapterReel(slides);
                }
            });

            $(window).on('resize', function() {
                fijarAltoReel();
            });
        },

        activity: function(current_activity_id, next_route, complete) {
            initActivity(current_activity_id, next_route, complete);
        },

        otherhome: function(home_id) {
            initHome(home_id);
        }
    };

}();


function tree_tree_slider() {
    $('#slide-container').find('.vegas').first().css("z-index", 2001);
    var secondslide = $("#slide-container").find(".vegas").eq(1);
    secondslide.css("z-index", 2000);
    secondslide.css("margin-top", "-" + $("#slide-container").height() + "px");
    secondslide.show();

    var bcwf_length = $("#slide-container").find('.vegas').eq(1).children(".banner-content-wrapper.fix").length;

    if (bcwf_length == 1) {
        var btnenter = $(".banner-content-wrapper.hhtemp").find(".btn.btn-blanco");
        btnenter.animate({ opacity: '1' });
    }

    $('#slide-container').find('.vegas').first().fadeOut(1000, function() {
        secondslide.css("margin-top", "0");
        $('#slide-container').find('.vegas').last().after($('#slide-container').find('.vegas').first());
        $('#slide-container').find('.vegas').last().hide();
    });
}

function tree_tree_slider_none_first() {
    $('#slide-container').find('.vegas').first().hide();
    $('#slide-container').find('.vegas').last().after($('#slide-container').find('.vegas').first());
    $('#slide-container').find('.vegas').first().fadeIn(1000);
}

function endSlide_toActivity(part_number) {
    $('#slide-container').fadeOut(1000, function() {
        $('.banner-chapter').eq(part_number).fadeIn(1000);
    });
}

function play_vimeo(num) {
    var splashvideo = $(".splash").find(".splash-video");

    splashvideo.css('max-width', $(window).height() * 16 / 9);
    $(window).on('resize', function() {
        splashvideo.css('max-width', $(window).height() * 16 / 9);
    });


    $('.vnum' + num).fadeIn(1000);
    var player = document.getElementById("video" + num);
    player.play();
}

function close_vimeo(num) {
    var player = document.getElementById("vimeo" + num);
    player.pause();

    $('.vimeo-container').eq(num - 1).fadeOut(function() {
        tree_tree_slider();
    });

}

function justclose_splash(num) {

    $('#slide-container').find('.vegas').first().hide();
    $('#slide-container').find('.vegas').last().after($('#slide-container').find('.vegas').first());
    $('#slide-container').find('.vegas').first().show();

    $('.vnum' + num).fadeOut(1000);

    var player = document.getElementById("video" + num);
    player.pause();
}

function stop_vimeo(num) {
    var player = document.getElementById("video" + num);
    player.pause();
}

var hhtemp = 0;

function auto_slide_after_start(count, frametime = 6000) {
    var slide_count = 0;
    var auto_slide_after_timer = setInterval(function() {
        if (count == 2) {
            hhtemp++;
        }
        slide_count++;
        tree_tree_slider();
        if (slide_count >= count) {
            clearInterval(auto_slide_after_timer);
        }
    }, frametime);
}

var auto_slide_first_timer;

function auto_slide_first_start(count) {
    var slide_count = 0;
    tree_tree_slider();
    auto_slide_first_timer = setInterval(function() {
        slide_count++;
        tree_tree_slider();
        if (slide_count >= count) {
            clearInterval(auto_slide_first_timer);
        }
    }, 8000);
}

function skip_auto_slide() {
    clearInterval(auto_slide_first_timer);

    var current_autoslide = $('#slide-container').find('.vegas').first();
    var current_autoslide_index = current_autoslide.data('index');

    var rest_auto_slides = $('#slide-container').find('.vegas.autoslide2').slice(0, 21 - current_autoslide_index);

    $('#slide-container').find('.vegas').last().after(rest_auto_slides);
    current_autoslide.css("z-index", 2001);
    current_autoslide.css("margin-top", "-" + $("#slide-container").height() + "px");

    var secondslide = $("#slide-container").find(".vegas").eq(0);
    secondslide.css("z-index", 2000);
    secondslide.show();

    current_autoslide.animate({
        opacity: '0',
    }, 1000, function() {
        $('#slide-container').find('.vegas.autoslide2').hide();
        current_autoslide.css("margin-top", "0");
        $('#slide-container').find('.vegas').removeProp('z-index');
        $('#slide-container').find('.vegas').css('opacity', 1);
    });
}

