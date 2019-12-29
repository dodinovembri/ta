            <div class="app-main">    
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="{{ url('dashboard') }}" class="mm-active">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboards
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Mahasiswa</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Master
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ url('mhs') }}">
                                                <i class="metismenu-icon"></i>
                                                Mahasiswa
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        Transactions
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ url('mhs_aktif') }}">
                                                <i class="metismenu-icon">
                                                </i>Mhs Aktif
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('mhs_memenuhi_syarat') }}">
                                                <i class="metismenu-icon">
                                                </i>Mhs Memenuhi Syarat
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('mhs_tidak_memenuhi_syarat') }}">
                                                <i class="metismenu-icon">
                                                </i>Mhs Tidak Memenuhi Syarat
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('verifikasi_data_mhs') }}">
                                                <i class="metismenu-icon">
                                                </i>Verifikasi Data Mahasiswa
                                            </a>
                                        </li> 
                                        <li>
                                            <a href="{{ url('upload_data_mhs') }}">
                                                <i class="metismenu-icon">
                                                </i>Upload Data Mahasiswa
                                            </a>
                                        </li>    
                                        <li>
                                            <a href="{{ url('verifikasi_sukses') }}">
                                                <i class="metismenu-icon">
                                                </i>Verifikasi Sukses
                                            </a>
                                        </li>                                                                                               
                                        <li>
                                            <a href="{{ url('verifikasi_gagal') }}">
                                                <i class="metismenu-icon">
                                                </i>Verifikasi Gagal
                                            </a>
                                        </li>                                                                  
                                    </ul>
                                </li>
                                <li  >
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Reports
                                    </a>
                                </li> 

                                <li class="app-sidebar__heading">Dosen</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Master
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ url('dosen') }}">
                                                <i class="metismenu-icon"></i>
                                                Dosen
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        Transactions
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ url('topik_ta_mhs') }}">
                                                <i class="metismenu-icon">
                                                </i>Topik TA Mhs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('set_pembimbing_skripsi') }}">
                                                <i class="metismenu-icon">
                                                </i>Set Pembimbing Skripsi
                                            </a>
                                        </li>                                        
                                    </ul>
                                </li>
                                <li  >
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Reports
                                    </a>
                                </li>

                                <li class="app-sidebar__heading">Sempro</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Master
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon"></i>
                                                Dosen
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        Transactions
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ url('form_pengajuan_topik') }}">
                                                <i class="metismenu-icon">
                                                </i>Form Pengajuan Topik
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('topik_ta') }}">
                                                <i class="metismenu-icon">
                                                </i>Topik TA
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('form_perubahan_topik') }}">
                                                <i class="metismenu-icon">
                                                </i>Form Perubahan Topik
                                            </a>
                                        </li>                                        
                                        <li>
                                            <a href="{{ url('status_sempro') }}">
                                                <i class="metismenu-icon">
                                                </i>Status Sempro
                                            </a>
                                        </li>                                                                                              
                                        <li>
                                            <a href="{{ url('jadwal_sempro') }}">
                                                <i class="metismenu-icon">
                                                </i>Jadwal Sempro
                                            </a>
                                        </li> 
                                        <li>
                                            <a href="{{ url('verifikasi_seminar') }}">
                                                <i class="metismenu-icon">
                                                </i>Verifikasi Seminar
                                            </a>
                                        </li>                                                                                               
                                        <li>
                                            <a href="{{ url('perpanjang_sempro') }}">
                                                <i class="metismenu-icon">
                                                </i>Perpanjang Sempro
                                            </a>
                                        </li> 
                                        <li>
                                            <a href="{{ url('pendafatan_sempro') }}">
                                                <i class="metismenu-icon">
                                                </i>Pendaftaran Sempro
                                            </a>
                                        </li>   
                                        <li>
                                            <a href="{{ url('penguji_sempro') }}">
                                                <i class="metismenu-icon">
                                                </i>Set Penguji Sempro
                                            </a>
                                        </li>                                                                                                                                
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        Reports
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>Pengajuan Topik
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>Topik TA
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>Form Perubahan Topik
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>Form Pengajuan Sempro
                                            </a>
                                        </li>                                                                            
                                    </ul>
                                </li>

                                <li class="app-sidebar__heading">Skripsi</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Master
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon"></i>
                                                Dosen
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        Transactions
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ url('data_prasyarat_ta') }}">
                                                <i class="metismenu-icon">
                                                </i>Data Prasyarat TA
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('status_skripsi') }}">
                                                <i class="metismenu-icon">
                                                </i>Status Skripsi
                                            </a>
                                        </li> 
                                        <li>
                                            <a href="{{ url('jadwal_skripsi') }}">
                                                <i class="metismenu-icon">
                                                </i>Jadwal Skripsi
                                            </a>
                                        </li>   
                                        <li>
                                            <a href="{{ url('verifikasi_skripsi') }}">
                                                <i class="metismenu-icon">
                                                </i>Verifikasi Skripsi
                                            </a>
                                        </li>                                                                                               
                                        <li>
                                            <a href="{{ url('perpanjang_skripsi') }}">
                                                <i class="metismenu-icon">
                                                </i>Perpanjang Skripsi
                                            </a>
                                        </li>  
                                        <li>
                                            <a href="{{ url('pendaftaran_skripsi') }}">
                                                <i class="metismenu-icon">
                                                </i>Pendaftaran Skripsi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('jadwal_penguji') }}">
                                                <i class="metismenu-icon">
                                                </i>Jadwal Penguji
                                            </a>
                                        </li>                                                                                                                                                
                                    </ul>
                                </li>
                                <li  >
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Reports
                                    </a>
                                </li>

                                <li class="app-sidebar__heading">System</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        System Configuration
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ url('user_account_list') }}">
                                                <i class="metismenu-icon"></i>
                                                User Account List
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('user_group') }}">
                                                <i class="metismenu-icon"></i>
                                                User Group
                                            </a>
                                        </li>                                        
                                        <li>
                                            <a href="{{ url('bidang_ilmu') }}">
                                                <i class="metismenu-icon"></i>
                                                Bidang Ilmu
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('angkatan') }}">
                                                <i class="metismenu-icon">
                                                </i>Angkatan
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('kelas') }}">
                                                <i class="metismenu-icon">
                                                </i>Kelas
                                            </a>
                                        </li>
                                    </ul>
                                </li>                                                                                          
                            </ul>
                        </div>
                    </div>
                </div>