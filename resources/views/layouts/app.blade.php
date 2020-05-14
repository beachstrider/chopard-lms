<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-52661623-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-52661623-6');
</script>

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="Chopard Parfums Training is the beatiful Journey to have a full knowledge on Chopard.">

<title>Chopard Parfums :: Training Journey</title>

<link rel="shortcut icon" href="https://cloud.chopardparfumstraining.com/index.php/apps/theming/favicon?v=27">
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/vegas/vegas.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/wowjs/css/libs/animate.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:500i&display=swap" rel="stylesheet"> 

<link href="{{ asset('assets/css/main.css?v=1901091045') }}" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('assets/vendor/jquery-color/jquery.color.js') }}"></script>
<script src="{{ asset('assets/vendor/vegas/vegas.min.js') }}"></script>
<script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/vendor/vimeo/player.min.js') }}"></script>
<script src="{{ asset('assets/vendor/wowjs/dist/wow.js') }}"></script>

<script src="{{ asset('assets/js/main.js?v=1901091045') }}"></script>


<!--[if lt IE 9]>

<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->

<style>
.menu-offcanvas-item-title a {
    color: #000;
}
</style>

@stack('headscripts')

</head>

<body class="body-{{ $view_type }} preload">
<div id="preloader"><div class="circle"></div></div>

