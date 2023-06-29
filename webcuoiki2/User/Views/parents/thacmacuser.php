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
                   <a href="?controller=view_user&action=view_user">Trang chủ</a>
                </li>
                
               <li>
                <a href="?controller=phuhuynh&action=find-tutor">Tìm gia sư</a>
              </li>
              
                <li>
                 <a href="?controller=gia-su&action=add">Trở thành gia sư</a>
                </li>
                <li>
                    <a href="?controller=trangchu ">Đăng xuất</a>
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
          <h1><u><b>Thế nào là học trực tuyến ? </b></u></h1>
          <p style="font-size: 20px;"><i>Giáo dục trực tuyến (hay còn gọi là e-learning) là phương thức học ảo thông qua một máy vi tính,điện thoại 
            thông minh nối mạng đối với một máy chủ ở nơi khác có lưu giữ sẵn bài giảng điện tử và phần mềm cần thiết để có thể hỏi/yêu cầu/ra đề cho học sinh học trực tuyến từ xa</i></p>
         
        </div>
        
        </div>
      </div>
    
    <br>
    <br><br>
    <div id="HoTroHoc">
    <div class="container-fluid" >
      <div class="row">
        <div class="col-sm-8" style="font-size: 20px;">
          <h1><u><b>HỖ TRỢ HỌC TRỰC TUYẾN </b></u></h1>
        <hr width="100%" >
        <a href="#demo7"  data-toggle="collapse"  >Làm thế nào để chuẩn bị cho việc học trực tuyến ?</a>       
        <div id="demo7" class="collapse">
           <li>Hãy chắc chắn rằng kết nối mạng của bạn tốt. Bạn có thể ngồi gần bộ định tuyến wifi hoặc cài đặt bộ chuyển đổi wifi.</li>
           <li> Hãy tìm một nơi yên tĩnh để học.</li>
           <li>  Đóng tất cả các tab không cần thiết trong trình duyệt của bạn.</li>
           <li>Hãy đầu tư vào bộ tai nghe nếu bạn không có sẵn. Bạn sẽ thấy được những tài liệu thu âm sẽ dễ nghe hơn nhiều nếu bạn có dùng tai nghe. 
             Và sẽ còn tốt hơn nếu tai nghe của bạn có micro kèm theo.</li>
           <li> Hãy đọc các tài liệu học mà giảng viên đã chuẩn bị cho bạn - bài giảng trên PowerPoint, các tài liệu, bài đọc. Những tài liệu học đó sẽ có hầu hết những gì bạn cần biết.
            Đừng quên ghi lại những ý chính, và hãy luôn nghĩ về những câu hỏi mà bạn muốn tìm lời giải đáp khi đọc tài liệu học. Đây là một cách để giúp bạn lưu giữ và nhớ những thông tin mà bạn đọc được! Nếu bạn không tìm được 
            lời giải đáp cho câu hỏi của mình khi đọc, hãy hỏi giảng viên của bạn.</li>
            <li> Nếu bạn không hiểu điều gì đó, hãy đăng câu hỏi của bạn lên diễn đàn hoặc dùng công cụ trò chuyện trong khóa học. Bạn sẽ thấy các bạn học và giảng viên thường sẵn sàng giúp đỡ. Và đừng ngại khi giúp đỡ người khác với câu hỏi
               của họ trên diễn đàn, hãy nhớ rằng một trong những cách học điều gì đó tốt nhất chính là thử và dạy nó.</li>
            <li> Bạn nên có một lịch trình nhất định dành riêng cho việc học. Hầu hết lý do mà sinh viên trượt môn học không phải là họ không đủ giỏi, mà họ bị tụt lại trong quá trình học nên không thể bắt kịp tiến độ. Vì vậy, hãy làm việc chăm chỉ mỗi ngày.
               Dành thời gian nhất định để học từng khóa học. Và điều không thể quên, hãy có những khoảng nghỉ ở giữa những buổi học nhé!</li>
        </div>
        <br>
    <a href="#demo8"  data-toggle="collapse"  >Làm thế nào để truy cập vào môn học ?</a>       
        <div id="demo8" class="collapse">
          <li>Sử dụng tài khoản bạn đã đăng ký để truy cập vào khóa học !</li>
        </div>
        <br>
        <a href="#demo9"  data-toggle="collapse" >Hỗ trợ kỹ thuật</a>       
        <div id="demo9" class="collapse">
          <li>Hãy nhấn vào ô báo lỗi hoặc liên hệ theo số 0909090909 đề được hỗ trợ </li>
        </div>
        <br>
        <a href="#demo10"  data-toggle="collapse" >Tương tác với giảng viên</a>       
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
            
                <a href="#demo"  data-toggle="collapse"data-target="#demo">Học online có hiệu quả không?</a>       
                <div id="demo" class="collapse">   
                  <p style="text-align: left;"><i><b>Các khóa học trực tuyến tại S4S đều mang tính thực tiễn cao, áp dụng được ngay. Khi học online tại S4S bạn sẽ:</b></i></p> 
                  <div class="HocOnl" style="text-align: left;">
                    <p>1. Tiết kiệm và linh hoạt về thời gian</p>
                    <p>2. Tiết kiệm chi phí và công sức</p>
                    <p>3. Có thể lưu trữ được các bài học, nhằm thuận tiện cho việc ôn tập lại kiến thức</p>
                    <p>4. Tiết kiệm và linh hoạt về thời gian</p>
                    <p>5. Tiếp cận và thuận</p>
                  </div>
                </div>
            </h4>
          </div>
          <div class="col-sm-6">
            <span class="glyphicon glyphicon-heart"></span>
            <h4>
              <a href="#demo1"  data-toggle="collapse" data-target="#demo1">Làm sao để đăng ký và đăng nhập</a>
           <div id="demo1" class="collapse">
             <div class="DangNhap" style="text-align: left;">
               <p><i><b>Để tham gia khóa học, bạn cần thực hiện các bước sau:</b></i></p>
               <i><p>a) Đăng ký tài khoản:</p></i>
               <p>  Bước 1: Bạn tìm chọn nút Đăng ký bên góc phải màn hình trang chủ.<br>
                Bước 2: Điền đầy đủ thông tin của bạn vào các ô trống. Các thông tin cần thiết để đăng ký:
                Email, Mật khẩu, Họ tên, Số điện thoại, Giới tính, Ngày sinh, Địa chỉ. <br>                                  
                Bước 3: Bấm nút Đăng ký tài khoản. Hệ thống sẽ gởi mail để bạn kích hoạt tài khoản</p>
              </i>
               <i><p>b) Đăng nhập</p>
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
              <a href="#demo2"  data-toggle="collapse" data-target="#demo2">Tôi có thể truy cập vào nội dung khóa học trong bao lâu?</a>
       <div id="demo2" class="collapse">
         <div class="ND" style="text-align: left;">
          <p><i>Trung Tâm không giới hạn thời gian cũng như số lần truy cập, bạn có thể tham gia khóa học bất cứ khi nào và học đi học lại nhiều lần.</i></p>
         </div>
       </div>
          </h4>
          </div> 
          <div class="col-sm-6">
            <span class="glyphicon glyphicon-leaf"></span>
            <h4>
              <a href="#demo3"  data-toggle="collapse" data-target="#demo3">Mỗi bài học trực tuyến gồm những nội dung gì</a>
              <div id="demo3" class="collapse">
                <div class="BT" style="text-align: left;">
                  <p><i><b>Mỗi bài học trực tuyến trên website được xây dựng gồm nhiều nội dung nhằm giúp học viên dễ dàng tiếp thu và nắm vững kiến thức:</b></i></p>
                  <p><i>
                    1. Bài giảng: Là nội dung quan trọng nhất, toàn bộ nội dung môn học được các giáo viên kinh nghiệm trực tiếp giảng dạy, sẽ giúp học viên dễ dàng tiếp nhận kiến thức.<br>
                    2. Giới thiệu môn học: Là nội dung chính của bài giảng được hệ thống hóa một cách khoa học và chi tiết, nhằm giúp học viên khái quát lại một cách cụ thể và ngắn gọn nội dung bài học.<br>
                    3. Bài tập thực hành: Đây là các bài tập giảng viên cung cấp cho bạn, bạn có thể làm bài để vận dụng các kiến thức đã học và nộp lại cho giảng viên, giảng viên sẽ xem và trả lời bạn.
                  </i></p>
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