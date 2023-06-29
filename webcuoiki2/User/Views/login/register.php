<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Đăng ký</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="../User/Public/css/register.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/1147679ae7.js"></script>
        <style>
           
            body{
                display: flex;
                width: 100vw;
                height: 100vh;
                background: url(../User/Public/img/bia2.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
       
            
        </style>
    </head>
    <body>
        <div class="container">
            <form method="POST" action="">
                <h1>Đăng ký</h1>
                <div class="form-field">
                    <div class="col-sm-6">
                        <input type="text" name ="ho" placeholder="Họ ">
                      </div>
                      <div class="col-sm-6" >
                        <input type="text" name ="ten" placeholder="Tên">
                      </div> <br>
                    
                </div>
                <div class="form-field">
                    <input type="text" name= "gioitinh" placeholder="Giới tính">
                </div>
                <div class="form-field">
                    <input type="text" name="sdt" placeholder="Số điện thoại">
                </div>
                <div class="form-field">
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="form-field">
                    <input type="text" name="diachi" placeholder="Địa chỉ">
                </div>
                <div class="form-field">
                    <input type="text" name="taikhoan" placeholder="Tên đăng nhập">
                </div>
                <div class="form-field">
                    <input type="password" name="matkhau" placeholder="Mật khẩu">
                </div>
               <button type="submit" name="submitt" value="register" style="color: #fff;">Đăng ký</a></button>
              <p style="padding-top: 10px;">Nếu đã có tài khoản? Đăng nhập <a href="?controller=gia-su&action=login" style="color: rgb(48, 216, 228);"> Tại đây </a></p>
                
                
            </form>

        </div>
    </body>
</html>