<header class="cabecera">
    <div class="container">
        <a href="{{ route('home') }}">
        <svg class="logo" role="img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 180 57">
            <path fill="#181817" d="M93.256,51.115h2.52c1.143,0,1.763,0.635,1.763,1.698c0,1.064-0.619,1.707-1.763,1.7h-1.755v2.35h-0.765 V51.115z M94.021,53.868h1.497c0.862,0.008,1.256-0.371,1.256-1.055c0-0.684-0.394-1.054-1.256-1.054h-1.497V53.868z M103.241,51.114h0.845l2.246,5.748h-0.845l-0.628-1.731h-2.431l-0.644,1.731h-0.789L103.241,51.114z M102.669,54.487h1.948 l-0.958-2.68h-0.016L102.669,54.487z M110.697,51.115h2.705c1.079,0,1.748,0.587,1.748,1.506c0,0.692-0.306,1.264-0.998,1.457v0.016 c0.668,0.129,0.805,0.62,0.861,1.184c0.049,0.564,0.017,1.191,0.338,1.585h-0.853c-0.218-0.234-0.097-0.853-0.209-1.417 c-0.081-0.564-0.218-1.038-0.959-1.038h-1.867v2.455h-0.766V51.115z M113.056,53.763c0.718,0,1.328-0.186,1.328-1.022 c0-0.564-0.305-0.982-1.022-0.982h-1.899v2.005H113.056z M120.014,56.863h0.765V54.23h2.641v-0.644h-2.641v-1.827h3.01v-0.644 h-3.776V56.863z M133.026,51.115h-0.765v3.671c0,1.015-0.531,1.57-1.497,1.57c-1.014,0-1.595-0.555-1.595-1.57v-3.671h-0.765v3.671 c0,1.53,0.878,2.215,2.359,2.215c1.433,0,2.263-0.765,2.263-2.215V51.115z M138.067,56.863h0.724V52.08h0.017l1.795,4.783h0.652 l1.795-4.783h0.016v4.783h0.724v-5.748h-1.047l-1.82,4.83l-1.811-4.83h-1.047V56.863z M152.914,52.797 c-0.048-1.264-0.942-1.82-2.117-1.82c-1.046,0-2.085,0.515-2.085,1.683c0,1.054,0.926,1.32,1.844,1.521 c0.917,0.202,1.835,0.339,1.835,1.128c0,0.83-0.765,1.047-1.457,1.047c-0.87,0-1.674-0.418-1.674-1.385h-0.725 c0,1.401,1.087,2.029,2.376,2.029c1.046,0,2.245-0.492,2.245-1.715c0-1.128-0.917-1.45-1.835-1.659 c-0.926-0.209-1.843-0.313-1.843-1.022c0-0.749,0.644-0.982,1.288-0.982c0.789,0,1.337,0.354,1.425,1.175H152.914z M152.212,39.446 c-3.318,3.856-7.488,6.467-9.252,5.275c-3.93-2.657,9.299-17.228,12.728-14.074C157.537,32.348,155.136,36.049,152.212,39.446 M114.733,38.62c-2.782,3.134-8.967,7.663-10.836,6.362c-3.863-2.689,9.713-16.779,13.499-14.428 C119.397,31.796,117.808,35.155,114.733,38.62 M75.606,34.995c-2.675-1.411-5.998,2.493-3.349,4.186 c-3.171,3.708-8.293,6.581-9.782,5.724c-4.348-2.507,7.616-14.761,12.241-14.644C77.653,30.334,76.376,33.695,75.606,34.995 M51.884,26.553c3.139-4.202,14.843-19.496,17.129-18.555C69.881,8.353,65.588,17.265,51.884,26.553 M21.901,24.046 C35.694,8.029,51.519,2.08,53.336,3.274C56.824,5.565,38.062,21.332,21.901,24.046 M176.676,6.25c0,0-18.952,26.204-19.123,26.386 c0.108-1.045-0.08-2.323-1.158-3.085c-5.49-3.883-13.644,5.659-15.555,8.202c-2.243,2.536-8.733,7.509-10.478,6.846 c-1.767-0.671,4.586-8.868,5.906-10.715c2.87-4.015,1.745-4.669-2.498-4.669c0.673-1.586,0.765-4.08-0.896-4.08 c-3.076,0-4.488,4.646-2.447,5.327c-1.967,5.415-12.966,15.367-14.931,14.365c-0.967-0.494,0.386-2.983,2.019-5.167 c3.518-4.704,7.853-10.444,7.853-10.444h-3.482c0,0-2.078,2.896-2.37,3.32c0.095-1.056-0.244-2.289-1.225-3.046 c-3.919-3.028-12.168,2.232-17.192,9.302c-1.171,1.59-8.252,6.334-9.368,5.691c-0.673-0.388,0.19-1.886,1.207-3.338 c1.271-1.815,2.938-3.854,4.25-5.75c1.148-1.661,2.649-3.751,2.649-4.999c0-0.895-0.576-1.75-2.279-1.75 c-2.323,0-7.354,3.548-8.066,4.183c0.722-0.865,9.646-12.626,9.646-12.626h-3.42C87.882,30.96,78.093,36.673,76.026,37.52 c1.011-1.287,2.804-4.7,1.542-6.969c-0.653-1.175-1.964-1.92-3.595-1.92c-3.07,0-7.62,1.709-13.826,9.049 c-1.025,1.327-7.532,7.287-9.001,6.777c-0.832-0.287-0.397-1.419,0.803-3.034c1.446-1.948,3.169-4.041,4.38-5.646 c2.564-3.394,2.636-5.053,2.061-6.039c-0.413-0.711-1.326-1.094-2.732-1.094c-2.608,0-6.646,2-7.874,3.063 c0,0,1.515-1.816,1.588-1.916c0.772-0.44,9.653-6.124,14.117-10.34c5.804-5.476,8.25-11.609,6.096-12.458 c-3.604-1.423-13.594,9.239-25.299,24.47c-2.451,1.513-4.946,3.049-7.578,4.347c1.09-1.441,4.269-8.116-0.519-10.294 c-4.486-2.043-13.722,3.801-17.323,11.064h0.907c3.608-6.575,13.526-12.257,16.237-9.433c1.795,1.87-0.836,8.079-5.585,12.234 c-5.388,4.716-11.669,5.945-14.569,4.623c-5.088-2.322,0.094-12.307,5.109-18.467c24.034-3.393,38.568-19.155,33.63-23.374 C51.569-0.424,31.877,4.21,16.87,24.63c-5.671,0.561-15.219-1.814-14.779-10.267C2.686,2.933,23.019-0.153,33.467,1.062l0.583-0.686 C18.531-1.554,0,4.011,0,15.453c0,7.013,7.083,10.44,16,10.44c-6.4,9.741-5.565,16.979-1.154,19.407 c5.25,2.888,13.974-0.007,20.553-7.756c2.159-0.889,4.322-2.205,6.926-3.684c-5.141,6.217-9.709,11.772-9.709,11.772h4.698 c0,0,4.472-6.899,9.712-11.66c2.526-2.297,5.264-3.786,7.428-4.014c1.291-0.135,1.263,1.2,0.023,2.832 c-2.041,2.689-4.115,5.405-5.659,7.492c-1.873,2.535-2.074,4.85-0.355,5.646c2.546,1.182,7.005-2.12,10.481-5.17 c-0.276,1.608,0.209,4.481,3.124,5.184c3.506,0.844,7.857-1.421,12.474-6.502c3.637-0.832,10.318-5.901,10.533-6.092 c-0.058,0.144-5.674,7.291-18.103,23.649c-0.001,0.007,3.535,0,3.535,0s12.471-15.97,12.48-15.959 c4.613-5.938,11.569-10.487,12.787-10.517c0.933-0.025-0.179,1.805-1.739,3.898c-1.728,2.319-3.513,4.653-4.548,6.174 c-1.473,2.161-2.252,4.608,0.061,5.452c2.895,1.057,10.165-4.382,10.858-4.954c-0.05,0.425-0.616,3.768,2.33,4.81 c4.035,1.427,9.307-3.207,9.307-3.207s-0.364,2.7,1.822,3.324c4.561,1.302,13.563-7.105,19.279-15.573 c1.947,0.012,1.192,1.053,0.838,1.677c-0.353,0.627-2.571,3.525-4.943,6.791c-2.372,3.265-3.427,6.257-0.46,7.133 c3.46,1.02,10.917-4.892,10.917-4.892c-0.449,2.538,0.507,3.973,2.063,4.682c3.208,1.461,8.348-2.285,9.062-2.869 c-0.163,0.543-0.289,2.674,1.262,3.082c5.553,1.46,15.366-10.953,15.366-10.953l-1.096-0.088c0,0-1.512,1.94-4.058,4.396 c-2.964,2.863-6.762,5.81-7.917,5.153c-0.901-0.513,1.65-4.52,3.123-6.586C158.534,36.237,180,6.25,180,6.25H176.676z"/>
        </svg>
        </a>

        <div class="cabecera-user">
            <a id="btn-logout" href="#" class="toolstop-ico logout-action" title="User logout"><img src="{{ asset('assets/img/ico-logout.png') }}" alt="User logout"></a>
            <a href="/account/basic" style="color: #000;"><span class="cabecera-user-name">&nbsp;{{ Auth::user()->name }}</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">{{ csrf_field() }}</form>
        </div>

        <div class="cabecera-tools">
            <a id="btn-menu-offcanvas" href="#" role="button"><img src="{{ asset('assets/img/ico-menu.png') }}" alt="Menu"></a>
        </div>
    </div>
