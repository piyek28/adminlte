<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home" aria-hidden="true"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('suratmasuk') }}" class="nav-link {{ Request::is('suratmasuk') ? 'active' : '' }}">
        <i class="nav-icon fa fa-envelope" aria-hidden="true"></i>
        <p>Surat Masuk</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('suratkeluar') }}" class="nav-link {{ Request::is('suratkeluar') ? 'active' : '' }}">
        <i class="nav-icon fa fa-envelope-open" aria-hidden="true"></i>
        <p>Surat Keluar</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('tampilan') }}" class="nav-link {{ Request::is('tampilan') ? 'active' : '' }}">
        <i class="nav-icon fa fa-th" aria-hidden="true"></i>
        <p>Layout Beranda</p>
    </a>
</li>
