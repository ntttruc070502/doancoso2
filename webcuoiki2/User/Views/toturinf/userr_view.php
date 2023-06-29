<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/	umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>Document</title>
	<style>
	</style>
</head> 
<body>
	<div class="container">
		<div class="text-xs-center">
 			<h3 class="display-3">Danh sách gia sư </h3>
		</div>
	</div>
	<hr>

	<div class="container">
		<div class="row">
		 
			<div class="card-columns">
				<?php 
				$stt=1;	
				foreach ($data as $value) {
					?>
					<div class="card">
					<img class="card-img-top img-fluid" src="<?= $value['anh'] ?>" alt="Card image cap">		
					<div class="card-block">
						<h4 class="card-title stt"><?php echo "$stt";  ?> </h4>
						
						<h4 class="card-title ten">Tên:<?= $value['ten'] ?> </h4>
			 			<p class="card-text email"> Email:<?= $value['email'] ?> </p>
						<p class="card-text trinhdo">Trình độ:<?= $value['trinhdo'] ?> </p>
						<p class="card-text sdt">Số điện thoại:<?= $value['sdt'] ?> </p>
						<p class="card-text monhoc">Môn giảng dạy:<?= $value['monhoc'] ?> </p>
						<p class="card-text monhoc">Giới tính:<?= $value['gioitinh'] ?> </p>
						<p class="card-text monhoc">Gioithieu:<?= $value['gioithieu'] ?> </p>
						
						<small><a  href="index.php?controller=gia-su&action=accept&id=<?php echo $value['id'] ?>" class="btn btn-success" name="accept">Phê duyệt  <i  class="fa fa-pencil"></i></a></small>
						<small><a  href="index.php?controller=gia-su&action=edit&id=<?php echo $value['id'] ?>" class="btn btn-warning">Sửa  <i  class="fa fa-pencil"></i></a></small>
						<small><a onclick="return confirm('Bạn có chắc chắn muốn xóa không')" href="index.php?controller=gia-su&action=delete&id=<?php echo $value['id'] ?>" class="btn btn-outline-danger btn-xs">Xóa  <i class="fa fa-remove"></i></a></small>
						
					</div>
				</div>
				<?php 
				$stt++;
			}
				 ?>
				
					
				
					
			
			</div> <!-- end row -->
		</div>
		<div class="container">
	
</body>
</html>