</header>

@yield('content')

<div id="menu-offcanvas">
    <div id="scrollable-area">
        <div class="menu-offcanvas-top">
            <a id="btn-menu-offcanvas-close" href="#" role="button"><img src="{{ asset('assets/img/ico-menu.png') }}" alt="Close menu"></a>
            <img src="{{ asset('assets/img/logo-min.jpg') }}" class="menu-offcanvas-logo" alt="Chopard Parfums Logo">
        </div>

        <div class="menu-offcanvas-block">
            <h5 class="menu-offcanvas-block-title">@lang('Menu')</h5>
            <ul class="menu-offcanvas-lista">
            <li class="chapter">
                <div class="menu-offcanvas-item">
                    <div class="menu-offcanvas-item-title">
                       <a href="/chapter/1"> <span>1.</span> Chopard Maison</a>
                    </div>

                    <?php
                    $user_activities = Auth::user()->activities;
                    $userActivity = $user_activities->toArray();
                    $activityIdArray = array_column($userActivity, 'activity');
                    ?>
                    
                    <ul class="menu-offcanvas-sublista">
                        <li class="incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/1/1">Chopard core values</a></div>
                            <?php if (in_array("1", $activityIdArray)) 
                            { ?>
                            <a href="#" class="btn-reset-activity" data-reset-id="2" data-reset-route="/chapter/1/1" title="Reset activity">Reset</a>
                            <?php }else{ ?>
                            <a href="/chapter/1/1" class="btn-view-activity" data-view-id="2" data-reset-route="" title="View activity">View</a>
                           <?php } ?>
                        </li>

                        <li class="incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/1/2">Chopard assets</a></div>
                            <?php if (in_array("2", $activityIdArray)) 
                            { ?>
                                <a href="#" class="btn-reset-activity" data-reset-id="3" data-reset-route="/chapter/1/2" title="Reset activity">Reset</a>
                            <?php }else{ ?>
                            <a href="/chapter/1/2" class="btn-view-activity" data-view-id="3" data-reset-route="" title="View activity">View</a>
                           <?php } ?>
                        </li>
                    </ul>
                </div>
            </li>
            
            <li class="chapter">
                <div class="menu-offcanvas-item">
                    <div class="menu-offcanvas-item-title">
                       <a href="/chapter/2"> <span>2.</span> Universe of Chopard parfums</a>
                    </div>

                    <ul class="menu-offcanvas-sublista">
                        <li class="incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/2/3">Mission and values</a></div>
                            <?php if (in_array("3", $activityIdArray)) 
                            { ?>
                            <a href="#" class="btn-reset-activity" data-reset-id="5" data-reset-route="/chapter/2/3" title="Reset activity">Reset</a>
                            <?php }else{ ?>
                            <a href="/chapter/2/3" class="btn-view-activity" data-view-id="5" data-reset-route="" title="View activity">View</a>
                           <?php } ?>
                        </li>
                    
                        <li class="incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/2/4">Creative philosophy</a></div>
                            <?php if (in_array("4", $activityIdArray)) 
                            { ?>
                            <a href="/chapter/2/4" class="btn-reset-activity" data-reset-id="6" data-reset-route="/chapter/2/4" title="Reset activity">Reset</a>
                            <?php }else{ ?>
                            <a href="/chapter/2/4" class="btn-view-activity" data-view-id="6" data-reset-route="" title="View activity">View</a>
                           <?php } ?>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="chapter">
                <div class="menu-offcanvas-item">
                    <div class="menu-offcanvas-item-title">
                       <a href="/chapter/3"> <span>3.</span> Haute Parfumerie: Chopard collections</a>
                    </div>

                    <ul class="menu-offcanvas-sublista">
                        <li class="incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/3/5">Values & codes</a></div>
                            <?php if (in_array("5", $activityIdArray)) 
                            { ?>
                            <a href="/chapter/3/5" class="btn-reset-activity" data-reset-id="8" data-reset-route="/chapter/3/5" title="Reset activity">Reset</a>
                            <?php }else{ ?>
                            <a href="/chapter/3/5" class="btn-view-activity" data-view-id="8" data-reset-route="" title="View activity">View</a>
                           <?php } ?>
                        </li>
                        
                        <li class="subchapter incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/3.1"><span>3.1</span> Gardens of tropics</a></div>
                            <ul>
                                <li class="incompleted">
                                    <div class="menu-offcanvas-item-title"><a href="/chapter/3.1/6">Creative inspiration</a></div>
                                    <?php if (in_array("6", $activityIdArray)) 
                                    { ?>
                                    <a href="#" class="btn-reset-activity" data-reset-id="10" data-reset-route="/chapter/3.1/6" title="Reset activity">Reset</a>
                                    <?php }else{ ?>
                                    <a href="/chapter/3.1/6" class="btn-view-activity" data-view-id="10" data-reset-route="" title="View activity">View</a>
                                    <?php } ?>
                                </li>
                            
                                <li class="incompleted">
                                    <div class="menu-offcanvas-item-title"><a href="/chapter/3.1/7">Fragrances</a></div>
                                    <?php if (in_array("7", $activityIdArray)) 
                                    { ?>
                                    <a href="#" class="btn-reset-activity" data-reset-id="11" data-reset-route="/chapter/3.1/7" title="Reset activity">Reset</a>
                                    <?php }else{ ?>
                                    <a href="/chapter/3.1/7" class="btn-view-activity" data-view-id="11" data-reset-route="" title="View activity">View</a>
                                    <?php } ?>
                                </li>
                            
                                <li class="incompleted">
                                    <div class="menu-offcanvas-item-title"><a href="/chapter/3.1/8">Offer</a></div>
                                    <?php if (in_array("8", $activityIdArray)) 
                                    { ?>
                                    <a href="#" class="btn-reset-activity" data-reset-id="12" data-reset-route="/chapter/3.1/8" title="Reset activity">Reset</a>
                                     <?php }else{ ?>
                                    <a href="/chapter/3.1/8" class="btn-view-activity" data-view-id="12" data-reset-route="" title="View activity">View</a>
                                   <?php } ?>   
                                </li>
                            </ul>
                        </li>
                        
                        <li class="subchapter incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/3.2"><span>3.2</span> Gardens of paradise</a></div>
                            <ul>
                                <li class="incompleted">
                                    <div class="menu-offcanvas-item-title"><a href="/chapter/3.2/9">Creative inspiration</a></div>
                                    <?php if (in_array("9", $activityIdArray)) 
                                    { ?>
                                    <a href="#" class="btn-reset-activity" data-reset-id="14" data-reset-route="/chapter/3.2/9" title="Reset activity">Reset</a>
                                    <?php }else{ ?>
                                    <a href="/chapter/3.2/9" class="btn-view-activity" data-view-id="14" data-reset-route="" title="View activity">View</a>
                                   <?php } ?>
                                </li>
                            
                                <li class="incompleted">
                                    <div class="menu-offcanvas-item-title"><a href="/chapter/3.2/10">Fragrances</a></div>
                                    <?php if (in_array("10", $activityIdArray)) 
                                    { ?>
                                    <a href="#" class="btn-reset-activity" data-reset-id="15" data-reset-route="/chapter/3.2/10" title="Reset activity">Reset</a>
                                    <?php }else{ ?>
                                    <a href="/chapter/3.2/10" class="btn-view-activity" data-view-id="15" data-reset-route="" title="View activity">View</a>
                                   <?php } ?>
                                </li>

                                <li class="incompleted">
                                    <div class="menu-offcanvas-item-title"><a href="/chapter/3.2/11">Offer</a></div>
                                    <?php if (in_array("11", $activityIdArray)) 
                                    { ?>
                                    <a href="#" class="btn-reset-activity" data-reset-id="16" data-reset-route="/chapter/3.2/11" title="Reset activity">Reset</a>
                                    <?php }else{ ?>
                                    <a href="/chapter/3.2/11" class="btn-view-activity" data-view-id="16" data-reset-route="" title="View activity">View</a>
                                   <?php } ?>
                                </li>
                            </ul>
                        </li>
						
						<li class="subchapter incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/3.3"><span>3.3 </span>GARDENS OF KINGS</a></div>
                            <ul>
                                <li class="incompleted">
                                    <div class="menu-offcanvas-item-title"><a href="/chapter/3.3/12">Creative inspiration</a></div>
                                    <?php if (in_array("12", $activityIdArray)) 
                                    { ?>
                                    <a href="#" class="btn-reset-activity" data-reset-id="18" data-reset-route="/chapter/3.3/12" title="Reset activity">Reset</a>
                                    <?php }else{ ?>
                                    <a href="/chapter/3.3/12" class="btn-view-activity" data-view-id="18" data-reset-route="" title="View activity">View</a>
                                   <?php } ?>
                                </li>
                            
                                <li class="incompleted">
                                    <div class="menu-offcanvas-item-title"><a href="/chapter/3.3/13">Fragrances</a></div>
                                    <?php if (in_array("13", $activityIdArray)) 
                                    { ?>
                                    <a href="#" class="btn-reset-activity" data-reset-id="19" data-reset-route="/chapter/3.3/13" title="Reset activity">Reset</a>
                                    <?php }else{ ?>
                                    <a href="/chapter/3.3/13" class="btn-view-activity" data-view-id="19" data-reset-route="" title="View activity">View</a>
                                   <?php } ?>
                                </li>
                            
                                <li class="incompleted">
                                    <div class="menu-offcanvas-item-title"><a href="/chapter/3.3/14">Offer</a></div>
                                    <?php if (in_array("14", $activityIdArray)) 
                                    { ?>
                                    <a href="#" class="btn-reset-activity" data-reset-id="20" data-reset-route="/chapter/3.3/14" title="Reset activity">Reset</a>
                                    <?php }else{ ?>
                                    <a href="/chapter/3.3/14" class="btn-view-activity" data-view-id="20" data-reset-route="" title="View activity">View</a>
                                   <?php } ?>
                                </li>
                            </ul>
                        </li>

                        
                        <li class="subchapter incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/3.4"><span>3.4</span> Rose de Caroline</a></div>
                        </li>
						
						 <li class="subchapter incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/3.5"><span>3.5</span> Avant premiere exclusive editions</a></div>
                        </li>
                    </ul>
                </div>
            </li>
            
            <li class="chapter">
                <div class="menu-offcanvas-item">
                    <div class="menu-offcanvas-item-title">
                       <a href="/chapter/4"> <span>4.</span> Happy Chopard</a>
                    </div>
                    
                    <ul class="menu-offcanvas-sublista">
                        <li class="incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/4/15">Values</a></div>
                            <?php if (in_array("15", $activityIdArray)) 
                            { ?>
                            <a href="#" class="btn-reset-activity" data-reset-id="24" data-reset-route="/chapter/4/15" title="Reset activity">Reset</a>
                            <?php }else{ ?>
                            <a href="/chapter/4/15" class="btn-view-activity" data-view-id="24" data-reset-route="" title="View activity">View</a>
                           <?php } ?>
                        </li>
                    
                        <li class="incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/4/16">Olfactive creation</a></div>
                            <?php if (in_array("16", $activityIdArray)) 
                            { ?>
                            <a href="#" class="btn-reset-activity" data-reset-id="25" data-reset-route="/chapter/4/16" title="Reset activity">Reset</a>
                            <?php }else{ ?>
                            <a href="/chapter/4/16" class="btn-view-activity" data-view-id="25" data-reset-route="" title="View activity">View</a>
                           <?php } ?>
                        </li>
                    
                        <li class="incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/4/17">Fragrances</a></div>
                            <?php if (in_array("17", $activityIdArray)) 
                            { ?>
                            <a href="#" class="btn-reset-activity" data-reset-id="26" data-reset-route="/chapter/4/17" title="Reset activity">Reset</a>
                            <?php }else{ ?>
                            <a href="/chapter/4/17" class="btn-view-activity" data-view-id="26" data-reset-route="" title="View activity">View</a>
                           <?php } ?>
                        </li>
                    
                        <li class="incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/4/18">Offer</a></div>
                            <?php if (in_array("18", $activityIdArray)) 
                            { ?>
                            <a href="#" class="btn-reset-activity" data-reset-id="27" data-reset-route="18" title="Reset activity">Reset</a>
                            <?php }else{ ?>
                            <a href="/chapter/4/18" class="btn-view-activity" data-view-id="27" title="View activity">View</a>
                           <?php } ?>
                        </li>
                    
                        <li class="incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/4/19">Advertising campaign</a></div>
                            <?php if (in_array("19", $activityIdArray)) 
                            { ?>
                            <a href="#" class="btn-reset-activity" data-reset-id="28" data-reset-route="/chapter/4/19" title="Reset activity">Reset</a>
                            <?php }else{ ?>
                            <a href="/chapter/4/19" class="btn-view-activity" data-view-id="28" data-reset-route="" title="View activity">View</a>
                           <?php } ?>
                        </li>
                    </ul>
                </div>
            </li>
            
            <li class="chapter">
                <div class="menu-offcanvas-item">
                    <div class="menu-offcanvas-item-title">
                       <a href="/chapter/5.1"> <span>5.</span> Signature fragrances</a>
                    </div>

                    <ul class="menu-offcanvas-sublista">                        
                        <li class="subchapter incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/5.1"><span>5.1</span> Love Chopard</a></div>
                        </li>
                        
                        <li class="subchapter incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/5.2"><span>5.2</span> Malaki Collection</a></div>
                        </li>
						
						<li class="subchapter incompleted">
                            <div class="menu-offcanvas-item-title"><a href="/chapter/5.3"><span>5.3</span> 1000 Miglia Collection</a></div>
                        </li>
                    </ul>
                </div>
            </li>
            
            <li class="chapter">
                <div class="menu-offcanvas-item">
                    <div class="menu-offcanvas-item-title">
                       <a href="/chapter/6"> <span>6.</span> Legacy Fragrances</a>
                    </div>
                </div>
            </li>
            
            <li class="link"><a href="#" class="menu-offcanvas-item-title">Score &amp; ranking</a></li>
            </ul>
        </div>

        <div class="menu-offcanvas-block">
            <h5 class="menu-offcanvas-block-title">@lang('Tools')</h5>
            <ul class="menu-offcanvas-lista">
                <li class="link"><a href="{{ route('home') }}" class="menu-offcanvas-item-title">@lang('How does it work')</a></li>
                <li class="link"><a href="#" class="menu-offcanvas-item-title modal-open offcanvas-close" data-modal="#reference-library">@lang("Reference materials' library")</a></li>
                <li class="link"><a href="{{ route('password.request') }}" class="menu-offcanvas-item-title">@lang("Change your password")</a></li>
                <li class="link"><a href="#" id="reset-all" class="menu-offcanvas-item-title">@lang("Reset all")</a></li>
            </ul>
        </div>
    </div>
