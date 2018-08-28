<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <img class="img-menu-user img-radius" src="{{ Avatar::create(Sentinel::getUser()->name)->toBase64() }}" alt="User-Profile-Image">
                <div class="user-details">
                    <p id="more-details">{{ Sentinel::getUser()->name }}</p>
                </div>
            </div>
        </div>
        <div class="pcoded-navigation-label">Akademik</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ request()->is('lecturer/dashboard*') ? 'active ' : '' }}">
                <a href="{{ route('lecturer.dashboard') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Beranda</span>
                </a>
            </li>
            <li class="{{ request()->is('lecturer/course*') ? 'active ' : '' }}">
                <a href="{{ route('lecturer.course') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather icon-book"></i></span>
                    <span class="pcoded-mtext">Materi</span>
                </a>
            </li>
            <li class="{{ request()->is('lecturer/discussion*') ? 'active ' : '' }}">
                <a href="{{ route('lecturer.discussion') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather icon-message-circle"></i></span>
                    <span class="pcoded-mtext">Diskusi</span>
                </a>
            </li>
            <li class="{{ request()->is('lecturer/task*') ? 'active ' : '' }}">
                <a href="{{ route('lecturer.task') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather icon-paperclip"></i></span>
                    <span class="pcoded-mtext">Tugas</span>
                </a>
            </li>
            <li class="{{ request()->is('lectuerer/quis*') ? 'active ' : '' }}">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather icon-feather"></i></span>
                    <span class="pcoded-mtext">Kuis</span>
                </a>
            </li>
        </ul>
        <div class="pcoded-navigation-label">Data</div>	
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Matakuliah</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="index.html" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Tambah MK</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="dashboard-ecommerce.html" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Daftar MK</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Kelas</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="index.html" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Tambah Kelas</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="dashboard-ecommerce.html" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Daftar Kelas</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="pcoded-navigation-label">Profil</div>	
        <ul class="pcoded-item pcoded-left-item">
            <li class=" ">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                    <span class="pcoded-mtext">Pengaturan</span>
                </a>
            </li>
            <li class=" ">
                <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather icon-log-out"></i></span>
                    <span class="pcoded-mtext">Keluar</span>
                </a>
            </li>
        </ul>

    </div>
</nav>