 



 <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="#"><img src="{{ asset('audit/img/bisby.png')}}" alt="logo"></a>
                    <i style="color: #fff; font-weight: bold; font-size: 16px; " >Administrator</i>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                       
                        <ul class="metismenu" id="menu">
                            <li><a href="{{ route('datapegawai') }} "><i class="ti-id-badge   " ></i> <span  class="" >Data Pegawai</span></a></li>
                            <li >
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-users"></i> <span>Data Users</span></a>
                                <ul class="collapse">   
                                    <li><a href="{{ route('datakepala') }} ">Admin / Kepala Balai</a></li>
                                    <li><a href="{{ route('dataauditor') }} ">Auditor</a></li>
                                     <li><a href="{{ route('dataauditee') }} ">Auditee</a></li>
                                </ul>
                            </li>

                            <li><a href="{{ route('pengumuman') }} "><i class="ti-bell"></i> <span>Pengumuman</span></a></li>

                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-comment-alt"></i> <span>Data Audit</span></a>
                                <ul class="collapse">
                                    <li><a href="{{ route('dataaudit',1) }} ">Top Manajemen</a></li>
                                    <li><a href="{{ route('dataaudit',2) }}">Sub Bag Tata Usaha</a></li>
                                    <li><a href="{{ route('dataaudit',3) }}">Seksi Pengembangan jasa Teknis</a></li>
                                    <li><a href="{{ route('dataaudit',4) }}">Seksi Standarisasi Dan Sertifikasi / Operasional</a></li>
                                    <li><a href="{{ route('dataaudit',5) }}">Seksi Standarisasi Dan Sertifikasi / Mutu</a></li>
                                </ul>
                            </li>

                  {{--          <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-archive"></i> <span>Arsip</span></a>
                                <ul class="collapse">
                                    <li><a href="#">Top Manajemen</a></li>
                                    <li><a href="#">Sub Bag Tata Usaha</a></li>
                                    <li><a href="#">Seksi Pengembangan jasa Teknis</a></li>
                                    <li><a href="#">Seksi Standarisasi Dan Sertifikasi / Operasional</a></li>
                                    <li><a href="#">Seksi Standarisasi Dan Sertifikasi / Mutu</a></li>
                                </ul>
                            </li> --}}

                            <li><a href="{{ route('arsip') }} "><i class="ti-archive"></i> <span>Arsip</span></a></li>
                            <li><a href="{{ route('pengaturanaudit') }}"><i class="ti-settings"></i> <span>Pengaturan Audit</span></a></li>

                         

                    
                           </ul> 

                      
            
                         
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->