</div>

<div id="confirm-reset" class="modal-box">
    <div class="confirm-content">
        <h1 class="confirm-title">@lang('Caution')</h1>
        <p>@lang('Confirm that you want to reset all activities')</p>
        <div class="confirm-buttons">
            <button id="btn-reset-activities" type="button" class="btn btn-default">@lang('Confirm')</button>
            <button id="btn-cancel-reset-activities" type="button" class="btn btn-default">@lang('Cancel')</button>
        </div>
    </div>
</div>

<div id="confirm-reset-activity" class="modal-box">
    <div class="confirm-content">
        <h1 class="confirm-title">@lang('Caution')</h1>
        <p>@lang('Confirm that you want reset and perform the activity again')</p>
        <div class="confirm-buttons">
            <button id="btn-confirm-reset-activity" type="button" class="btn btn-default">@lang('Confirm')</button>
            <button id="btn-cancel-reset-activity" type="button" class="btn btn-default">@lang('Cancel')</button>
        </div>
    </div>
</div>

@if( isset($askprofiling) )
<div id="caution-complete-profile" class="modal-box" style="display: block;">
    <div class="confirm-content">
        <h1 class="confirm-title">@lang('Caution')</h1>
        <p>@lang('You haven\'t completed your profile yet. <br>Please input all information in order to enjoy full activities.')</p>
        <div class="confirm-buttons">
            <a href="/account/basic" id="btn-confirm-reset-activity" type="button" class="btn btn-default">@lang('Go to complete')</a>
            <button id="btn-cancel-reset-activity" type="button" class="btn btn-default" onclick="$('#caution-complete-profile').hide();">@lang('Cancel')</button>
        </div>
    </div>
