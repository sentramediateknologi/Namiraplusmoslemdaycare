
<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item <?= $parent=='dashboard'?'active':'' ?>" data-item="dashboard">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <div class="triangle"></div>
            </li>
            <!-- <li class="nav-item <?= $parent=='referensi'?'active':'' ?>" data-item="uikits">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Library"></i>
                    <span class="nav-text">Referensi</span>
                </a>
                <div class="triangle"></div>
            </li> -->
            <li class="nav-item <?= $parent=='register'?'active':'' ?>" data-item="registrasi">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Arrow-Loop"></i>
                    <span class="nav-text">Registrasi</span>
                </a>
                <div class="triangle"></div>
            </li>
            <!-- <li class="nav-item <?= $parent=='pengembalian'?'active':'' ?>" data-item="apps">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Arrow-Mix"></i>
                    <span class="nav-text">Observasi</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item <?= $parent=='pengembalian'?'active':'' ?>" data-item="apps">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Arrow-Mix"></i>
                    <span class="nav-text">Absensi</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item <?= $parent=='pengembalian'?'active':'' ?>" data-item="apps">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Arrow-Mix"></i>
                    <span class="nav-text">Tumbuh Kembang</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item <?= $parent=='pengembalian'?'active':'' ?>" data-item="apps">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Arrow-Mix"></i>
                    <span class="nav-text">Pembayaran</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item <?= $parent=='pengembalian'?'active':'' ?>" data-item="apps">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Arrow-Mix"></i>
                    <span class="nav-text">Laporan</span>
                </a>
                <div class="triangle"></div>
            </li> -->
        </ul>
    </div>
    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <header class="p-4">
            <div class="logos mb-2 text-center">
                <img src="<?= base_url().'dist-assets/'?>images/logo_namira.png" alt="">
            </div>
        </header>
        <!-- Submenu Dashboards -->
        <div class="submenu-area" data-parent="dashboard">
            <header>
                <h6>Dashboards</h6>
            </header>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="<?= base_url().'dashboard'; ?>">
                        <i class="nav-icon i-Bar-Chart-2"></i>
                        <span class="item-name">Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="submenu-area" data-parent="uikits">
            <header>
                <h6>Referensi</h6>
            </header>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="<?= base_url().'role'; ?>">
                        <i class="nav-icon i-Duplicate-Window"></i>
                        <span class="item-name">Role</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url().'pengguna'; ?>">
                        <i class="nav-icon i-Duplicate-Window"></i>
                        <span class="item-name">Pengguna</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url().'imunisasi'; ?>">
                        <i class="nav-icon i-Duplicate-Window"></i>
                        <span class="item-name">Imunisasi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url().'penyakit'; ?>">
                        <i class="nav-icon i-Duplicate-Window"></i>
                        <span class="item-name">Penyakit</span>
                    </a>
                </li>
            </ul>
        </div>      

        <div class="submenu-area" data-parent="registrasi">
            <header>
                <h6>Registrasi</h6>
            </header>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="<?= base_url().'register-anak'; ?>">
                        <i class="nav-icon i-Duplicate-Window"></i>
                        <span class="item-name">Anak</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url().'register-orangtua'; ?>">
                        <i class="nav-icon i-Duplicate-Window"></i>
                        <span class="item-name">Orang Tua / Wali</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url().'register-rekam-medik'; ?>"> 
                        <i class="nav-icon i-Duplicate-Window"></i>
                        <span class="item-name">Rekam Medik Anak</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url().'register-berkas'; ?>"> 
                        <i class="nav-icon i-Duplicate-Window"></i>
                        <span class="item-name">Upload Berkas</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="submenu-area" data-parent="apps">
            <header>
                <h6>Pengembalian</h6>
            </header>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="<?= base_url().'peminjaman-kendaraan/pengembalian'; ?>">
                        <i class="nav-icon i-Bicycle"></i>
                        <span class="item-name">Kendaraan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url().'peminjaman-ruangan/pengembalian'; ?>">
                        <i class="nav-icon i-Blackboard"></i>
                        <span class="item-name">Ruangan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url().'peminjaman-perangkat-it/pengembalian'; ?>"> 
                        <i class="nav-icon i-Wireless"></i>
                        <span class="item-name">Perangkat IT</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>