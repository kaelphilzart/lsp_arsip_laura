<?php 
	session_start();
	include '../../koneksi/koneksi.php';

	 	 //cek apakah ada kiriman form dari method post
	 	if(isset($_POST['input'])){
	        $nama=$_POST["nama"];
	        $username=$_POST["username"]; 
	        $password=sha1($_POST["password"]);
	        $hp=$_POST["no_hp"];

	       //query input menginput data kedalam tabel barang
	        $sql="insert into tb_kepala_bagian (nama_lengkap, username, password, no_hp) values
	         ('$nama','$username','$password','$hp')";

	        //mengeksekusi/menjalankan query diatas
	        $hasil=mysqli_query($db, $sql);

        	//kondisi apakah berhasil atau tidak
	        if ($hasil) {
	            echo "<Center><h2><br>Terima Kasih<br>Bagian Telah Didaftarkan ke Sistem</h2></center>
				<meta http-equiv='refresh' content='2;url=../data_kepala_bagian.php'>";
	           }
	        else{
	            echo "<Center><h2>Silahkan isi semua kolom lalu tekan submit<br>Terima Kasih</h2></center>
				<meta http-equiv='refresh' content='2;url=../input_kepala_bagian.php'>";
	        }
    	}else{
    		echo "<Center><h2>Akses Kamu Dilarang Masuk ke Sistem</h2></center>
				<meta http-equiv='refresh' content='2;url=../data_kepala_bagian.php'>";
    	}
?>