</div>
@endif

<div id="feedback-dialog" class="modal-box">
    <div class="confirm-content-feedback">
        <div class="feedback-logo-div">
            <img src="/assets/img/mail/golden_logo.png">
        </div>
        <form id="feedback-form" action="/feedback" method="post">
            <h1 class="confirm-title" style="margin-bottom: -10px;">@lang('Leave Your Feedback')</h1>
            <p>@lang('1. How successful this e-learning was in improving your knowledge of Chopard Parfums ?')</p>
            <div class="rate-container" data-rate="0">
                <div class="rate-item" data-rate_val="1"></div>
                <div class="rate-item" data-rate_val="2"></div>
                <div class="rate-item" data-rate_val="3"></div>
                <div class="rate-item" data-rate_val="4"></div>
                <div class="rate-item" data-rate_val="5"></div>
                <input id="knowledge" type="text" class="form-control feed-input readonly" name="knowledge" value="" required>
            </div>
            <p>@lang('2. How much this e-learning answered to your expectations ?')</p>
            <div class="rate-container" data-rate="0">
                <div class="rate-item" data-rate_val="1"></div>
                <div class="rate-item" data-rate_val="2"></div>
                <div class="rate-item" data-rate_val="3"></div>
                <div class="rate-item" data-rate_val="4"></div>
                <div class="rate-item" data-rate_val="5"></div>
                <input id="answering" type="text" class="form-control feed-input readonly" name="answering" value="" required>
            </div>
            <p>@lang('3. How much you enjoyed this e-learning ?')</p>
            <div class="rate-container" data-rate="0">
                <div class="rate-item" data-rate_val="1"></div>
                <div class="rate-item" data-rate_val="2"></div>
                <div class="rate-item" data-rate_val="3"></div>
                <div class="rate-item" data-rate_val="4"></div>
                <div class="rate-item" data-rate_val="5"></div>
                <input id="enjoying" type="text" class="form-control feed-input readonly" name="enjoying" value="" required>
            </div>
            <p>@lang('4. How is the quality of this e-learning ?')</p>
            <div class="rate-container" data-rate="0">
                <div class="rate-item" data-rate_val="1"></div>
                <div class="rate-item" data-rate_val="2"></div>
                <div class="rate-item" data-rate_val="3"></div>
                <div class="rate-item" data-rate_val="4"></div>
                <div class="rate-item" data-rate_val="5"></div>
                <input id="quality" type="text" class="form-control feed-input readonly" name="quality" value="" required>
            </div>
            <p>@lang('5. If you have any other feedback, please tell us here. We love to improve our service.')</p>
            <textarea id="description" class="form-control"></textarea>
            <div class="confirm-buttons feedbb">
                <button id="btn-leave-feedback" type="submit" class="btn btn-default">@lang('Send')</button>
            </div>
        </form>
        <div class="feedback-thanks">
            <p style="font-size: 20px; line-height: 30px;">@lang('YOUR FEEDBACK HAS BEEN LEFT. THANK YOU.')</p>
            <p style="margin-bottom: -40px;">Chopard Parfums Training Team</p>
            <div class="confirm-buttons">
                <button type="button" class="btn btn-default feedback-close-btn" onclick="">@lang('Close')</button>
            </div>
        </div>
    </div>
