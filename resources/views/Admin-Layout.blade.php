<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản Lí | Admin</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('public/backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('public/backend/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link  href="{{asset('public/backend/css/style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{URL::TO('/Quan-Li')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin <sup>Vấn</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{URL::TO('/Quan-Li')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tổng Quan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Giao Diện
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Quản Lí Giao Diện</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản Lí Slide:</h6>
                        <a class="collapse-item" href="#">Thêm Slide</a>
                        <a class="collapse-item" href="#">Liệt kê Slide</a>



                        <h6 class="collapse-header">Quản Lí Footer:</h6>
                        <a class="collapse-item" href="#">Thêm Cột Footer</a>
                        <a class="collapse-item" href="#">Sửa Dữ Liệu</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            
        
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Dữ Liệu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Quản Lí Dữ Liệu</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Danh Mục Sản Phẩm:</h6>
                        <a class="collapse-item" href="{{URL::TO('/Them-Danh-Muc')}}">Thêm Danh Mục</a>
                        <a class="collapse-item" href="{{URL::TO('/Liet-Ke-Danh-Muc')}}">Liệt Kê Danh Mục</a>
                        
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Sản Phẩm:</h6>
                        <a class="collapse-item" href="{{URL::TO('/Them-San-Pham')}}">Thêm Sản Phẩm</a>
                        <a class="collapse-item" href="{{URL::TO('/Liet-Ke-San-Pham')}}">Liệt Kê Sản Phẩm</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Đơn Hàng:</h6>
                        <a class="collapse-item" href="{{URL::TO('/QuanLi-DonHang')}}">Quản Lí Đơn Hàng</a>
                        <a class="collapse-item" href="{{URL::TO('/DonHang-Day')}}">Đơn Hàng Theo Ngày</a>




                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Nhân Sự
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Quản Lí Human</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <?php 
                        use Illuminate\Support\Facades\Session;
                        $name = Session::get('admin_name');
                        $avatar = Session::get('avatar');
                        $admin =Session::get('phanquyen');
                    if( $admin==0){
                    ?>
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Nhân Viên :</h6>
                        <a class="collapse-item" href="{{URL::TO('/Them-NhanVien')}}">Thêm Nhân Viên</a>
                        <a class="collapse-item" href="{{URL::TO('/LietKe-NhanSu')}}">Quản Lí Nhân Viên</a>
                        <a class="collapse-item" href="#">....</a>
                        <h6 class="collapse-header">Người Dùng : </h6>
                        <a class="collapse-item" href="{{URL::TO('/LietKe-NguoiDung')}}">Quản Lí Người Dùng</a>
                       
                    </div>
                    
                    <?php
                    } elseif($admin==1){
                    ?>
                    <div class="bg-white py-2 collapse-inner rounded">
                       
                        <h6 class="collapse-header">Người Dùng : </h6>
                        <a class="collapse-item" href="{{URL::TO('/LietKe-NguoiDung')}}">Quản Lí Người Dùng</a>
                        
                    </div>

                    <?php
                    }
                    ?>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            

            <!-- Nav Item - Tables -->
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card">
                <img class="sidebar-card-illustration mb-2" src="{{URL::TO('public/backend/img/avatar.jpg')}}" alt="">
                <p class="text-center mb-2"><strong>Chủ Sở Hữu Vấn Nguyễn và Đoàn Vương</strong> Thiết kế vf sáng lập</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">FaceBook Admin</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                      

                        <!-- Nav Item - Messages -->
            

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                                <?php
                                   
                                     if($name){
                                         echo $name;
                                     }
                                ?>
                                </span>
                                <img class="img-profile rounded-circle" src="{{URL::TO('public/uploads/manage/'.$avatar)}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Hồ Sơ
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cài Đặt
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Hoạt Động 
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{URL::To('/DangXuat')}}" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Đăng Xuất
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tổng Quan</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Tạo Báo cáo</a>
                    </div>

           

                    <!-- section('content') -->

                                @yield('Admin_NoiDung')








                      <!-- section('content') -->  
                   
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sẵn Sàng Rời Đi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Chọn "Đăng Xuất" Nếu Bạn Đã Sẵn Sàng Thoát Phiên Làm Việc Của Mình .</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{URL::To('/DangXuat')}}">Đăng Xuất </a>
                </div>
            </div>
        </div>
    </div>
    <!-- CKeditor -->
    <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
    <script>
            CKEDITOR.replace( 'editor1' );
            CKEDITOR.replace( 'editor2' );
            CKEDITOR.replace('editor3');
            CKEDITOR.replace('editor4');	
            CKEDITOR.replace('editor5');	
    </script>

    <!-- //Ckeditor -->
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('public/backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('public/backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('public/backend/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('public/backend/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('public/backend/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('public/backend/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>