 <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">ROLLING DOOR</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">RD</a>
          </div>

          <ul class="sidebar-menu">
            <li class="menu-header">Beranda</li>
 <li class=active><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i> <span>Beranda</span></a></li>
            
           
            <li class="menu-header">Menu</li>

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-box-open"></i> <span>Produk</span></a>

              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ url('/barang') }}">Daftar Produk</a></li>
              </ul>

              <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-friends"></i> <span>Pelanggan</span></a>

              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ url('/pelanggan') }}">Daftar Pelanggan</a></li>
              </ul>
            </li>


            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cart-plus"></i> <span>Pembelian</span></a>

              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ url('/pembelian') }}">Daftar Pembelian</a></li>
              </ul>

                <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-shopping-basket"></i> <span>Penjualan</span></a>

              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ url('/penjualan') }}">Daftar Penjualan</a></li>
              </ul>
            </li>
          

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file-invoice"></i> <span>Laporan</span></a>

              <ul class="dropdown-menu">
                <li><a class="nav-link" href="#">Daftar Laporan</a></li>
              </ul>
            </li>

           
                   </aside>
      </div>