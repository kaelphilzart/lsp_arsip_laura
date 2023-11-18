<?php 
	session_start();
	include '../../koneksi/koneksi.php';

	 	 //cek apakah ada kiriman form dari method post
	 	if(isset($_POST['simpan_data'])){
	        $jenis=$_POST["jenis"];
	        $pegawai=$_POST["jumlah"]; 

	       //query input menginput data kedalam tabel barang
	        $sql="insert into tb_bidang (jenis_bidang, jumlah_pegawai) values
	         ('$jenis','$pegawai')";

	        //mengeksekusi/menjalankan query diatas
	        $hasil=mysqli_query($db, $sql);

        	//kondisi apakah berhasil atau tidak
	        if ($hasil) {
	            echo "<Center><h2><br>Terima Kasih<br>Bagian Telah Didaftarkan ke Sistem</h2></center>
				<meta http-equiv='refresh' content='2;url=../data_bidang.php'>";
	           }
	        else{
	            echo "<Center><h2>Silahkan isi semua kolom lalu tekan submit<br>Terima Kasih</h2></center>
				<meta http-equiv='refresh' content='2;url=../input_data_bidang.php'>";
	        }
    	}


    	//Proses Update Data

    	if(isset($_POST['edit'])) {
        $id = $_POST['id'];
        $jenis = $_POST['jenis'];
        $pegawai = $_POST['jumlah'];
    
        $sql_edit = "UPDATE tb_bidang SET jenis_bidang='$jenis', jumlah_pegawai='$pegawai' where id=$id";
        $query = mysqli_query($db, $sql_edit);
    
        if( $query ) {
            echo "<Center><h2><br>Data Bagian Berhasil Diubah</h2></center>
				  <meta http-equiv='refresh' content='2;url=../data_bidang.php'>";
        } else {
             echo "<Center><h2><br>GAGAL MENGHAPUS<br>Silahkan Ulangi</h2></center>
					<meta http-equiv='refresh' content='2;url=../edit_data_bidang.php?id=".$id."'>";
         }
        } 


    	//Proses hapus Data
    	if (isset($_GET['id'])) {
		    $id=htmlspecialchars($_GET['id']);

		    $sql_hapus="delete from tb_bidang where id='$id'";
		    $hasil=mysqli_query($db,$sql_hapus);

		    //Kondisi apakah berhasil atau tidak
		    if($hasil){
		    	echo "<Center><h2><br>Data Bagian Telah Dihapus</h2></center>
				<meta http-equiv='refresh' content='2;url=../data_bidang.php'>";
		    }
		    else{
		        echo "<Center><h2><br>GAGAL MENGHAPUS<br>Silahkan Ulangi</h2></center>
				<meta http-equiv='refresh' content='2;url=../data_bidang.php'>";
		    }
		}
?>