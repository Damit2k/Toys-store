
<?php
	class database {
		protected $conn = null;
		protected $host = 'localhost';
		protected $user = 'root';
		protected $pass = '8634606';
		protected $name = 'kollector';

		public function __construct() {
		$this-> connect();
	}

	public function connect() {
		$this->conn = new mysqli(
			$this->host,
			$this->user,
			$this->pass,
			$this->name
		);
		if(!$this->conn) {
			echo "Kết nối thất bại";
			exit();
		}
	}

	public function get($table,$condition=array()) {
		$sql = "SELECT * from $table";
		if(!empty($condition)) {
			$sql.= " WHERE";
			foreach($condition as $key => $value) {
				$sql.= " $key = '$value' AND";

			}
			$sql = trim($sql, "AND");
			$sql.= " LIMIT 5";
		}
		$query = mysqli_query($this->conn,$sql);
		$result = array();
		if($query) {
			while ($row = mysqli_fetch_assoc($query)) {
				$result[] = $row;
			}
		}
		return $result;
	}

	//hàm thêm dữ liệu vào Bảng
		public function insert($table,$data=array())
		{
			//Bước 1:Lấy giá trị của key cho vòa 1 mảng
			$keys = array_keys($data);
			//Bước 2: xử lí chuỗi với mảng ở trên
			$fields =  implode(",", $keys);

			//Bước 3: xử lí giá trị value
			$value_str ='';
			foreach ($data as $key => $value) {
				$value_str .="'$value',"; 
			}
			//Bước 4: xóa dấu phẩy ở cuối đi
			$value_str = trim($value_str, ",");
			//Bước 5: Lên cấu trúc câu lệnh sql
			$sql = "INSERT INTO $table ($fields) VALUES ($value_str)";
			//Bước 6: Chạy câu lệnh sql
			$query = mysqli_query($this->conn,$sql);
			//Bước 7: Trả về giá trị boolean true/false
			return $query;
		}

		//Hàm update dữ liệu vào 1 bảng theo điều kiện
		public function update($table,$data=array(),$condition=array())
		{	
			//Bước 1: Xử lí chuỗi giá trị
			$str = '';
			foreach ($data as $key => $value) {
				$str .="$key = '$value',"; 
			}
			//Bước 2: Xóa dấu phẩy ở cuối
			$str = trim($str,",");
			//Bước 3: Viết cấu trúc câu lênh sql
			$sql = "UPDATE $table SET $str WHERE ";
			foreach ($condition as $key => $value) {
				$sql.= "$key = '$value' AND";
			}
			$sql = trim($sql,'AND');
			//Bước 4: chạy câu lệnh sql
			$query = mysqli_query($this->conn,$sql);
			//Bước 5: trả về giá trị boolean true/false
			return $query;
		}

		//hàm xóa dữ liệu
		public function delete($table,$condition=array())
		{
			//Bước 1: lên cấu trúc câu lệnh sql
			$sql = " DELETE FROM $table WHERE ";
			//Bước 2: Cộng chuỗi theo điều kiện
			foreach ($condition as $key => $value) {
				$sql.= "$key = '$value' AND";
			}
			$sql = trim($sql,'AND');
			//Bước 3: Chạy câu lệnh sql
			$query = mysqli_query($this->conn,$sql);
			//Bước 4: Trả về giá trị boolean
			return $query;
		}
		
	public function getNoLimit($table,$condition=array()) {
		$sql = "SELECT * from $table";
		if(!empty($condition)) {
			$sql.= " WHERE";
			foreach($condition as $key => $value) {
				$sql.= " $key= '$value' AND";

			}
			$sql = trim($sql, "AND");
		}
		$query = mysqli_query($this->conn,$sql);
		$result = array();
		if($query) {
			while ($row = mysqli_fetch_assoc($query)) {
				$result[] = $row;
			}
		}
		return $result;
	}
	public function dangNhap($table,$condition=array()) {
		$sql = "SELECT * from $table";
		if(!empty($condition)) {
			$sql.= " WHERE";
			foreach($condition as $key => $value) {
				$sql.= " $key= '$value' AND";

			}
			$sql = trim($sql, "AND");
		}
		$query = mysqli_query($this->conn,$sql);
		return $query;
	}

	public function imgRegex($link) {
		$pattern = array('(.jpeg)','(.png)','(.jpg)');
		foreach ($pattern as $match) {
			if(preg_match($match, $link)) {
				$split = preg_split($match, $link);
				array_splice($split,1,0,'2'.$match);
				$link1 = implode('', $split);
				$link1 = str_replace(array('(',')'),'',$link1);
			}
			
		}
		return $link1;
	}
	public function imgRegex2($link) {
		$pattern = array('(.jpeg)','(.png)','(.jpg)');
		foreach ($pattern as $match) {
			if(preg_match($match, $link)) {
				$split = preg_split($match, $link);
				array_splice($split,1,0,'3'.$match);
				$link2 = implode('', $split);
				$link2 = str_replace(array('(',')'),'',$link2);
			} 
		}	
		return $link2;
	}
	public function imgRegex3($link) {
		$pattern = array('(.jpeg)','(.png)','(.jpg)');
		foreach ($pattern as $match) {
			if(preg_match($match, $link)) {
				$split = preg_split($match, $link);
				array_splice($split,1,0,'4'.$match);
				$link3 = implode('', $split);
				$link3 = str_replace(array('(',')'),'',$link3);
			} 
		}	
		return $link3;
	}
	
	public function timkiem($table, $column, $value) {
			$sql = "SELECT * FROM $table";
			$sql.= " WHERE $column LIKE '%$value%'";
			$query = mysqli_query($this->conn,$sql);
			$result = array();
			if($query) {
				while($row=mysqli_fetch_assoc($query)) {
					$result[] = $row;

				}
			}
			return $result;
		}

	public function tachAnh($link) {
		$split = preg_split('\s',$link);
		foreach($split as $key => $value) {

		}
	}

	public function nameDanhmuc($table,$condition=array()) {
		$sql = "SELECT dm_name from $table";
		if(!empty($condition)) {
			$sql.= " WHERE";
			foreach($condition as $key => $value) {
				$sql.= " $key= '$value' AND";

			}
			$sql = trim($sql, "AND");
		}
		$query = mysqli_query($this->conn,$sql);
		$result = array();
		if($query) {
			while ($row = mysqli_fetch_assoc($query)) {
				$result[] = $row;
			}
		}
		return $result;

	}
	public function adminSanPhamTimKiem($value) {
		$sql = "SELECT danhmuc.dm_name,danhmuc.id_dm,sp.* FROM danhmuc join sp on danhmuc.id_dm = sp.id_dm WHERE name LIKE '%$value%'";
		$query = mysqli_query($this->conn,$sql);	
		$result = array();
		if($query) {
			while ($row = mysqli_fetch_assoc($query)) {
				$result[] = $row;
			}
		}
		return $result;
		
	}

	public function adminDanhmuc() {
	$sql = "SELECT danhmuc.dm_name,danhmuc.id_dm,sp.* FROM danhmuc join sp on danhmuc.id_dm = sp.id_dm ORDER BY sp.id";
	$query = mysqli_query($this->conn,$sql);	
	$result = array();
		if($query) {
			while ($row = mysqli_fetch_assoc($query)) {
				$result[] = $row;
			}
		}
		return $result;
	}

	public function adminSuaSanPham($id) {
		$sql = "SELECT danhmuc.dm_name,danhmuc.id_dm,sp.* FROM danhmuc join sp on danhmuc.id_dm = sp.id_dm WHERE sp.id = $id";
	$query = mysqli_query($this->conn,$sql);	
	$result = array();
		if($query) {
			while ($row = mysqli_fetch_assoc($query)) {
				$result[] = $row;
			}
		}
		return $result;
	}



	

}

?>