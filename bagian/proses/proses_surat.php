<?php
 	session_start();
	include '../../koneksi/koneksi.php';


    	//Proses Update Data

    	if(isset($_POST['update'])) {
        $id = $_POST['id_suratmasuk'];
        $disposisi1 = $_POST['disposisi1'];
        $tanggal_disposisi1 = $_POST['tanggal_disposisi1'];

        date_default_timezone_set('Asia/Jakarta'); 
        $thnNow = date("Y");
        $tgl_disp1  = date('Y-m-d H:i:s', strtotime($tanggal_disposisi1));
    
        $sql_edit = "UPDATE tb_suratmasuk SET disposisi1='$disposisi1', tanggal_disposisi1 ='$tgl_disp1' where id_suratmasuk=$id";
        $query = mysqli_query($db, $sql_edit);

        if( $query ) {
            echo "<Center><h2><br>Data Surat masuk telah diubah</h2></center>
				<meta http-equiv='refresh' content='2;url=../datasuratmasukkepala.php'>";
        } else {
             echo "<Center><h2><br>Data GAGAL Diubah<br>Silahkan Ulangi</h2></center>
					<meta http-equiv='refresh' content='2;url=../edit_surat_masuk_kepala.php?id=".$id."'>";
         }
    }
?>