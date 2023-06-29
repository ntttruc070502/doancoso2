<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width= , initial-scale=1.0">
  <title>Đăng nhập</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/1147679ae7.js"></script>
     <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="../../../User/Public/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../User/Public/css/template.css">
        <link rel="stylesheet" type="text/css" href="../../User/Public/style.css">
  
        <link rel="stylesheet" type="text/css" href="test.css">
        <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" href="../lib/w3.css">
    <style>
    :root{
                --bg2: #3498db;
            }
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body{
                display: flex;
                width: 100vw;
                height: 100vh;
                background-image: url(../User/Public/img/bia2.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .container{
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.7);
                display: flex;
                align-items: center;
                justify-content: center;
            }
            form{
                width: 350px;
                height: 400px;
                background: #fff;
                background: transparent;
                color: #fff;
            }
            form h1{
                
                position: relative;
                margin: 40px 0 30px;
                padding-bottom: 12px;
                width: fit-content;
                font-size: 20px;

            }
            form h1::before{
                
                content: "";
                position: absolute;
                display: block;
                width: 100%;
                height: 5px;
                background:var(--bg2);
                bottom: 0;
            }
            form button{
                width: 100%;
                height: 35px;
                border: 2px solid var(--bg2);
                cursor: pointer;
                background: transparent;
                color: #fff;
            }
            .form-field{
                margin-bottom: 30px;
                position: relative;
            }
            .form-field input{
                width: 100%;
                height: 45px;
                padding-left: 30px;
                border: none;
                border-bottom: 2px solid var(--bg2);
                outline: none;
                font-size: 16px;
                background: transparent;
            }
            .form-field input::placeholder{
                color: #fff;
            }
            .form-field i{
                position: absolute;
                font-size: 20px;
                line-height: 45px;
            }
        </style>
</head>
<body>
  <div class="container">
            <form method="POST" action=""> 
                <h1>Đăng nhập</h1>
                
                <div class="form-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="TaiKhoan"  placeholder="Tên đăng nhập">
                 
                </div>
                <div class="form-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="MatKhau" placeholder="Mật khẩu">
                    
                </div>
                <button type="submit" name="loginn" value="Login" style="color: #fff;">Đăng nhập </a></button>

                           
                <p style="padding-top: 10px;">Bạn chưa có tài khoản? Đăng ký <a href="?controller=gia-su&action=register" style="color: rgb(48, 216, 228);"> Tại đây </a></p>
            </form>
        
      
            
</body>
</html>