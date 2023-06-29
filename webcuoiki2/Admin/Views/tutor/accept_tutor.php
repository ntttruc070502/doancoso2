
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Giao diện admin</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../User/Public/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../Admin/Public/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../Admin/Public/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <style type="text/css">
   input {
      margin-bottom: 10px;
   }
</style>
     
    

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Study for Success
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php/user?controller=admin&action=accept-tutor">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Quản lý gia sư</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../index.php/user?controller=admin&action=list">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Xét duyệt gia sư</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                   
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                          
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <a href="?controller=trangchu"> <span class="no-icon">Đăng xuất</span></a>
                                    
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="text-center">
   <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="khoi"> <img src="http://edubox.vn/wp-content/uploads/2018/12/dongho.png" class="img-thumbnail" alt="...">
         <p>Tiết kiệm thời gian</p></div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="khoi"><img src="http://edubox.vn/wp-content/uploads/2018/12/money.png" class="img-thumbnail" alt="...">
         <p>Tăng thêm thu nhập</p> </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="khoi"><img src="http://edubox.vn/wp-content/uploads/2018/12/handshake.png" class="img-thumbnail" alt="...">
         <p>Mở rộng quan hệ</p> </div>
      </div>
      <div> 
   </div>

   <form action="" method="post" enctype="multipart/form-data">
   <div class="container">
           

      <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"> <input type="text" class="form-control w-50 container" placeholder="Tên đăng Nhập" name="anh" id=""value="<?php echo $dataID['anh']; ?>"></div>
      </div>
            
      <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"> <input type="text" class="form-control w-50 container" placeholder="Tên đăng Nhập" name="ten" id="" value="<?php echo $dataID['ten']; ?>"></div>
      </div>
      <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"><input type="text" class="form-control w-50 container" placeholder="Email" name="email" id=""value="<?php echo $dataID['email']; ?>"> </div>
      </div>
       <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"><input type="text" class="form-control w-50 container" placeholder="Số điện thoại" name="sdt" id=""value="<?php echo $dataID['sdt']; ?>"> </div>
      </div>
       <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"><input type="text" class="form-control w-50 container" placeholder="Trình độ" name="trinhdo" id=""value="<?php echo $dataID['trinhdo']; ?>"> </div>
      </div>
       <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"><input type="text" class="form-control w-50 container" placeholder="Môn giảng dạy" name="monhoc" id=""value="<?php echo $dataID['monhoc']; ?>"></div>
      </div>

         <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="gioitinh"><input type="text" class="form-control w-50 container" placeholder="Giới tính" name="gioitinh" id=""value="<?php echo $dataID['gioitinh']; ?>"> </div>
         </div>
      
      <div class="col-md-12 col-sm-6 col-xs-12 ">
         <div class="gioithieu"><input type="text" class="form-control w-50 container" placeholder="Giới thiệu" name="gioithieu" id=""value="<?php echo $dataID['gioithieu']; ?>"> </div>
         </div>
         
         <button name="pheduyet" type="submit" class="btn btn-outline-success">Phê duyệt</button>               
      </div> 
   </div>

   </div>

</form>

</div>
 </body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>

</html>




































   
   




