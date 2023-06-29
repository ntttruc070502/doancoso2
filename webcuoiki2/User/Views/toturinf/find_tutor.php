<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/	umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="../User/Public/css/showgiasu.css" rel="stylesheet" />
  <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="../User/Public/style.css">
	<title>Document</title>
	<style>
#find-tutor {
  width: 30%; height: 50px; border-radius: 15px; margin-left: 15px;
}
#timkiem {
  height: 35px; border-radius: 5px;
}
#dkk {
color: white;
}
button {
  margin-left: 17px;
}
button:hover {
  background-color: green;
}
#search:hover {
  background-color: green;
  color: white;
}
	</style>
</head> 
<body>


	<div class="container">

      <a style="text-decoration: none;color: red" href="?controller=view_user&action=view_user" ><i class="fas fa-arrow-left"></i>Trang chủ</a>
    </div>
 			<h3 class="display-3" style="text-align: center;">DANH SÁCH GIA SƯ </h3>
      <form action="" method="GET">
                            
       <input type="hidden" name="controller" value="phuhuynh">
      <input type="text" id="find-tutor" name="tukhoa" placeholder="Tên thầy cô/Môn học/Lớp học"> 
      <i class="nc-icon nc-zoom-split"></i>                  
      <input type="submit" value="Tìm kiếm" id="search" style="width: 80px;height: 35px; border-radius: 5px">
      <input type="hidden" name="action" value="timkiem">                           
                              
        </form>
     
		
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
                        <p class="card-title ten">Tên: <?= $value['ten'] ?> </p>
                        <p class="card-text email"> Email: <?= $value['email'] ?> </p>
                        <p class="card-text trinhdo">Trình độ: <?= $value['trinhdo'] ?> </p>
                        <p class="card-text sdt">Số điện thoại: <?= $value['sdt'] ?> </p>
                        <p class="card-text monhoc">Môn giảng dạy: <?= $value['monhoc'] ?> </p>
                        <p class="card-text monhoc">Giới tính: <?= $value['gioitinh'] ?> </p>
                        <p class="card-text monhoc">Giới thiệu: <?= $value['gioithieu'] ?> </p>
                      </div>
                <div >
                </div>              
                  <div class="dk" >
                    <button> <a id="dkk" href="?controller=phuhuynh&action=dangKygiaSu&id=<?php echo $value['id'] ?>" style="text-decoration: none;">Đăng Ký</a></button>
      
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
            echo "<a style='margin:0 10px' href='index.php/user?controller=phuhuynh&action=find-tutor&page=" . ($current_page - 1) . "'><<</a>";
        }

        for ($i = 1; $i <= $total_page; $i++) {
            if ($i == $current_page) {
                echo '<a style="color: white;width: 20px; margin-left:5px;margin-right:5px;background: red;border-radius:10px;"><span>' . $i . '</span></a>';
            } else {
                echo '<a href="?controller=phuhuynh&action=find-tutor&page=' . $i . '">' . $i . '</a>';
            }
        }

        if ($current_page < $total_page && $total_page > 1) {
            echo '<a href="?controller=phuhuynh&action=find-tutor&page=' . ($current_page+1) . '">>></a>';
        }
        ?>
			</body>
</html> 