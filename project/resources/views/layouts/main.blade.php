<html>
    <head>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="sidebar.css" rel="stylesheet">
    </head>
    <body class="bg-light">
    {{-- <body style="background-color: whitesmoke"> --}}
      <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light shadow">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-dark min-vh-100 font-arial">
                    <br>
                    <a href="/home" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <span class="fs-1 d-none d-sm-inline font-monospace">Menu</span>
                    </a>
                    <br>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <img src="/assets/database.ico"> <span class="ms-1 d-none d-sm-inline text-dark font-monospace">Info Barang</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="/barang" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark font-monospace">Data Barang</span>  </a>
                                </li>
                                <li>
                                    <a href="/barangbaru" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark font-monospace">Barang Baru</span>  </a>
                                </li>
                            </ul>
                        </li>
                        <br>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <img src="/assets/database.ico"> <span class="ms-1 d-none d-sm-inline text-dark font-monospace">Info Pinjam</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="/pinjam" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark font-monospace">Data Pinjam</span> </a>
                                </li>
                                <li>
                                    <a href="/detailpinjam" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark font-monospace">Detail Pinjam</span> </a>
                                </li>
                                <li>
                                    <a href="/temppinjam" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark font-monospace">Temp Pinjam</span> </a>
                                </li>
                            </ul>
                        </li>
                        <br>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <img src="/assets/database.ico"> <span class="ms-1 d-none d-sm-inline text-dark font-monospace">Info Kembali</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="/kembali" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark font-monospace">Data Kembali</span> </a>
                                </li>
                                <li>
                                    <a href="/detailkembali" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark font-monospace">Detail Kembali</span> </a>
                                </li>
                            </ul>
                        </li>
                        <br>
                        <li>
                            <a href="/member" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <img src="/assets/user.ico"> <span class="ms-1 d-none d-sm-inline text-dark font-monospace">Member</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="/logout" class="d-flex align-items-center text-dark text-decoration-none position-fixed bottom-0 start-0"  aria-expanded="false">
                            <img src="/assets/logout.ico" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Sign Out</span>
                        </a>
                        {{-- <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul> --}}
                    </div>
                    {{-- <div class="container mt-5">
                        <a href="/logout" class="nav-link px-0 align-middle"> <img src="/assets/logout.ico"><span class="ms-1 d-none d-sm-inline text-dark font-monospace">Log Out</span></a>
                    </div> --}}
                </div>
            </div>
            <div class="col py-3">
                @yield('content')
            </div>
        </div>
    </div>
      <script src="js/bootstrap.bundle.js"></script>
    </body>
</html>