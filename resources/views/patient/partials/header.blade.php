<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container-fluid">
        <!-- Logo container-->
        <div>
            <a class="logo" href="index.html">
                <img src="{{ asset('frontend/images/logo-dark.png') }}" height="22" alt="">
            </a>
        </div>
        <!-- End Logo container-->
        <ul class="dropdowns list-inline mb-0">
            <li class="list-inline-item mb-0">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="btn btn-icon btn-pills btn-primary dropdown-toggle p-0"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="mdi mdi-phone icons"></i></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 py-0 text-center"
                        style="width: 200px;">
                        <a href="tel:018XXXXXXXX">018XXXXXXXX</a>
                    </div>
                </div>
            </li>

            <li class="list-inline-item mb-0 ms-1">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="btn btn-primary btn-sm">+ Appointment</button>
                    <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                        src="{{ asset('frontend/images/doctors/01.jpg') }}"
                        class="avatar avatar-ex-small rounded-circle" alt="">
                    </button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3"
                        style="min-width: 200px;">
                        <a class="dropdown-item d-flex align-items-center text-dark" href="doctor-profile.html">
                            <img src="{{ asset('frontend/images/doctors/01.jpg') }}"
                                class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                            <div class="flex-1 ms-2">
                                <span class="d-block mb-1">Calvin Carlo</span>
                                <small class="text-muted">Orthopedic</small>
                            </div>
                        </a>
                        <a class="dropdown-item text-dark" href="doctor-dashboard.html"><span
                                class="mb-0 d-inline-block me-1"><i
                                    class="uil uil-dashboard align-middle h6"></i></span> Dashboard</a>
                        <a class="dropdown-item text-dark" href="doctor-profile-setting.html"><span
                                class="mb-0 d-inline-block me-1"><i class="uil uil-setting align-middle h6"></i></span>
                            Profile Settings</a>
                        <div class="dropdown-divider border-top"></div>
                        <a class="dropdown-item text-dark" href="login.html"><span class="mb-0 d-inline-block me-1"><i
                                    class="uil uil-sign-out-alt align-middle h6"></i></span> Logout</a>
                    </div>
                </div>
            </li>
        </ul>
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-left">

                <li><a href="/" class="sub-menu-item">Home</a></li>

                <li><a href="#" class="sub-menu-item">Dashboard</a></li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">My Appointments</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="/all-appointments" class="sub-menu-item">All Appointments</a></li>
                        <li><a href="/make-new-appointment" class="sub-menu-item">Make New Appointment</a></li>
                    </ul>
                </li>

                <li><a href="#" class="sub-menu-item">My Payments</a></li>

                <li><a href="#" class="sub-menu-item">My Prescriptions</a></li>

            </ul>
            <!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->
</header>
<!--end header-->
<!-- Navbar End -->