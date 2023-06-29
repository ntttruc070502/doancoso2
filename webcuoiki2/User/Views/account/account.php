
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
           

      <div class="col-md-12 col-sm-6 col-xs-12">
       
      </div>
            
     
              <div class="column">

                <div class="col-sm-3">          
                
                </div>                  
                    <div class="row">
                      
                      <div class="col-sm-6">
                        <h4 class="card-title ho" name="ten"><?php echo $dataID['ten']; ?> </h4>
                
                  
                      </div>
              
                <div >              
                           <small><a  href="index.php?controller=admin&action=accept&id=<?php echo $value['id'] ?>" class="btn btn-success" name="accept">Xem  <i  class="fa fa-pencil"></i></a></small>                
                  <small><a onclick="return confirm('Bạn có chắc chắn muốn xóa không')" href="index.php?controller=admin&action=delete&id=<?php echo $value['id'] ?>" class="btn btn-outline-danger btn-xs">Xóa  <i class="fa fa-remove"></i></a></small>
                   
                </div>     
                
                        
              </div> 

                     
              </div>
               
                </div>
            
      </div> 
   </div>

   </div>

</form>

</div>
