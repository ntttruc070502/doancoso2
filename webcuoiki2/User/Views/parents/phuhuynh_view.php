<?php 
require_once('User/View/toturinf/find_tutor.php')
 ?>

<div id="id01" class="modal">
                      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                      <form class="modal-content" action="/action_page.php">
                        <div class="container">
                          <h1>Đăng ký </h1>
                          <p><i>Hãy để chúng tôi đồng hành cùng con của bạn !</i></p>
                          <hr>
                          <label for="email"><b>Họ Tên</b></label>
                          <input type="text" placeholder="Nhập họ tên của bạn" name="Name" required>
                    
                          <label for="address"><b>Địa Chỉ</b></label>
                          <input type="text" placeholder="Nhập địa chỉ" name="address" required>
  
                          <label for="address"><b>SDT</b></label>
                          <input type="text" placeholder="Nhập SDT" name="address" required>
                          <label for="address"><b>Lớp học</b></label>
                          <input type="text" placeholder="Hiện đang học lớp" name="address" required>
                          
                          <label for="address"><b>Lịch học</b></label>
                          <input type="text" placeholder="VD: 2 buổi/1 tuần" name="address" required>                        
                          <div class="clearfix">
                             <button  name="phuhuynh" type="submit" class="signupbtn">Đăng ký</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    
                    <script>
                    // Get the modal
                    var modal = document.getElementById('id01');
                    
                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                      if (event.target == modal) {
                        modal.style.display = "none";
                      }
                    }
                    </script>
                  
                </div>     