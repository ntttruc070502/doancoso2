<?php 


if(isset($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action='';
}

	$thanhcong=array();
switch ($action) {
	case 'add':{
			if(isset($_POST['save'])) {
			$ten=$_POST['ten'];
			$email=$_POST['email'];
			$sdt=$_POST['sdt'];
			$trinhdo=$_POST['trinhdo'];
			$monhoc=$_POST['monhoc'];
			$anh="Fileuploadd".basename($_FILES["anh"]["name"]);
			$gioitinh=$_POST['gioitinh'];
			$gioithieu=$_POST['gioithieu'];


			//Upload ảnh
				$target_dir = "Fileuploadd/";
			$target_file = $target_dir . basename($_FILES["anh"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			  $check = getimagesize($_FILES["anh"]["tmp_name"]);
			  if($check !== false) {
			    echo "File is an image - " . $check["mime"] . ".";
			    $uploadOk = 1;
			  } else {
			    echo "File is not an image.";
			    $uploadOk = 0;
			  }
			}

			// Check if file already exists
		
			// Check file size
			if ($_FILES["anh"]["size"] > 500000) {
			  echo "Sorry, your file is too large.";
			  $uploadOk = 0;
			}

			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			  $uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			  echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			  if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
			    // echo "The file ". htmlspecialchars( basename( $_FILES["anh"]["name"])). " has been uploaded.";
			  } else {
			    echo "Sorry, there was an error uploading your file.";
			  }
			}
			// $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

			// 	$anh=$protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']."Fileuploadd/".basename($_FILES["anh"]["name"]);
			$anh="http://localhost/Webcuoiki/Fileuploadd/".basename($_FILES["anh"]["name"]);

				

			if($db->insertData($ten, $email, $sdt, $trinhdo, $monhoc, $anh, $gioitinh, $gioithieu)) {
				$thanhcong[]='add_success';
				echo "<script>alert('Yêu cầu trở thành gia sư của bạn đang được xem xét');</script>";
				echo "<script>document.location='user?controller=view_user&action=view_user'</script>";
				// header('location: user?controller=view_user&action=view_user'); 
			} 

		}
		require_once('User/Views/toturinf/tutor_view.php');
		break;	
	}
	case 'edit': {
		if(isset($_GET['id'])) {
			$id=$_GET['id']; 
			$tblTable="gs";
			$dataID=$db->getDataID($tblTable, $id);

			if(isset($_POST['update'])) {
				$ten=$_POST['ten'];
				$email=$_POST['email'];
				$sdt=$_POST['sdt'];
				$trinhdo=$_POST['trinhdo'];
				$monhoc=$_POST['monhoc'];
				$gioitinh=$_POST['gioitinh'];
				$gioithieu=$_POST['gioithieu'];
				
				if($db->UpdateData($id ,$ten, $email, $sdt, $trinhdo, $monhoc, $gioitinh, $gioithieu)) {
					header('location: index.php/user?controller=gia-su&action=list');
				} else {
					echo "Update thất bại";
				}

			}
		}
		require_once('Admin/Views/edit_giasu.php');
		break;
	}
	
	case 'phuhuynh': {
		
		$tblTable="yeucau";
		$data=$db->getAllData($tblTable);

		// if(isset($_POST['phuhuynh'])) {
		// 	$ten=$_POST['ten'];
		// 	$diachi=$_POST['diachi'];
		// 	$sdt=$_POST['sdt'];
		// 	$lophoc=$_POST['lophoc'];
		// 	$lichhoc=$_POST['phonghoc'];
		// 	var_dump($ten);
		// // if($db->insertPhuHuynh($ten, $diachi, $sdt, $lophoc, $phonghoc)) {
		// // 		$thanhcong[]='add_success'; 
		// // 	} 

		// }
		include_once('User/Views/toturinf/find_tutor.php');
		break;	
	} 
	case 'login': {		
		if (isset($_POST['loginn'])) {
		$TaiKhoan=$_POST['TaiKhoan'];
		$MatKhau=$_POST['MatKhau'];	
		$db->login($TaiKhoan, $MatKhau);	
		}
	
	require_once('User/Views/login/login.php');
	break;
}
	case 'register': {
		if(isset($_POST['submitt'])) {
			$ho=$_POST['ho'];
			$ten=$_POST['ten'];
			$gioitinh=$_POST['gioitinh'];
			$sdt=$_POST['sdt'];
			$email=$_POST['email'];
			$diachi=$_POST['diachi'];
			$taikhoan=$_POST['taikhoan'];
			$matkhau=$_POST['matkhau'];
			
			$db->register( $ho, $ten, $gioitinh, $sdt, $email, $diachi, $taikhoan, $matkhau);

			// if($db->register( $Ho, $Ten, $GioiTinh, $Sdt, $Email, $DiaChi, $TaiKhoan, $MatKhau)) {
			// 	echo "Thành công";
			// } else {
			// 	echo "Thất bại";
			// }
		}

		require_once('User/Views/login/register.php');
		break;
	}
	
	default: {//Không chọn gì cả thì login
		
		echo "hii";
		break;
	}

}
// include("User/Views/header_footer/footer.php");
 ?>
 <!-- <link rel="stylesheet" type="text/css" href="../User/Public/style.css"> -->