
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
    <link href="../User/Public/css/homee.css" rel="stylesheet" />
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
                             <form action="" method="GET">
                            <li class="nav-item">
                                <a href="#" class="nav-link">

                                   <input type="hidden" name="controller" value="admin">
                                    <input type="text" name="tukhoa" placeholder="Tên thầy cô/Môn học" style="height: 0"> 
                                       <i class="nc-icon nc-zoom-split"></i>                  
                                    <input type="submit" value="Tìm kiếm" style="height: 35px;">
                                    <input type="hidden" name="action" value="timkiem">
                                   
                                    
                                </a>
                            </li>
                            </form>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
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
          <style>
    
  
    </style>
</head> 
<body>
    
            <h3 class="display-3" style="text-align: center;">Danh sách gia sư </h3>
        
    <hr>

    <body>
       <div class="chua">
        <?php
        $table ='yeucau';
        $data123 = $db->getAllData123($table);
        $total_records = $data123['total'];
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 6;

        $total_page = ceil($total_records / $limit);

        if ($current_page > $total_page) {
            $current_page = $total_page;
        } else if ($current_page < 1) {
            $current_page = 1;
        }

        $start = ($current_page - 1) * $limit;

        $result123 = $db->getSPPhanTrang($start, $limit,$table);
        foreach ($result123 as $value) {
        ?>
              <div class="column">

                <div class="col-sm-3">          
                
                </div>                  
                    <div class="row">
                      <div class="col-sm-6" >
                        <img class="card-title anh" src="<?= $value['anh'] ?>" alt="Card image cap">
                      </div>
                      <div class="col-sm-6">
                        <p class="card-text email"> Tên:<?= $value['ten'] ?> </p>
                        <p class="card-text email"> Email:<?= $value['email'] ?> </p>
                        <p class="card-text trinhdo">Trình độ:<?= $value['trinhdo'] ?> </p>
                        <p class="card-text sdt">Số điện thoại:<?= $value['sdt'] ?> </p>
                        <p class="card-text monhoc">Môn giảng dạy:<?= $value['monhoc'] ?> </p>
                        <p class="card-text monhoc">Giới tính:<?= $value['gioitinh'] ?> </p>
                        <p class="card-text monhoc">Gioithieu:<?= $value['gioithieu'] ?> </p>
                      </div>
              
                <div >              
                        <small><a onclick="return confirm('Bạn có chắc chắn muốn xóa không')" href="index.php?controller=admin&action=deletee&id=<?php echo $value['id'] ?>" class="btn btn-outline-danger btn-xs">Xóa  <i class="fa fa-remove"></i></a></small>
                    <small><a  href="?controller=admin&action=listParent&id=<?php echo $value['id'] ?>" class="btn btn-success" name="accept">Phụ huynh đã đăng ký</i></a></small>
                   
                </div>     
                
                        
              </div> 

                     
              </div>
                <?php 

            }
                 ?> 
                </div>
                <div class="phantrang" style="text-align: center;font-size: 25px">
        <?php
        if ($current_page > 1 && $total_page > 1) {
            echo "<a style='margin:0 10px' href='index.php?controller=admin&action=accept-tutor&page=" . ($current_page - 1) . "'><<</a>";
        }

        for ($i = 1; $i <= $total_page; $i++) {
            if ($i == $current_page) {
                echo '<a style="color: white;width: 20px; margin-left:5px;margin-right:5px;background: red;border-radius:10px;"><span>' . $i . '</span></a>';
            } else {
                echo '<a href="index.php?controller=admin&action=accept-tutor&page=' . $i . '">' . $i . '</a>';
            }
        }

        if ($current_page < $total_page && $total_page > 1) {
            echo '<a href="index.php?controller=admin&action=accept-tutor&page=' . ($current_page+1) . '">>></a>';
        }
        ?>
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
