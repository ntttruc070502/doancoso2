
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <style type="text/css">
   input {
      margin-bottom: 10px;
   }
</style>
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
            <h3>Đăng ký ngay để trở thành gia sư !</h3>
      <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"> <input type="file" class="form-control w-50 container" placeholder="Tên đăng Nhập" name="anh" id="" ></div>
      </div>
            
      <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="khoi"> <input type="text" class="form-control w-50 container" placeholder="Tên đăng Nhập" name="ten" id="" value="<?php echo $dataID['ten']; ?>"></div>
      </div>
      <div class="col-md-12 col-sm-6 col-xs-12">
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

         <div class="col-md-12 col-sm-6 col-xs-12">
         <div class="gioitinh"><input type="text" class="form-control w-50 container" placeholder="Giới tính" name="gioitinh" id=""value="<?php echo $dataID['gioitinh']; ?>"> </div>
         </div>
      </div>
      <div class="col-md-12 col-sm-6 col-xs-12 ">
         <div class="khoi"> <textarea class="form-control w-50 container" id="exampleFormControlTextarea1" rows="3" name="gioithieu"  placeholder="Giới thiệu bản thân" value="<?php echo $dataID['gioitinh']; ?>"></textarea> </div>
         <button name="update" type="submit" class="btn btn-outline-success">Cập nhật</button>
						<button type="reset" class="btn btn-outline-danger">Nhập lại</button>
      </div> 
      
     
     

   </div>

   </div>

</form>

</div>














	
	</div> 
</body>
</html>