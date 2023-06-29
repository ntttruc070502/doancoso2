<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../User/Public/css/ThacMac.css">
    <link rel="stylesheet" href="../template/css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../template/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../template/css/template.css">
    <link rel="stylesheet" type="text/css" href="../templatecss/style.css">
    <link rel="stylesheet" type="text/css" href="test.css">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" href="../lib/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    
</head>
<body>
    <style>
    .banner {
        background-image: url(../User/Public/img/hotro.jpg);
    }

         
    </style>
    
    
    <div class="banner">
    <div class="den">
    <div class="cot">
        <div class="logo">
            <span><b>Education</b></span>
        </div>
        <div class="menu">
            <label for="nav-mobile-input" class="bars">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
            </label>

            <ul>
                <li>
                   <a href="?controller=trangchu">Trang chủ</a>
                </li>
                
               <li><a href=""onclick="alert('Bạn cần phải đăng nhập mới thực hiện được chức năng này')" value=""/>Tìm Gia Sư</a></li>
                <li><a href="" onclick="alert('Bạn cần phải đăng nhập mới thực hiện được chức năng này')" value=""/>Trở Thành Gia Sư</a></li>
                <li>
                    <a href="?controller=gia-su&action=login">Đăng nhập</a>
                </li>
                <li>
                    <a href="?controller=gia-su&action=register">Đăng ký</a>
                </li>
                
            </ul>
            </div>
        </div>

        <form>
            <input class="timkiem" type="text" name="search" placeholder="Bạn có câu hỏi cần trợ giúp ??" style="
                width: 70%; height: 50px; margin-top: 300px; margin-left: 150px; border: 1px solid black; border-radius: 5px;">
    </form>

        <label for="nav-mobile-input" class="bars">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
        </label>
        <input type="checkbox" name="" class="nav__input" id="nav-mobile-input"> 
        <label for="nav-mobile-input" class="nav__overlay"></label> 
        

       

        <div class="nav__overlay">

        </div>
        <div class="nav__mobile">
            <label for="nav-mobile-input" class="icon"><i class="fas fa-times"></i></label>
            
           
            
            <ul class="nav__mobile-list">
                <li>
                    <a href="index.php/user?controller=trangchu" class="nav_mobile-link">Trang chủ</a>
                </li>
                <li>
                    <a href="" class="nav_mobile-link">Các khóa học</a>
                </li>
                <li>
                    <a href="" class="nav_mobile-link">Tìm kiếm gia sư</a>
                </li>
                <li>
                    <a href="" class="nav_mobile-link">Nhà của tôi</a>
                </li>
                <li>
                    <a href="DangNhap.html" class="nav_mobile-link">Đăng nhập</a>
                </li>
                
                  <form>
                    <input class="timkiem2" type="text" name="search" placeholder="Bạn có câu hỏi cần trợ giúp ??" style="width: 80%; height: 30px; border-color: rgb(38, 0, 209);" >
            </form>
                
            </ul>
        </div>
    
        </div>
    </div>
</div>


