<div class="topbar">

    <nav class="navbar-custom">

        <ul class="list-inline float-right mb-0">
            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect notif-link" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <i class="ion-ios7-bell noti-icon"></i>
                </a>
                <div class="notif-link-temp" style="display: none;">
                    <span class="badge badge-danger noti-icon-badge"></span>
                </div>
                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5>Notification</h5>
                    </div>

                    <div class="noti-message-container">
                    </div>

                    <div class="noti-message-container-temp" style="display:none;">
                        <a href="url" class="dropdown-item notify-item">
                            <div class="notify-icon bg-primary"></div>
                            <p class="notify-details"><b class="notify-title">Title</b><small class="text-muted">Message</small></p>
                        </a>
                    </div>

                    <!-- All-->
                    <a href="/admin/notifications" class="dropdown-item notify-item">
                        View All
                    </a>

                </div>
            </li>

            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <img src="
                    @if( Auth::guard('admin')->user()->avatar == null)
                    /assets/img/no-image.png
                    @else
                    /storage/{{  Auth::guard('admin')->user()->avatar }}
                    @endif
                    " alt="user" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                    <a class="dropdown-item" href="#"><span class="badge badge-success pull-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                    <a class="dropdown-item" href="#" onclick="to_logout()"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                      @push('scripts')
                        <script>
                            function to_logout(){
                                $('#logout-form').submit();
                            }
                        </script>
                      @endpush
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">{{ csrf_field() }}</form>
                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="list-inline-item">
                <button type="button" class="button-menu-mobile open-left waves-effect">
                    <i class="ion-navicon"></i>
                </button>
            </li>
            <li class="hide-phone list-inline-item app-search">
                <h3 class="page-title">{{ $title }}</h3>
            </li>
        </ul>

        <div class="clearfix"></div>

    </nav>

</div>