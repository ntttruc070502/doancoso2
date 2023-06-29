<?php 
class Database {
	private $hostname='localhost';
	private $username='root';
	private $pass='';
	private $dbname='webcuoiki';

	private $conn=null;//Biến kết nối đến csdl
	private $result=null;

	public function connect()
	{
		$this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
		if(!$this->conn) {
			echo "Thất bại";
			exit();
		} else {
			mysqli_set_charset($this->conn, 'utf8');
		}
		return $this->conn;
	}

		//Thực thi câu lệnh truy vấn
		public function execute($sql)
		{
			$this->result=$this->conn->query($sql);//Kiểm tra đã kết nối thành công chưa
			return $this->result;
		}

		//Phương thức lấy dữ liệu
		public function getData()
		{
			if($this->result) {//Nếu đã chạy câu lệnh truy vấn
				$data=mysqli_fetch_array($this->result);//Đưa vào lưu trữ trong mảng	
			} else {
				$data=0;
			}
			return $data;
		}

		public function getAllData($table)
		{	
			$sql="SELECT * FROM $table" ;
			$this->execute($sql);
			if($this->num_rows() == 0) {
				$data=0;
			} else {
				while($datas=$this->getData()) {
					$data[]=$datas;
				}
			}
			return $data;
		}
	
public function getAllData123($table=null)
		{	
			$sql="SELECT COUNT(id) AS total FROM $table";
			$this->execute($sql);
			if($this->num_rows() == 0) {
				$data=0;
			} else {
				$data=$this->getData();
			}
			return $data;
		}

		public function getSPPhanTrang($start, $limit,$table=null)
		{	
			$sql = "SELECT * FROM $table ORDER BY id DESC LIMIT $start, $limit";
			$this->execute($sql);
			if($this->num_rows() == 0) {
				$data=0;
			} else {
				while($datas=$this->getData()) {
					$data[]=$datas;
				}
			}
			return $data;
		}
		public function getAllData12()
		{	
			$sql="SELECT COUNT(id) AS total FROM yeucau";
			$this->execute($sql);
			if($this->num_rows() == 0) {
				$data=0;
			} else {
				$data=$this->getData();
			}
			return $data;
		}

		public function getSPPhanTrang1($start, $limit)
		{	
			$sql = "SELECT * FROM yeucau LIMIT $start, $limit";
			$this->execute($sql);
			if($this->num_rows() == 0) {
				$data=0;
			} else {
				while($datas=$this->getData()) {
					$data[]=$datas;
				}
			}
			return $data;
		}

		//Phương thức lấy dữ liệu theo id
		public function getDataID($table, $id)	
		{
			$sql="SELECT * FROM $table WHERE id= '$id'";
			$this->execute($sql);
			if($this->num_rows()!=0) {//Nếu đã chạy câu lệnh truy vấn
				$data=mysqli_fetch_array($this->result);//Đưa vào lưu trữ trong mảng	
			} else {
				$data=0;	
			}
			return $data;
		}

		public function getDataPhuHuynh($table, $idphuhuynh)	
		{
			$sql="SELECT * FROM $table WHERE idphuhuynh= '$idphuhuynh'";
			$this->execute($sql);
			if($this->num_rows()!=0) {//Nếu đã chạy câu lệnh truy vấn
				$data=mysqli_fetch_array($this->result);//Đưa vào lưu trữ trong mảng	
			} else {
				$data=0;	
			}
			return $data;
		}
		public function getAllDataByID($table, $id)
		{	
			$sql="SELECT * FROM $table WHERE id= '$id'" ;
			$this->execute($sql);
			if($this->num_rows() == 0) {
				$data=0;
			} else {
				while($datas=$this->getData()) {
					$data[]=$datas;
				}
			}
			return $data;
		}

