<header class="app-header top-bar">
    <!-- begin navbar -->
    <nav class="navbar navbar-expand-md">

        <!-- begin navbar-header -->
        <div class="navbar-header d-flex align-items-center">
            <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
            <a class="navbar-brand" href="{{ route('admin.home') }}">
                {{-- <img src="back/img/logo.png" class="img-fluid logo-desktop" alt="logo" />
                <img src="back/img/logo-icon.png" class="img-fluid logo-mobile" alt="logo" /> --}}
                My School Guide
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti ti-align-left"></i>
        </button>
        <!-- end navbar-header -->
        <!-- begin navigation -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navigation d-flex">

                <ul class="navbar-nav nav-right ml-auto">
                    <li class="nav-item dropdown user-profile">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('back/img/avtar/02.jpg') }}" alt="avtar-img">
                        </a>
                        <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                            <div class="bg-gradient px-4 py-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="mr-1">
                                        <h4 class="text-white mb-0">{{ ucfirst(auth('admin')->user()->full_name) }}</h4>
                                        <small class="text-white">{{ auth('admin')->user()->email }}</small>
                                    </div>
                                    <a href="{{ route('admin.logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                        class="text-white font-20 tooltip-wrapper" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Logout">
                                        <i class="zmdi zmdi-power"></i>
                                    </a>

                                    <form action="{{ route('admin.logout') }}" method="post" class="d-none"
                                        id="logout-form">@csrf</form>
                                </div>
                            </div>
                            <div class="p-4">
                                <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                    <i class="fa fa-user pr-2 text-success"></i> Profile</a>
                                <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                    <i class=" ti ti-settings pr-2 text-info"></i> Settings
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end navigation -->
    </nav>
    <!-- end navbar -->
</header>
