<div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
    <!-- ============================================================== -->
    <!-- toggle and nav items -->
    <!-- ============================================================== -->
    <ul class="navbar-nav float-start me-auto">
        <li class="nav-item d-none d-lg-block"><a
                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
        <!-- ============================================================== -->
        {{-- <!-- create new -->
        <!-- ============================================================== -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </li>
        <!-- ============================================================== -->
        <!-- Search -->
        <!-- ============================================================== -->
        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                href="javascript:void(0)"><i class="ti-search"></i></a>
            <form class="app-search position-absolute">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                    class="srh-btn"><i class="ti-close"></i></a>
            </form>
        </li> --}}
    </ul>
    <!-- ============================================================== -->
    <!-- Right side toggle and nav items -->
    <!-- ============================================================== -->
    <ul class="navbar-nav float-end">
        <!-- ============================================================== -->
        <!-- Comment -->
        <!-- ============================================================== -->
        {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-account-circle font-24"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Log Out</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </li> --}}
        <!-- ============================================================== -->
        <!-- End Comment -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Messages -->
        <!-- ============================================================== -->
       
        <!-- ============================================================== -->
        <!-- End Messages -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- User profile and search -->
        <!-- ============================================================== -->
         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('assets/images/users/1.jpg ') }}"  alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user me-1 ms-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet me-1 ms-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email me-1 ms-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="ti-settings me-1 ms-1"></i> Account Setting</a> 
                                <div class="dropdown-divider"></div> -->
                                <div class="ps-4 p-10"><a href="/user-menu/edit/{{ Session::get('user_id') }}"
                                        class="btn btn-sm btn-primary btn-rounded text-white">View Profile</a></div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/login/out"><i
                                        class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                                
                                
                            </ul>
                        </li>
        {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="/login/out" id="navbarDropdown" role="button"  aria-expanded="false">
                 <img src="{{ asset('assets/images/users/1.jpg ') }}"  alt="user" class="rounded-circle" width="31"> 
                <i class="mdi mdi-account-remove font-24"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user me-1 ms-1"></i>
                    My Profile</a>
                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet me-1 ms-1"></i>
                    My Balance</a>
                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email me-1 ms-1"></i>
                    Inbox</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)"><i
                        class="ti-settings me-1 ms-1"></i> Account Setting</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)"><i
                        class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                <div class="dropdown-divider"></div>
                <div class="ps-4 p-10"><a href="javascript:void(0)"
                        class="btn btn-sm btn-info btn-rounded text-white">View Profile</a></div>
            </ul>
        </li> --}}
        <!-- ============================================================== -->
        <!-- User profile and search -->
        <!-- ============================================================== -->
    </ul>
</div>