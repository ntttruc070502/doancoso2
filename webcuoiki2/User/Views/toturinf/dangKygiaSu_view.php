
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <style type="text/css">
   input {
      margin-bottom: 10px;
   }
</style>
   <div class="text-center">
   <div class="row">
       <a href="?controller=view_user&action=view_user" style="text-align: left; margin-left: 30px; color: red"><i class="fas fa-arrow-left"></i> Trở lại trang chủ </a>
      <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="khoi"> <img src="http://edubox.vn/wp-content/uploads/2018/12/dongho.png"  >
         <p>Tiết kiệm thời gian</p></div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="khoi"><img src="http://edubox.vn/wp-content/uploads/2018/12/money.png" >
         <p>Gia sư chất lượng</p> </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="khoi"><img src="http://edubox.vn/wp-content/uploads/2018/12/handshake.png">
         <p>Uy tín tuyệt đối</p> </div>
      </div>
      <div> 
   </div>
   <br>
   <br>  

   <form action="" method="post" enctype="multipart/form-data">
   <div class="container">
           <h4>Hãy để chúng tôi đồng hành cùng con của bạn!</h4>
           <br>
      <div class="col-md-12 col-sm-6 col-xs-12">
        
            
      <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"> <input type="text" class="form-control w-50 container" placeholder="Tên phụ huynh" name="tenphuhuynh" id=""></div>
      </div>
      <div class="col-md-12 col-sm-6 col-xs-12">
      <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"><input type="text" class="form-control w-50 container" placeholder="Địa chỉ" name="diachi" id=""> </div>
      </div>
       <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"><input type="text" class="form-control w-50 container" placeholder="Số điện thoại" name="sdtphuhuynh" id=""> </div>
      </div>
       <div class="col-md-12 col-sm-6 col-xs-12">
        <select class="form-select form-select-lg mb-3 w-50 container" aria-label=".form-select-lg example" name="lophoc">
        <option >Hiện đang học lớp</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>

        </select>
      </div>
       <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"><input type="text" class="form-control w-50 container" placeholder="Lịch học mong muốn" name="lichhoc" id=""> </div>
      </div>

        
      </div> 
      
     
       <button type="submit" name="submit" class="btn btn-primary w-50 container mt-2">Gửi</button>

   </div>

   </div>

</form>
<?php 
      if(isset($thanhcong) && in_array('add_success', $thanhcong)) {
         $message = "Đăng kí thành công";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('location: user?controller=view_user&action=view_user');
      }
       ?>
</div>
