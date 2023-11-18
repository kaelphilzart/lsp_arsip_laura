<?php  
    include '../koneksi/koneksi.php';
        $id         = mysqli_real_escape_string($db,$_GET['id_suratmasuk']);
        $sql        = "SELECT * FROM tb_suratmasuk where id_suratmasuk='".$id."'";                        
        $query      = mysqli_query($db, $sql);
        $data       = mysqli_fetch_array($query);
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Kartu Disposisi Surat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            font-size: 18px;
        }
        .disposisi-card {
            border: 1px solid #000;
            padding: 10px;
            margin-top: 10px;
        }
        .sender-info {
            font-weight: bold;
        }
        .subject {
            margin-top: 10px;
        }
        .disposisi {
            margin-top: 10px;
        }
        .hr1{
            margin-top: 0px;
        }

    </style>
</head>
<body>
    
    <div class="container">
        <div class="header">
            <table>
                <tr>
                    <td width="20%">
                        <img src="images/Blitar.png" width="50%" align="center" style="margin-bottom: ">
                    </td>
                    <td style="text-align: center;" width="80%">
                        <h4 style="margin: 0%">PEMERINTAH KOTA BLITAR</h4>
                        <h4 style="margin: 0%">DINAS KEBUDAYAAN DAN PARIWISATA KOTA BLITAR</h4>
                        <h5 style="margin: 0%">Jl Ir.Soekarno No. 11 Telp. (0342)801815 Blitar</h5>
                    </td>
                </tr>
            </table>
            
            <hr color = "black">
                <hr class="hr1" margin="top" color = "black" size="4">
            <h4>Kartu Disposisi Surat</h4>
        </div>
        <div class="disposisi-card">
            <p class="sender-info">Dari: <?php echo ".$data['pengirim']."?></p>
            <p>Kepada: <?php echo ".$data['disposisi1']."?></p>
            <p>Tanggal Surat: <?php echo ".$data['tanggalsurat_suratmasuk']."?></p>
            <p>Nomor Surat: <?php echo ".$data['nomor_suratmasuk']."?></p>
            <p class="subject">Perihal: <?php echo ".$data['perihal_suratmasuk']."?></p>
            <p>Isi Surat: </p><br>
            <div class="disposisi">
                <h3>Disposisi:</h3>
                <p>Diterima Tanggal : <?php echo ".$data['tanggal_disposisi1']."?></p>
            </div>
        </div>
    </div>
</body>
</html>
