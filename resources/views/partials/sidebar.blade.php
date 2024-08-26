<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">IBIK OFFICE</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#outbox" aria-expanded="true" aria-controls="outbox">
            <i class="fas fa-fw fa-folder"></i>
            <span>Surat Keluar</span>
        </a>
        <div id="outbox" class="collapse" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="">Surat Keluar</a>
                <a class="collapse-item" href="">Disposisi</a>
                <a class="collapse-item" href="">Surat Selesai</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#inbox" aria-expanded="true" aria-controls="inbox">
            <i class="fas fa-fw fa-folder"></i>
            <span>Surat Masuk</span>
        </a>
        <div id="inbox" class="collapse" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="">Surat Masuk</a>
                <a class="collapse-item" href="">Disposisi</a>
                <a class="collapse-item" href="">Surat Selesai</a>
            </div>
        </div>
    </li>

    <li class="nav-item {{ request()->is('master*') ? 'active' : '' }}">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#masterData" aria-expanded="true" aria-controls="masterData">
            <i class="fas fa-database"></i>
            <span>Data Master</span>
        </a>
        <div id="masterData" class="collapse {{ request()->is('master*') ? 'show' : '' }}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->is('master/user') ? 'active' : '' }}" href="{{ route('master.user') }}">User</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>