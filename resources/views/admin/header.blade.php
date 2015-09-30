<div class="header navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="/">
                <img src="assets/admin/image/logo.png" alt="logo"/>
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:void(0);" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <img src="assets/admin/image/menu-toggler.png" alt="" />
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <ul class="nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <li class="dropdown" id="header_notification_bar">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-warning-sign"></i>
                        <span class="badge"></span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <li>
                            <p id="notice_title"></p>
                        </li>
                        <li class="external">
                            {{--asx:设置notice message task的route href--}}
                            <a href="#">See all notifications <i class="m-icon-swapright"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- END NOTIFICATION DROPDOWN -->
                <!-- BEGIN INBOX DROPDOWN -->
                <li class="dropdown" id="header_inbox_bar">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-envelope"></i>
                        <span class="badge"></span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <li>
                            <p id="message_title"></p>
                        </li>
                        <li class="external">
                            {{--asx:设置notice message task的route href--}}
                            <a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- END INBOX DROPDOWN -->
                <!-- BEGIN TASK DROPDOWN -->
                <li class="dropdown" id="header_task_bar">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-tasks"></i>
                        <span class="badge"></span>
                    </a>
                    <ul class="dropdown-menu extended tasks">
                        <li>
                            <p id="task_title"></p>
                        </li>
                        <li class="external">
                            {{--asx:设置notice message task的route href--}}
                            <a href="#">See all tasks <i class="m-icon-swapright"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- END TASK DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown user">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        <img alt="" height="29" width="29" src="{{ $me['photo'] }}" />
                        <span class="username">{{ $me['username'] }}</span>
                        <i class="icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>
                        <li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
                        <li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>
                        <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
                        <li class="divider"></li>
                        <li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li>
                        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->