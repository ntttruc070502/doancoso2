       <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" type="text/css" href="../User/Public/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <style type="text/css">
   input {
      margin-bottom: 10px;
   }
   a {
    text-decoration: none;
   }

</style>
  
 <div class="text-center">
   <div class="row">
      <a href="?controller=view_user&action=view_user" style="text-align: left; margin-left: 30px; color: red"><i class="fas fa-arrow-left"></i> Trở lại trang chủ </a>
      <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="khoi1 animate__animated animate__fadeInDown"> <img src="http://edubox.vn/wp-content/uploads/2018/12/dongho.png" style="border-radius: 15px" alt="...">
         <p>Tiết kiệm thời gian</p></div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="khoi animate__animated animate__fadeInDown"><img src="http://edubox.vn/wp-content/uploads/2018/12/money.png"  alt="...">
         <p>Tăng thêm thu nhập</p> </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="khoi animate__animated animate__fadeInDown"><img src="http://edubox.vn/wp-content/uploads/2018/12/handshake.png"  alt="...">
         <p>Mở rộng quan hệ</p> </div>
      </div>
      <div> 
   </div>



<div id="ac" style="float: left;width: 100%; height: 100% ;display: flex;">
  <div class="animate__animated animate__fadeInLeft" style="width: 100%; background-color: #DEB887"> 
    <p style="font-size: 40px;color : #ff353c">Liên hệ để được Tư Vấn Miễn Phí!</p>
    <p style="font-size: 20px;color : #707070">0582060355</p>
    <p>(Hotline tìm gia sư tại Đà Nẵng và Hà Nội)</p>
    <img src="https://giasuongmattroi.com/wp-content/uploads/2018/04/Screenshot-2018-4-20-Trung-t%C3%A2m-gia-s%C6%B0-uy-t%C3%ADn-Tphcm-Gia-s%C6%B0-%C3%94ng-M%E1%BA%B7t-Tr%E1%BB%9Di.png" alt="">
  </div>
   <form action="" method="post" style="width: 100%" enctype="multipart/form-data">
   <div class="container animate__animated animate__fadeInRight animate__delay-0.5s">
            <h3>Đăng ký ngay để trở thành gia sư !</h3>
      <div class="col-md-12 col-sm-6 col-xs-12">
         <div class=""> <input type="file" class="form-control"  name="anh" id="anh"></div>
      </div>
            
      <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"> <input type="text" class="form-control" placeholder="Nhập tên của bạn" name="ten" id="ten"></div>
      </div>
      <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"><input type="text" class="form-control" placeholder="Email" name="email" id="email"> </div>
      </div>
       <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"><input type="text" class="form-control " placeholder="Số điện thoại" name="sdt" id="sdt"> </div>
      </div>
       
       <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"><input type="text" class="form-control " placeholder="Môn giảng dạy" name="monhoc" id="monhoc"> </div>
      </div>
      <div class="col-md-12 col-sm-6 col-xs-12">
         <select class="form-select form-select-lg mb-3 " aria-label=".form-select-lg example" name="trinhdo">
        <option >Trình độ</option>
        <option value="Đại Học">Đại Học</option>
        <option value="Cao Đẳng">Cao Đẳng</option>
        <option value="Sinh Viên">Sinh Viên</option>
        </select>
      </div>

        <div class="col-md-12 col-sm-6 col-xs-12">
        <select class="form-select form-select-lg mb-3 " aria-label=".form-select-lg example" name="gioitinh">
        <option >Giới tính</option>
        <option value="Nam">Nam</option>
        <option value="Nũ">Nữ</option>
        <option value="Khác">Khác</option>
        </select>
      </div>
      <div class="col-md-12 col-sm-6 col-xs-12 ">
         <div class="khoi"> <textarea class="form-control" id="gioithieu
          " rows="3" name="gioithieu"  placeholder="Giới thiệu bản thân"></textarea> </div>
      </div> 
      
         <div>
       <button type="submit" name="save"  class="btn btn-primary container mt-2" style="width: 100%;" >Gửi</button>
       
       </div>

   </div>



</form>
</div>

<?php 
      if(isset($thanhcong) && in_array('add_success', $thanhcong)) {
         $message = "Đăng ký thành công!" ;
      }
      include("User/Views/header_footer/footer.php");
       ?>
</div>
</div>


</div>
  
