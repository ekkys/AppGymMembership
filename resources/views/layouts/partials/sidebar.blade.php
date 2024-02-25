<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
            target="_blank">
            <img src="./assets/img/logo-gma.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold"> Gym Membership Apps</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('dashboard') }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
        </li>
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Master Data</h6>
        </li>
        <li class="nav-item">

            <a class="nav-link " href="./pages/tables.html">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-02 text-primary text-lg opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Tipe Member</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="./pages/billing.html">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-credit-card text-danger text-lg opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Tipe Pembayaran</span>
            </a>
        </li>
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Transaksi</h6>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="./pages/tables.html">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-user-run text-warning text-lg opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Data Member</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="./pages/tables.html">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-money-coins text-success text-lg opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Data Pembayaran</span>
            </a>
        </li>
</aside>
