<?php 
if(isset($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action='';
}
	$thanhcong=array();
		switch ($action) {		
	case 'list': {
		$tblTable="gs";
		$data123=$db->getAllDaTa123();
		$data=$db->getAllData($tblTable);
		if($data==null) {
			echo "Hiện chưa có dữ liệu";
			die();
		}
		require_once('admin/Views/tutor/show_giasu.php');

		break;
	}
	case 'home': {
			require_once('Admin/Views/admin_vieww.php');
		break;
	}
	case 'accept': {
	if(isset($_GET['id'])) {
			$id=$_GET['id']; 
			$tblTable="gs";
			$dataID=$db->getDataID($tblTable, $id);

			if(isset($_POST['pheduyet'])) {
				$ten=$_POST['ten'];
				$email=$_POST['email'];
				$sdt=$_POST['sdt'];
				$trinhdo=$_POST['trinhdo'];
				$monhoc=$_POST['monhoc'];
				$anh=$_POST['anh'];
				$gioitinh=$_POST['gioitinh'];
				$gioithieu=$_POST['gioithieu'];

			if($db->insertDataa($ten, $email, $sdt, $trinhdo, $monhoc,$anh,$gioitinh, $gioithieu)) {
				if($db->Delete($id, $tblTable)) {
				header('location: user?controller=admin&action=accept-tutor');
			} 
		}
				 else {
				 	echo "Thất bại";
				}

			}
		}
		require_once('Admin/Views/tutor/accept_tutor.php');
		break;
	}
	case 'accept-tutor': {
		$tblTable="yeucau";
		$data=$db->getAllData($tblTable);
		require_once('Admin/Views/home.php');
		break;
	}
	case 'delete': {
		if(isset($_GET['id'])) { 
			$id=$_GET['id'];
			$tblTable='gs';

			if($db->Delete($id, $tblTable)) {
				header('location: index.php?controller=admin&action=list');
			}
		}
		else {
			header('location: index.php?controller=admin&action=list');
		}
		break;
	}
	case 'deletee': {
		if(isset($_GET['id'])) {
			$id=$_GET['id'];
			$tblTable='yeucau';

			if($db->Delete($id, $tblTable)) {
				header('location: index.php?controller=admin&action=accept-tutor');
			}
		}
		else {
			header('location: index.php?controller=admin&action=list');
		}
		break;
	} 
	case 'listParent': {
		if(isset($_GET['id'])) {
				if($id=$_GET['id']) {
					$tblTable="phuhuynh";
					$dataID=$db->getAllDataByID($tblTable, $id);	
				} if($dataID==null)  {
					echo "Chưa có phụ huynh nào đăng ký gia sư này";
					die();

				}

	}
		require_once('Admin/Views/parents/listParent.php');
		break;
	}
	case 'timkiem': {
		if(isset($_GET['tukhoa'])) {
			$key=$_GET['tukhoa'];
			$tblTable="yeucau";
			$data_search=$db->SearchData($tblTable, $key);
			if(($data_search=$db->SearchData($tblTable, $key))==null) {	
				echo "Người dùng này không tồn tại";
				die();

			}
		}
		require_once('Admin/Views/Search.php');
		break;
	}
	case 'sendemail': {
		if(isset($_GET['idphuhuynh'])) {
			$idphuhuynh=$_GET['idphuhuynh']; 
			$tblTable="phuhuynh";
			$dataID=$db->getDataPhuHuynh($tblTable, $idphuhuynh);
			if(isset($_POST['sendemail'])) {
					$emailphuhuynh=$_POST['mess'];
					$noidung=$_POST['mess'];
					$tenphuhuynh=$_POST['mess'];
					$diachi=$_POST['mess'];
					$sdtphuhuynh=$_POST['mess'];
					$lophoc=$_POST['mess'];
					$lichhoc=$_POST['mess'];

					 if (empty($_POST['emailphuhuynh'])) { //Kiểm tra xem trường email có rỗng không?
		                $error = "Bạn phải nhập địa chỉ email";
		            } elseif (!empty($_POST['emailphuhuynh']) && !filter_var($_POST['emailphuhuynh'], FILTER_VALIDATE_EMAIL)) {
		                $error = "Bạn phải nhập email đúng định dạng";
		            } elseif (empty($_POST['noidung'])) { //Kiểm tra xem trường content có rỗng không?
		                $error = "Bạn phải nhập nội dung";
		            }
		            if (!isset($error)) {
		            	 include 'Admin/Controllers/admin/library.php'; // include the library file
                		require 'Admin/Controllers/admin/vendor/autoload.php';
                		$mail = new PHPMailer\PHPMailer\PHPMailer(true);
                		              try {
                    //Server settings
                    $mail->CharSet = "UTF-8";
                    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = SMTP_UNAME;                 // SMTP username
                    $mail->Password = SMTP_PWORD;                           // SMTP password
                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = SMTP_PORT;                                    // TCP port to connect to
                    //Recipients
                    $mail->setFrom(SMTP_UNAME, "Trung tâm gia sư S4S");
                    $mail->addAddress($_POST['emailphuhuynh'], 'Tên người nhận');     // Add a recipient | name is option
                    $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');
//                    $mail->addCC('CCemail@gmail.com');
//                    $mail->addBCC('BCCemail@gmail.com');
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = $_POST['noidung'];
                    $mail->Body = $_POST['mess'];
                    $mail->AltBody = $_POST['sdtphuhuynh']; //None HTML
                    $result = $mail->send();
                    if (!$result) {
                        $error = "Có lỗi xảy ra trong quá trình gửi mail";
                    } else {
                    	 $message = "Gửi email thành công!" ;
            		echo "<script type='text/javascript'>alert('$message');</script>";

                   }
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
            }

				}
			}

		
		
		require_once('Admin/Views/tutor/send_email.php');
		break;

	}
		default:
			// code...
			break;
	}
