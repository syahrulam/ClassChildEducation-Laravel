<aside id="sidebar-wrapper">
<div class="sidebar-brand">
    <a href="{{ route('dashboard') }}">Class Child Education</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
  </div>

  <ul class="sidebar-menu">

    <li class="menu-header">Dashboard</li>
    <li class=""><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fw fa-tachometer-alt"></i> <span>Dashboard</span></a></li>

    <li class="menu-header">Game</li>
    <li class=""><a class="nav-link" href="{{ route('monitor-siswa') }}"><i class="fa fa-columns"></i> <span>Monitor Nilai</span></a></li>
    <li class=""><a class="nav-link" href="{{ route('kategori-game') }}"><i class="fas fa-fw fa-gamepad"></i> <span>Kategori Game</span></a></li>
    <li class=""><a class="nav-link" href="{{ route('soal-kuis') }}"><i class="fas fa-fw fa-gamepad"></i> <span>Data Kuis</span></a></li>

    <li class="menu-header">Kelola</li>
    <li class=""><a class="nav-link" href="{{ route('siswa') }}"><i class="fas fa-fw fa-user-graduate"></i> <span>Data Siswa</span></a></li>
    @can('admin')
    <li class=""><a class="nav-link" href="{{ route('guru') }}"><i class="fas fa-fw fa-chalkboard-teacher"></i> <span>Data Guru</span></a></li>
    <li class=""><a class="nav-link" href="{{ route('kelas') }}"><i class="fas fa-fw fa-user-graduate"></i> <span>Data Kelas</span></a></li>
    <li class="menu-header">Pengaturan</li>
    <li class=""><a class="nav-link" href="#"><i class="fas fa-fw fa-chalkboard-teacher"></i> <span>Pengaturan</span></a></li>
    @endcan
  </ul>
</aside>