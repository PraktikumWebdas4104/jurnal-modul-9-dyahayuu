<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "jurnal9"; //isi sesuai nama database anda

	function __construct(){
		$this->conn = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);

	}

	function tampil_data(){
		//lengkapilah method tampil data
		//query select user
		$data= mysqli_query($this->conn,"SELECT * from user");

		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia){
		//buatlah method input
		//query inset into user
		 mysqli_query($this->conn,"INSERT into user (nama,alamat,usia)values('$nama','$alamat','$usia')");

	}

	function hapus($id){
		//buatlah method hapus
		//query delete from id where id ='$id'
		$query = mysqli_query($this->conn,"DELETE from user where id='$id'");
		if ($query) {
			echo "Berhasil";
		}
	}

	function edit($id){
		//lengkapilah method edit
		//query select from user where id ='$id'
		$data = mysqli_query($this->conn,"SELECT * from user where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia){
		//buatlah method update
		//query update user set blablabla where id='$id'
		mysqli_query($this->conn,"UPDATE user set nama = '$nama',alamat='$alamat', usia='$usia' where id ='$id'");
	}

} 

?>