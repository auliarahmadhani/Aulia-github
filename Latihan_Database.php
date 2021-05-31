<?php
class database{
	var $host="localhost";
	var $uname="root";
	var $pass="";
	var $db="auliabpwl_tic";
	var $con;

	function __construct(){
		$this->con=mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
		mysqli_select_db($this->con,$this->db);
	}
	function tampil_data(){
		$data=mysqli_query($this->con,"select * from mahasiswa");
		while($d=mysqli_fetch_array($data)){
			$hasil[]= $d;
		}
		return $hasil;
	}
	function input($nama,$prodi,$email){
		mysqli_query($this->con,"insert into mahasiswa values('','$nama','$prodi','$email')");
	}
	function hapus($id){
		mysqli_query($this->con,"delete from mahasiswa where id='$id'");
	}
    function edit($id){
        $data = mysqli_query($this->con,"select * from mahasiswa where id='$id'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
	function update($id,$nama,$prodi,$email){
        mysqli_query($this->con,"update mahasiswa set nama='$nama', prodi='$prodi', email='$email' where id='$id'");
    }
}
?>