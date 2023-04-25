<!DOCTYPE html>
<html>

<head>
    <!-- Info Dasar Halaman -->
    <meta charset="utf-8">
    <title>Bursatana | {{ $title }}</title>
    <!-- Icon Website -->
    {{-- <link rel="icon" type="image/png" sizes="36x36" href="/vendors/images/logo-bursatana.png"> --}}

    <!-- Spesifikasi Meta Mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/vendors/styles/style.css">

</head>

<body>
    <div class="main-container">
        <div class="header header-dark">
            <div class="header-left">
                <div class="menu-icon dw dw-menu"></div>
                <div class="image">
                    <a href="/user/dashboard">
                        <img src="\vendors\images\logo-bursatana.png" width="40" height="40" alt="/dashboard">
                    </a>
                </div>
            </div>

            <div class="header-right">
                <div class="user-info-dropdown">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <span class="user-icon">
                                <img src="/vendors/images/user.png" alt="">
                            </span>
                            <span class="user-name">Lorem Ipsum</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="profile.html"><i class="dw dw-user3"></i> Profile</a>
                            <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                            <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                            <a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="left-side-bar">
            <div class="brand-logo">
                <a href="/user/dashboard">
                    <img src="/vendors/images/logo2-bursatana.png">
                </a>
                <div class="close-sidebar" data-toggle="left-sidebar-close">
                    <i class="ion-close-round"></i>
                </div>
            </div>
            <div class="sidebar-menu icon-list-style-5">
                <div class="menu-block customscroll">
                    <ul id="accordion-menu">
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                            </a>
                            <ul class="submenu">
                                <li><a class="nav-link {{ $title === 'Dashboard' ? 'active' : '' }}"
                                        href="/user/dashboard">Dashboard</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-analytics-3"></span><span class="mtext">My
                                    Investment</span>
                            </a>
                            <ul class="submenu">
                                <li><a class="nav-link {{ $title === 'Portofolio' ? 'active' : '' }}"
                                        href="/user/portofolio">Portofolio</a></li>
                                <li><a class="nav-link {{ $title === 'Order' ? 'active' : '' }}"
                                        href="/user/order">Order
                                        Saham</a></li>
                                <li><a class="nav-link {{ $title === 'Penarikan' ? 'active' : '' }}"
                                        href="/user/penarikan">Penarikan</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a href="/faq" target="_blank" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-help"></span>
                                <span class="mtext">FAQ</span>
                            </a>
                        </li>
                        <li>
                            <a href="/about" target="_blank" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-pin2"></span>
                                <span class="mtext">About</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay"></div>

        @yield('user_container')
    </div>
    <div id="css">
        Copyright © 2022 All Rights Reserved by <a href="http://127.0.0.1:8000/">Bursatana</a>
    </div>
    </div>



    <!-- js -->
    <script src="/vendors/scripts/core.js"></script>
    <script src="/vendors/scripts/script.min.js"></script>
    <script src="/vendors/scripts/process.js"></script>
    <script src="/vendors/scripts/layout-settings.js"></script>
    <script src="/src/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="/vendors/scripts/dashboard.js"></script>
</body>

</html>
