<?php
	class database{
		var $conn;
		function _construct(){
			$this->conn = mysqli_connect("localhost","id20868823_albensrob_db","Kakangkung!23","id20868823_test");
		}
		
		function read($pref1,$pref2){
			$result=mysqli_query($this->conn,"
			SELECT * FROM list_produk_gambar LIMIT ".$pref1.",".$pref2.";
			");
			return $result;
		}
		
		function check(){
		if(!$this->conn){
			die("Connect gagal: ".mysqli_connect_error() );
		}
		echo "Connect Success";
		}
	}
?>