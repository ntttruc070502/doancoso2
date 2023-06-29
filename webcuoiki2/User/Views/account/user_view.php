<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
   <link rel="stylesheet" href="../">
    <link rel="stylesheet" href="../template/css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../User/Public/css/template.css">
        <link rel="stylesheet" type="text/css" href="../User/Public/style.css">
    <link rel="stylesheet" href="../lib/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    
    
    <style >
        
            .banner {
                background-image: url(../User/Public/img/bia.jpg);      
            }
            .menu li a {
                text-align: right;

            }
            </style>
</head>
<body>




<div class="banner">
    <div class="den">
        <div class="cot">
            <div class="logo" style="font-family: 'Caveat';"><span><b>Education</b></span></div>
            <div class="menu">
                <label for="nav-mobile-input" class="bars"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg></label>
                <ul>
                    <li><a href="?act=home">Trang chủ</a></li>
                   
                   
                    <li><a href="?controller=phuhuynh&action=find-tutor">Tìm Gia Sư</a></li>
                    <li><a href="?controller=gia-su&action=add">Trở Thành Gia Sư</a></li>
                     <li><a href="?controller=view_user&action=thacmacuser">Giải Đáp</a></li>
                    <li> 
                        <div class='dropdown' style='display: block;'>
                          <a ><i onclick="hamDropdown()" class="nut_dropdown fas fa-user-circle"></i></a>
			                      <div class="noidung_dropdown">
			                        <table style="margin:5px;">
			                          
			    	                   
			    	                    <tr>
			    		                    <td><a href="?controller=trangchu">Đăng Xuất</a></td>
			        	                </tr>
			                        </table>
			                      </div>
                        </div>    
                    </li>
                </ul>
            </div>
        </div>
        <label for="nav-mobile-input" class="bars"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg></label>
        <input type="checkbox" name="" class="nav__input" id="nav-mobile-input"> 
        <label for="nav-mobile-input" class="nav__overlay"></label> 
        <div class="nav__overlay"></div>
        <div class="nav__mobile">
            <label for="nav-mobile-input" class="icon"><i class="fas fa-times"></i></label>   
            <ul class="nav__mobile-list">
                <li><a href="" class="nav_mobile-link">Nhà của tôi</a></li>
                <li><a href="" class="nav_mobile-link">Các khóa học</a></li>
                <li><a href="" class="nav_mobile-link">Giải đáp thắc mắc</a></li>
                <li><a href="" class="nav_mobile-link">Tìm kiếm gia sư</a></li>
                <li><a href="" class="nav_mobile-link">Đăng nhập</a></li>
            </ul>
        </div>
        <div class="caption">
            <div class="logo"><h1 style="padding-top: 20%; font-size: 180px;">Education</h1></div>
            <div class="caption1"><p><i>"Giáo dục là vũ khí mạnh nhất nó có thể thay đổi cả thế giới này".</i></p></div>
        </div>
    </div>
</div>
<script>
    function hamDropdown() {
      document.querySelector(".noidung_dropdown").classList.toggle("hienThi");
    }
      window.onclick = function(e) {
        if (!e.target.matches('.nut_dropdown')) {
          var noiDungDropdown = document.querySelector(".noidung_dropdown");
          if (noiDungDropdown.classList.contains('hienThi')) {
            noiDungDropdown.classList.remove('hienThi');
          }
        }
    }
</script>
<style>
    .banner {
    background-image: url(../User/Public/img/bia.jpg);
    height: 100%;
    background-size: cover;
    position: relative;
}
</style>
<div class="daykem4">
   
        <div style="text-align: center; color: brown; font-size:50px">Thuê một gia sư cho bất kỳ môn học mà bạn yêu thích</div>

    <div>
        <div class="container">
            <div class="box">
                <img src="../User/Public/img/9.jpg" id="anh4">
                <span>Gia sư Toán</span>
            </div>
            <div class="box">
                <img src="../User/Public/img/10.jpg" id="anh4">
                <span>Gia sư Lý</span>
            </div>
            <div class="box">
                <img src="../User/Public/img/48.webp" id="anh4">
                <span>Gia sư Hóa</span>
            </div>
        </div>
    </div>
</div>
<div class="daykem4">
   
    <div style="text-align: center; color: brown; font-size:50px">Lộ trình học chi tiết, rõ ràng</div>

<div>
    <div class="container">
        <div class="box">
            <img src="../User/Public/img/toan.jpg" id="anh4">
            <span>Học lý thuyết</span>
        </div>
        <div class="box">
            <img src="../User/Public/img/van.jpg" id="anh4">
            <span>Học qua bài giảng</span>
        </div>
        <div class="box">
            <img src="../User/Public/img/anh.jpg" id="anh4">
            <span>Tự kiểm tra</span>
        </div>
    </div>
</div>
</div>