		//Phương thức đếm số bản ghi. Nếu kh có bản ghi thì data=0, nếu có thì sẽ trả về kết quả
		public function num_rows()
		{
			if($this->result) {
				$num=mysqli_num_rows($this->result);
			} else {
				$num=0;
			}
			return $num;

		}
		//Phương thức thêm dữ liệu
		public function insertData($ten, $email, $sdt, $trinhdo, $monhoc,$anh, $gioitinh, $gioithieu )
		{
			$sql="INSERT INTO gs(id, ten, email, sdt, trinhdo, monhoc, anh,  gioitinh, gioithieu) VALUES(null, '$ten', '$email', '$sdt', '$trinhdo', '$monhoc', '$anh', '$gioitinh', '$gioithieu')";
			return $this->execute($sql);
		}
		public function insertDataa($ten, $email, $sdt, $trinhdo, $monhoc,$anh,  $gioitinh, $gioithieu)
		{
			$sql="INSERT INTO yeucau(id, ten, email, sdt, trinhdo, monhoc, anh , gioitinh, gioithieu) VALUES(null, '$ten', '$email', '$sdt', '$trinhdo', '$monhoc','$anh', '$gioitinh', '$gioithieu')";
			return $this->execute($sql);
		}
		public function insertPhuHuynh($tenphuhuynh, $diachi, $sdtphuhuynh, $lophoc, $lichhoc, $id)
		{
			$sql="INSERT INTO phuhuynh(idphuhuynh, tenphuhuynh, diachi, sdtphuhuynh, lophoc, lichhoc, id) VALUES(null, '$tenphuhuynh', '$diachi', '$sdtphuhuynh', '$lophoc', '$lichhoc', '$id')";
			return $this->execute($sql);
		}
		//Phương thức sửa dữ liệu
		public function UpdateData($id ,$ten, $email, $sdt, $trinhdo, $monhoc,$anh,  $gioitinh, $gioithieu)
		{
			$sql="UPDATE gs SET ten='$ten', email='$email', sdt='$sdt', trinhdo='$trinhdo', monhoc='$monhoc', anh='$anh', gioitinh='$gioitinh', gioithieu='$gioithieu' WHERE id='$id'";
			return $this->execute($sql);
		}
			public function UpdateDataa($id ,$ten, $email, $sdt, $trinhdo, $monhoc,$anh,  $gioitinh, $gioithieu)
		{
			$sql="UPDATE request SET ten='$ten', email='$email', sdt='$sdt', trinhdo='$trinhdo', monhoc='$monhoc',anh='$anh', gioitinh='$gioitinh', gioithieu='$gioithieu' WHERE id='$id'";
			return $this->execute($sql);
		}
		

		//Phương thức xóa
		public function Delete($id, $table)
		{

			$sql="DELETE FROM $table WHERE id='$id'";
			return $this->execute($sql);
		}
		public function login($TaiKhoan, $MatKhau)
		{		
			$sql = "SELECT * FROM `nguoidungg` WHERE TaiKhoan = '$TaiKhoan' AND MatKhau = '$MatKhau'";
			$login = $this->conn->query($sql)->fetch_assoc();
			if(!$TaiKhoan || !$MatKhau) {
				$message = "Vui lòng nhập đủ thông tin";
				echo "<script type='text/javascript'>alert('$message');</script>";

			}
			 else if ($login > 0) {
				if($login['id'] == 1) {
					header('location: ?controller=admin&action=accept-tutor');				
				} else {
					header('location: user?controller=view_user&action=view_user');
				}
			}else {
				$message = "Tên đăng nhập hoặc mật khẩu không đúng";
				echo "<script type='text/javascript'>alert('$message');</script>";
				
			}			
		}
		public function account($TaiKhoan, $MatKhau)
		{		
			$sql = "SELECT * FROM `nguoidungg` WHERE id = '$id'";
			return $this->execute($sql);		
		}
		public function register( $ho, $ten, $gioitinh, $sdt, $email, $diachi, $taikhoan, $matkhau) 
		{
			if(!$ho || !$ten || !$gioitinh || !$sdt || !$email || !$diachi || !$taikhoan || !$matkhau) {
				$message = "Vui lòng nhập đủ thông tin";
				echo "<script type='text/javascript'>alert('$message');</script>";
			} else if($sql="INSERT INTO nguoidungg( id,ho, ten, gioitinh, sdt, email, diachi,  taikhoan, matkhau) VALUES(null, '$ho', '$ten', '$gioitinh', '$sdt', '$email', '$diachi', '$taikhoan', '$matkhau')") {
				$message = "Đăng ký thành công! Hãy trở lại trang đăng nhập";
				echo "<script type='text/javascript'>alert('$message');</script>";
				return $this->execute($sql);
			}
			
		}
		//Tìm kiếm dữ liệu
		public function SearchData($table, $key)
		{	
			$sql="SELECT * FROM $table WHERE trinhdo REGEXP '$key' OR monhoc REGEXP '$key'OR ten REGEXP '$key' ORDER BY id DESC";
			$this->execute($sql);
			if($this->num_rows() == 0) {
				$data=0;
			} else {
				while($datas=$this->getData()) {
					$data[]=$datas;
				}
			}
			return $data;
		}
	}
 ?>