<div id="myDIV"> 
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8">
          <h1><u><b>Thế nào là một gia sư ? </b></u></h1>
          <p style="font-size: 20px;"><i>Gia sư hay giáo viên dạy kèm là việc một người thực hiện việc dạy, truyền đạt kiến thức tại nhà của đối tượng theo học, theo hình thức dạy kèm tại nhà. Gia sư tại gia hiện nay là một dịch vụ khá phát triển do nhu cầu học tại nhà và học kèm, phụ đạo của học sinh tăng cao. Nội dung giảng dạy của gia sư rất đa dạng nhưng tựu trung lại là các chương trình học phổ thông cho học sinh như toán, lý, hoá, văn, ngoại ngữ. Đối tượng gia sư dạy kèm thường là các em học sinh và thường ôn thi tốt nghiệp hoặc đại học. Nghề gia sư có thể là tự phát, người dạy có thể liên hệ trực tiếp với người học hoặc cũng có thể thông qua các trung tâm dịch vụ để giới thiệu, điều phối</i></p>
         
        </div>
        
        </div>
      </div>
    
    <br>
    <br><br>
    <div id="HoTroHoc">
    <div class="container-fluid" >
      <div class="row">
        <div class="col-sm-8" style="font-size: 20px;">
          <h1><u><b>HỖ TRỢ TÌM KIẾM GIA SƯ </b></u></h1>
        <hr width="100%" >
        <a href="#demo7"  data-toggle="collapse"  >Làm thế nào để thuê gia sư</a>       
        <div id="demo7" class="collapse">
           <li>B1: Đăng ký tài khoản</li>
           <li>B2: Thực hiện đăng nhập</li>
           <li>B3: Chọn chức năng tìm gia sư</li>
           <li>Thực hiện tìm gia sư mong muốn(Trình độ, môn giảng dạy...) sau đó nhấn nút đăng ký</li>
           <li>Form điền thông tin hiện ra, hãy nhập đầy đủ thông tin của bạn</li>
            <li>Ok rồi ^^! Giờ thì bạn chỉ cần đợi vài ngày sẽ có gia sư liên lạc để trao đổi những vấn đề cụ thể với bạn nhé.</li>
        </div>
        <br>
    <a href="#demo8"  data-toggle="collapse"  >Tôi muốn đăng ký để trở thành gia sư phải làm thế nào ?</a>       
        <div id="demo8" class="collapse">
          <li>B1: Thực hiện đăng ký tài khoản</li>
          <li>B2: Thực hiện đăng nhập</li>
          <li>B3: Ở phần giao diện người dùng, nhấn vào đăng ký tìm gia sư</li>
          <li>B4: Form đăng ký hiện ra, bạn hãy điền đầy đủ tất cả thông tin</li>
          <li>B5: Hệ thống sẽ xác nhận thông tin của bạn và phê duyệt lên website</li>
          <li>B6: Khi nào có phụ huynh đăng ký bạn làm gia sư, hệ thống sẽ ngay lập tức gửi mail cho bạn</li>

        </div>
        <br>
        <a href="#demo9"  data-toggle="collapse" >Hỗ trợ kỹ thuật</a>       
        <div id="demo9" class="collapse">
          <li>Hãy nhấn vào ô báo lỗi hoặc liên hệ theo số 0909090909 đề được hỗ trợ </li>
        </div>
        <br>
        <a href="#demo10"  data-toggle="collapse" >Có vấn đề thắc mắc</a>       
        <div id="demo10" class="collapse">
          <li>Hãy để lại comment ở phần bình luận hoặc đăng sự thắc mắc của bạn lên diễn đàn để mọi người cùng giúp đỡ nhé!</li>
        </div>
        </div>
        </div>
    </div>
        </div>
      
        <hr width="100%"> 
      
      <div id="CauHoi">
    <div class="jumbotron">
      <div class="container-fluid text-center">
        <h2>Các câu hỏi thường gặp</h2>
        <h4><i>Đừng lo ! Đã có chúng tôi hỗ trợ bạn</i></h4>
        <br>
        <div class="row">
          <div class="col-sm-6">
            <span class="glyphicon glyphicon-off"></span>
            <h4>
            
                <a href="#demo"  data-toggle="collapse"data-target="#demo">Trung tâm có chất lượng không</a>       
                <div id="demo" class="collapse">   
                  <p style="text-align: left;"><i><b>Hầu hết các gia sư sẽ được xem xét thông tin kỹ càng trước khi phê duyệt nên các bạn có thể hoàn toàn yên tâm về điều này</b></i></p> 
                  
                </div>
            </h4>
          </div>
          <div class="col-sm-6">
            <span class="glyphicon glyphicon-heart"></span>
            <h4>
              <a href="#demo1"  data-toggle="collapse" data-target="#demo1">Làm sao để đăng ký và đăng nhập</a>
           <div id="demo1" class="collapse">
             <div class="DangNhap" style="text-align: left;">
               <p><i><b>Để vào trang web  , bạn cần thực hiện các bước sau:</b></i></p> 
               <i><p>Đăng nhập</p>
                <p>Bước 1: Bạn tìm chọn nút Đăng nhập bên góc phải màn hình trang chủ.<br>
                  Bước 2: Điền tài khoản và mật khẩu của bạn vào ô trống.<br>
                  Bước 3: Bấm nút Đăng nhập.</i></p>
             </div>
         </div>
       </h4>        
     </div>
          <div class="col1">
          <div class="col-sm-6">
            <span class="glyphicon glyphicon-lock"></span>
            <h4>
              <a href="#demo2"  data-toggle="collapse" data-target="#demo2">Tôi có thể liên lạc với gia sư bằng cách nào?</a>
       <div id="demo2" class="collapse">
         <div class="ND" style="text-align: left;">
          <p><i>Sau khi bạn đăng ký gia sư giảng dạy thành công sẽ sớm có gia sư chủ động trực tiếp liên lạc với bạn</i></p>
         </div>
       </div>
          </h4>
          </div> 
          <div class="col-sm-6">
            <span class="glyphicon glyphicon-leaf"></span>
            <h4>
              <a href="#demo3"  data-toggle="collapse" data-target="#demo3">Mức phí có cao không</a>
              <div id="demo3" class="collapse">
                <div class="BT" style="text-align: left;">
                  <p><i><b>Hầu hết những bạn đăng ký làm gia sư là sinh viên nên mức phí đều không quá cao</b></i></p>
                    
                </div>
              </div>
            </h4>
          </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    
      </div>


<div class="container-fluid bg-grey" style="background-color: rgb(202, 236, 247);">
          
    <div class="row1">
      <div class="col-sm-5"  style="font-size: 20px; padding: 30px">
        <p>Liên lạc với chúng tôi</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> Hải Châu,Đà Nẵng</p>
        <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
        <p><span class="glyphicon glyphicon-envelope"></span> S4Scompany@study.com</p>
        <p>Hoặc thông qua</p>
        <p>
          <a href=""><img src="fb.jpg" alt="Facebook" width="40px"></a>
          <a href=""><img src="intar.jpg" alt="Instagram" width="40px"></a>
          <a href=""><img src="mess.jpg" alt="Mess" width="40px"></a>
          <a href=""><img src="yt.jpg" alt="Youtube" width="40px"></a>
        </p>
      </div>
      <div class="col-sm-7">
        <div class="row1">
          <h2 class="text-center">ĐÁNH GIÁ</h2>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="name" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="sub" style="width: 100px;">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  
  
  
</body>
</html>