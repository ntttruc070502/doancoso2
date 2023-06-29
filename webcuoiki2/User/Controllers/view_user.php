<?php 


if(isset($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action='';
}

	$thanhcong=array();
switch ($action) {
	case 'view_user': { 
		require_once('User/Views/account/user_view.php');
		break;
	} 
	case 'account': {
		if(isset($_GET['id'])) {
			if($id=$_POST['id']) {
				$tblTable="nguoidungg";
				$dataID=$db->getDataID($tblTable, $id);
				var_dump($id);
			}
		}		
			require_once('User/Views/account/account.php');	
			break;
		}
	case 'thacmac': {
		require_once('User/Views/parents/thacmac.php');	
		break;
	}
	case 'thacmacuser': {
		require_once('User/Views/parents/thacmacuser.php');	
		break;
	}	
	default: {//Không chọn gì cả thì login
		
		echo "hiii";
		break;
	}

}

 ?>
