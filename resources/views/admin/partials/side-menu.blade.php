<button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
    <i class="ion-close"></i>
</button>

<!-- LOGO -->
<div class="topbar-left">
    <div class="text-center">
        <!--<a href="index.html" class="logo">Admiry</a>-->
        <a href="/admin" class="logo"><img src="{{ asset('assets/img/logo-complete.png') }}" height="42" alt="logo"></a>
    </div>
</div>

<div class="sidebar-inner slimscrollleft">

    <div class="user-details">
        <div class="text-center">
            <img src="
            @if( Auth::guard('admin')->user()->avatar == null)
            /assets/img/no-image.png
            @else
            /storage/{{  Auth::guard('admin')->user()->avatar }}
            @endif
            " alt="" class="rounded-circle">
        </div>
        <div class="user-info">
            <h4 class="font-16">{{ Auth::guard('admin')->user()->name }}</h4>
            <span class="text-muted user-status"><i class="fa fa-dot-circle-o text-success"></i> Online</span>
        </div>
    </div>

    <div id="sidebar-menu">
        <ul>
            <li>
                <a href="/admin" class="waves-effect">
                    <i class="mdi mdi-view-dashboard"></i>
                    <span> Dashboard 
                        {{-- <span class="badge badge-primary pull-right">8</span> --}}
                    </span>
                </a>
            </li>

            @if(Auth::guard('admin')->user()->is_super == true)
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-location"></i> <span> Admin Management </span> </a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('admins.index') }}">Admins</a></li>
                        <li><a >Roles</a></li>
                    </ul>
                </li>
            @endif
            
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-multiple"></i> <span> User Management </span> </a>
                <ul class="list-unstyled">
                    <li><a href="{{ route('users.index') }}">Users</a></li>
                    <li><a href="{{ route('activities.index') }}">Activities</a></li>
                    <li><a href="#">Email Template</a></li>
                </ul>
            </li>
            
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i> <span> Newsletter </span> </a>
                <ul class="list-unstyled">
                    <li><a href="{{ route('newsletters.index') }}">Emails</a></li>
                    <li><a href="{{ route('messages.index') }}">Messages</a></li>
                </ul>
            </li>
            
            <!-- <li>
                <a href="{{ route('tracking.index') }}" class="waves-effect"><i class="mdi mdi-camcorder-box"></i> <span> Tracking </span> </a>
                <ul class="list-unstyled">
                </ul>
            </li> -->
            
            <li>
                {{-- <a href="/admin/redirectImageGallery" class="waves-effect"><i class="mdi mdi-folder-image"></i> <span> Image Gallery </span> </a> --}}
                <a href="https://cloud.chopardparfumstraining.com" class="waves-effect"><i class="mdi mdi-folder-image"></i> <span> Image Gallery </span> </a>
                <ul class="list-unstyled">
                </ul>
            </li>
            
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-elevation-rise"></i> <span> Satisfaction Survey </span> </a>
                <ul class="list-unstyled">
                    <li><a href="{{ route('feedbacks.index') }}">Feedback</a></li>
                </ul>
            </li>
            
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-numeric-8-box-multiple-outline"></i> <span> Scores & Rewards </span> </a>
                <ul class="list-unstyled">
                    <li><a href="{{ route('scores.index') }}">User Scores</a></li>
                    <li><a href="#">Rewards</a></li>
                </ul>
            </li>
            
            <li>
                <a href="{{ route('reports.index') }}" class="waves-effect"><i class="mdi mdi-message-outline"></i> <span> Reports </span> </a>
            </li>
            
            <li>
                <a href="{{ route('faqs.index') }}" class="waves-effect"><i class="mdi mdi-comment-question-outline"></i> <span> FAQs </span> </a>
            </li>

            <li>
                <a href="{{ route('notifications.index', ['field_name'=>'created_at', 'direction'=>'desc']) }}" class="waves-effect"><i class="mdi mdi-bell-outline"></i> <span> Notifications </span> </a>
            </li>


        </ul>
    </div>
    <div class="clearfix"></div>
</div> 