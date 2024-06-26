<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand mt-3">
            <a href="">{{ config('app.name') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">{{ strtoupper(substr(config('app.name'), 0, 2)) }}</a>
        </div>
        <ul class="sidebar-menu">
            @if (Auth::check() && Auth::user()->roles == 'admin')
            <li class="{{ request()->routeIs('admin.dashboard.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Master Data</li>

            <li class="{{ request()->routeIs('guru.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('guru.index') }}"><i class="fas fa-user"></i> <span>Guru</span></a></li>

            <li class="{{ request()->routeIs('kelas.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('kelas.index') }}"><i class="far fa-building"></i> <span>Kelas</span></a></li>

            <li class="{{ request()->routeIs('mapel.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('mapel.index') }}"><i class="far fa-clipboard"></i> <span>Mapel</span></a></li>

            <li class="{{ request()->routeIs('siswa.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('siswa.index') }}"><i class="fas fa-users"></i> <span>Siswa</span></a></li>

            <li class="{{ request()->routeIs('jadwal.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('jadwal.index') }}"><i class="fas fa-calendar"></i> <span>Jadwal</span></a></li>

            <li class="{{ request()->routeIs('user.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-user"></i> <span>User</span></a></li>

            @elseif (Auth::check() && Auth::user()->roles == 'guru')
            <li class="{{ request()->routeIs('guru.dashboard.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('guru.dashboard') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Master Data</li>
            <li class="{{ request()->routeIs('materi.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('materi.index') }}"><i class="fas fa-book"></i> <span>Materi</span></a></li>
            <li class="{{ request()->routeIs('laporan.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('laporan.index') }}"><i class="fas fa-file"></i> <span>Laporan</span></a></li>

            @elseif (Auth::check() && Auth::user()->roles == 'ortu')
            <li class="{{ request()->routeIs('ortu.dashboard.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('ortu.dashboard') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
            <li class="{{ request()->routeIs('laporan.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('ortu.laporan') }}"><i class="fas fa-file"></i> <span>Laporan</span></a></li>
            {{-- <li class="{{ request()->routeIs('laporan.*') ? 'active' : '' }}"><a class="nav-link" href="#"><i class="fas fa-file"></i> <span>Laporan</span></a></li> --}}

            @endif

        </ul>
    </aside>
</div>
