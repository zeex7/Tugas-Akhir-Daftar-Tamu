<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class=></i>
        </div>
        <div class="sidebar-brand-text mx-3"><img src="{{asset('/logo1.png')}}" alt="" style="width: 4cm"><sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link d-flex align-items-center justify-content-center" href="/">
            <span>Data Tamu Keseluruhan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link d-flex align-items-center justify-content-center" href="{{ route("create")}}">
            <span>Tambah Data Tamu</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    

    

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->