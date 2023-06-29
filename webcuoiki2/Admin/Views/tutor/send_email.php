
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <style type="text/css">
   input {
      margin-bottom: 10px;
   }
</style>
 <a href="?controller=admin&action=accept-tutor" ><i class="fas fa-arrow-left"></i>Trang chủ</a>
   <div class="text-center">

   <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="khoi"> <img src="http://edubox.vn/wp-content/uploads/2018/12/dongho.png" class="img-thumbnail" alt="...">
         <p>Tiết kiệm thời gian</p></div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="khoi"><img src="http://edubox.vn/wp-content/uploads/2018/12/money.png" class="img-thumbnail" alt="...">
         <p>Gia sư chất lượng</p> </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="khoi"><img src="http://edubox.vn/wp-content/uploads/2018/12/handshake.png" class="img-thumbnail" alt="...">
         <p>Uy tín tuyệt đối</p> </div>
      </div>
      <div> 
   </div>
   <br>
   <br>  

   <form action="" method="post" enctype="multipart/form-data">
   <div class="container">
          
           <br>
     <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"> <input type="text" class="form-control w-50 container" placeholder="Nhập email người cần gửi" name="emailphuhuynh" id="" value=""></div>
         <div class="khoi"> <input type="text" class="form-control w-50 container" placeholder="Nhập nội dung gửi" name="noidung" id="" value=""></div>
         <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"> <input type="text" class="form-control w-50 container" placeholder="Tên đăng Nhập" name="mess" id="" value="<?php 
          echo "Tên: ". $dataID[ 'tenphuhuynh']."<br/>"; 
          echo "Địa chỉ: ".$dataID['diachi']."<br/>"; 
          echo "Số điện thoại phụ huynh: ".$dataID['sdtphuhuynh']."<br/>"; 
          echo "Giảng dạy học sinh lớp: ".$dataID['lophoc']."<br/>"; 
          echo "Lịch giảng dạy: ".$dataID['lichhoc']; 
        
          
       ?>">

       </div>
         
         
      </div>
    
      
      
     
       <button type="submit" name="sendemail" class="btn btn-primary w-50 container mt-2">Gửi</button>

   </div>

   </div>

</form>
</div>