<div class="daykem">
    <div class="tieudedaykem">
       
        <p>Thầy cô giảng dạy đầy chất lượng, uy tín</p>
    </div>

    <div class="daykem1">
        <div>
            <figure class="snip0016">
                <img src="../User/Public/img/4.jpg">
                <figcaption>
                <p>Thầy Nguyễn Quốc Chí</p> <br>
                <p>Giảng viên với hơn 10 năm kinh nghiệm</p>
                </figcaption>     
            </figure>
            <p id="daykem11"><a href="monhoc.html">Giáo viên  <span>Môn Toán</span></a></p>
            
        </div>
        <div>
            <figure class="snip0016">
                <img src="../User/Public/img/5.jpg">
                <figcaption>
                    <p>Cô: Hoàng Xuân</p> <br>
                    <p>Giáo viên trẻ với gần 500.000 học viên theo dõi </p>
                </figcaption>     
            </figure>
            <p id="daykem11"><a href="monhoc1.html">Dạy môn <span>Tiếng Anh</span></a></p>
        </div>

        <div>
            <figure class="snip0016">
                <img src="../User/Public/img/6.jpg" id="img22">
                <figcaption>
                    <p>Cô: Lê Thị Thu</p> 
                <p>Mang lại niềm yêu thích môn lịch sử cho rất nhiều bạn học sinh</p>
                </figcaption>     
            </figure>
            <p id="daykem11"><a href="monhoc2.html">Dạy môn <span>Lịch Sử</a></span></p>
        </div>
        <div>
            <figure class="snip0016">
                <img src="../User/Public/img/8.png">
                <figcaption>
                    <p>Thầy: Vũ Thế Anh</p> 
                <p>Thạc sĩ chuyên ngành Lí luận và phương pháp dạy học bộ môn Vật Lí</p>
                </figcaption>     
            </figure>
            <p id="daykem11"><a href="monhoc3.html">Dạy môn <span>Vật Lý</a></span></p>
        </div>
    </div>


    <div class="uudiem">
        <div class="uu2">Ưu điểm vượt trội</div>
        <div  class="uu1">
            <div>
                <p id="icon1"><img src="../User/Public/img/4.png"></p>
                <p id="uu11">Giáo dục</p>
                <p>Các bài học được biên soạn kỹ càng, thầy cô chất lượng</p>
            </div>
            <div>
                <p id="icon1"><img src="../User/Public/img/5.png"></p>
                <p id="uu11">Gia sư</p>
                <p>Phụ huynh và gia sư kết nối trực tiếp không phải thông qua trung gian môi giới</p>
            </div>
            <div>
                <p id="icon1"><img src="../User/Public/img/6.png"></p>
                <p id="uu11">Hỗ trợ</p>
                <p>Hỗ trợ 24/7 khi có thắc mắc</p>
            </div>
            <div>
                <p id="icon1"><img src="../User/Public/img/7.png"></p>
                <p id="uu11">Chi phí và thời gian</p>
                <p>Học online mọi lúc mỗi khi có thời gian, giảm thiểu tối đa chi phí học tập </p>
            </div>
        </div>
    </div>
</div>


<footer>
     <div class="container">
         <!--Bắt Đầu Nội Dung Giới Thiệu-->
         <div class="noi-dung about">
             
             <h2>Về Chúng Tôi</h2>
             <p>Là một trong những khu vực đang phát triển trên thế giới, chúng tôi còn nhiều lo lắng. Chúng tôi hiểu rằng thế hệ sau cần một nền tảng giáo dục vững chắc , 
            đã đến lúc cần một cuộc cách mạng trong giáo dục. Bởi đối với chúng tôi, tiếp thu kiến thức 1 cách tốt nhất là quyền lợi chứ không phải là điều gì cần được đặc cách riêng . Đó là lý do mà tại sao chúng tôi phải nỗ lực để xây dựng 1 nền tảng ứng dụng giáo dục thuận tiện
             phục vụ không những cho con bạn mà còn là cho chính bạn</p>
             <ul class="social-icon">
                 <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                 <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
             </ul>
         </div>
         <!--Kết Thúc Nội Dung Giới Thiệu-->
         <!--Bắt Đầu Nội Dung Đường Dẫn-->
         <div class="noi-dung links">
             <h2>Đường Dẫn</h2>
             <ul>
                 <li><a href="#">Trang Chủ</a></li>
                 <li><a href="#">Về Chúng Tôi</a></li>
                 <li><a href="#">Thông Tin Liên Lạc</a></li>
                 <li><a href="#">Dịch Vụ</a></li>
                 <li><a href="#">Điều Kiện Chính Sách</a></li>
             </ul>
         </div>
         <!--Kết Thúc Nội Dung Đường Dẫn-->
         <!--Bắt Đâu Nội Dung Liên Hệ-->
         <div class="noi-dung contact">
             <h2>Thông Tin Liên Hệ</h2>
             <ul class="info">
                 <li>
                     <span><i class="fa fa-map-marker"></i></span>
                     <span>470 Đường Trần Đại Nghĩa, Hoà Hải<br />
                         Quận Ngũ Hành Sơn, Thành Phố Đà Nẵng<br />
                         Việt Nam</span>
                 </li>
                 <li>
                     <span><i class="fa fa-phone"></i></span>
                     <p><a href="#">+84 816 313 464</a>
                        <br />
                        <a href="#">+84 837 222 831</a></p>
                 </li>
                 <li>
                     <span><i class="fa fa-envelope"></i></span>
                     <p><a href="#">dvghuy.20it5@vku.udn.vn</a></p>
                </li>
             </ul>
         </div>
     </div>
 </footer>
 