<?php 
if(isset($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action='';
}
	$thanhcong=array();
	switch ($action) {
	case 'find-tutor': {
		$tblTable="yeucau";
		$data=$db->getAllData($tblTable);
		require_once('User/Views/toturinf/find_tutor.php');
		break;
	}
	case 'dangKygiaSu': { 
		if(isset($_GET['id'])) {
			if($id=$_GET['id']) {
				$tblTable="yeucau";
				if(isset($_POST['submit'])) {
					$tenphuhuynh=$_POST['tenphuhuynh'];
					$diachi=$_POST['diachi'];
					$sdtphuhuynh=$_POST['sdtphuhuynh'];
					$lophoc=$_POST['lophoc'];
					$lichhoc=$_POST['lichhoc'];
			if($db->insertPhuHuynh($tenphuhuynh, $diachi, $sdtphuhuynh, $lophoc, $lichhoc, $id)) {
				echo "<script>alert('Yêu cầu thuê gia sư của bạn đang được xem xét');</script>";
				echo "<script>document.location='user?controller=view_user&action=view_user'</script>";
			} else {
				 	echo "Thất bại";
				}
			}
		}			
	}
	require_once('User/Views/toturinf/dangKygiaSu_view.php');
		break;
	}
	case 'timkiem': {
		if(isset($_GET['tukhoa'])) {
			$key=$_GET['tukhoa'];
			$tblTable="yeucau";
			$data_search=$db->SearchData($tblTable, $key);
			if(($data_search=$db->SearchData($tblTable, $key))==null) {
				
				echo "Người dùng này hiện chưa tồn tại";
				die();

			}
		}
		require_once('User/Views/parents/search_tutor.php');
		break;
	}	
		default:
			// code...
			break;
			
	}
	 ?>
 