</div>

<div id="reference-library" class="modal-box">
    <div class="modal-content">
        <button type="button" class="modal-close" aria-label="Close"><span aria-hidden="true">×</span></button>
        <img src="{{ asset('assets/img/logo-complete.png') }}" alt="Chopard Parfums Library" class="img-responsive reference-library-logo">
        <h2 class="modal-title">@lang('Library')</h2>
        <div class="library-items">
            <a href="{{ route('material', ['chapter' => 1]) }}" target="_blank">
                <figure>
                    <img src="{{ asset('assets/library/01.jpg') }}" alt="Chapter 1">
                    <figcaption>@lang('Chopard Maison')</figcaption>
                </figure>
            </a>
            <a href="{{ route('material', ['chapter' => 2]) }}" target="_blank">
                <figure>
                    <img src="{{ asset('assets/library/02.jpg') }}" alt="Chapter 2">
                    <figcaption>@lang('Universe of Chopard parfums')</figcaption>
                </figure>
            </a>

            <a href="{{ route('material', ['chapter' => 3]) }}" target="_blank">
                <figure>
                    <img src="{{ asset('assets/library/03.jpg') }}" alt="Chapter 3">
                    <figcaption>@lang('Collection Chopard')</figcaption>
                </figure>
            </a>

            <a href="{{ route('material', ['chapter' => 3.1]) }}" target="_blank">
                <figure>
                    <img src="{{ asset('assets/library/04.jpg') }}" alt="Chapter 3.1">
                    <figcaption>@lang('Gardens of tropics')</figcaption>
                </figure>
            </a>

            <a href="{{ route('material', ['chapter' => 3.2]) }}" target="_blank">
                <figure>
                    <img src="{{ asset('assets/library/05.jpg') }}" alt="Chapter 3.2">
                    <figcaption>@lang('Gardens of paradise')</figcaption>
                </figure>
            </a>

            <a href="{{ route('material', ['chapter' => 3.3]) }}" target="_blank">
                <figure>
                    <img src="{{ asset('assets/library/06.jpg') }}" alt="Chapter 3.3">
                    <figcaption>@lang('Gardens of kings')</figcaption>
                </figure>
            </a>

            <a href="{{ route('material', ['chapter' => 3.4]) }}" target="_blank">
                <figure>
                    <img src="{{ asset('assets/library/08.jpg') }}" alt="Chapter 3.4">
                    <figcaption>@lang('Jewel of perfumery')</figcaption>
                </figure>
            </a>           

			<a href="{{ route('material', ['chapter' => 3.5]) }}" target="_blank">
                <figure>
                    <img src="{{ asset('assets/library/09.jpg') }}" alt="Chapter 3.5">
                    <figcaption>@lang('Avant premiere exclusive editions')</figcaption>
                </figure>
            </a>			

            <a href="{{ route('material', ['chapter' => 4]) }}" target="_blank">
                <figure>
                    <img src="{{ asset('assets/library/07.jpg') }}" alt="Chapter 4">
                    <figcaption>@lang('Happy chopard collection')</figcaption>
                </figure>
            </a>

            <a href="{{ route('material', ['chapter' => 5]) }}" target="_blank">
                <figure>
                    <img src="{{ asset('assets/library/10.jpg') }}" alt="Chapter 5">
                    <figcaption>@lang('Chopard signature fragrances')</figcaption>
                </figure>
            </a>

            <a href="{{ route('material', ['chapter' => 5.1]) }}" target="_blank">
                <figure>
                    <img src="{{ asset('assets/library/11.jpg') }}" alt="Chapter 5.1">
                    <figcaption>@lang('Love chopard')</figcaption>
                </figure>
            </a>

            <a href="{{ route('material', ['chapter' => 6]) }}" target="_blank">
                <figure>
                    <img src="{{ asset('assets/library/20.jpg') }}" alt="Chapter 6">
                    <figcaption>@lang('Chopard legacy fragrances')</figcaption>
                </figure>
            </a>
        </div>
    </div>
</div>

<footer class="pie">
    <img src="{{ asset('assets/img/footer-claim.gif') }}" alt="The Chopard parfums training journey" class="img-responsive pie-claim">
</footer>

<script>

window.token = "{{ csrf_token() }}";

window.base_url = "{{ route('home') }}";

window.register_url = "{{ route('chapter.register') }}";

window.reset_url = "{{ route('chapter.reset') }}";

window.feedbackable = "@if(isset($feedbackable)) {{ $feedbackable }} @else {{ false }} @endif";

@stack('scripts')

</script>

</body>

</html>