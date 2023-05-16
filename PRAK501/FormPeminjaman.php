<?php 
require('Model.php');
if (isset($_GET['id_peminjaman'])) {
    editPeminjaman();
}
?>
<!DOCTYPE html>
<html>
<head>
   <?php echo (isset($_GET['id_peminjaman'])) ? "<title>Edit Data Peminjaman</title>": "<title>Tambah Data Peminjaman</title>" ?> 
</head>
<body>

    <h2>Form Peminjaman</h2>
    <form action="" method="post">
    <?php
        if( isset($_GET['id_peminjaman']) ) {
        $sql = "SELECT * FROM peminjaman WHERE id_peminjaman = " . $_GET['id_peminjaman'];
        $result = mysqli_query($conn, $sql);

        foreach($result as $res) :
    ?>
        <table>
            <tr>
                <td>ID Peminjaman</td>
                <td><input type="text" name="id_Peminjaman" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["id_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
                <td>Tanggal Peminjaman</td>
                <td><input type="date" name="pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["tgl_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Kembalian</td>
                <td><input type="date" name="kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["tgl_kembali"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>ID Buku</td>
                <td>
                    <select name="id_buku">
                        <?php
                            $buku = tampilIdBuku();
                            foreach( $buku as $bk ) :
                        ?>
                        <option value="<?= $bk['id_buku']; ?>"><?= $bk['judul_buku']; ?></option>
                        <?php
                            endforeach;
                        ?>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>ID Member</td>
                <td>
                    <select name="id_member">
                        <?php
                            $member = tampilIdMember();
                            foreach( $member as $mb ) :
                        ?>
                        <option value="<?= $mb['id_member']; ?>"><?= $mb['nama_member']; ?></option>
                        <?php
                            endforeach;
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                    if (isset($_GET['id_peminjaman'])) {
                        echo "<button type=\"submit\" name=\"update\">Edit</button>";
                    }else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
                    }
                    ?>
                </td>
            </tr>
        </table>
        <?php 
            endforeach; 
        } else {
        ?>
        <table>
            <tr>
                <td>ID Peminjaman</td>
                <td><input type="text" name="id_Peminjaman" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["id_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
                <td>Tanggal Peminjaman</td>
                <td><input type="date" name="pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["tgl_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Kembalian</td>
                <td><input type="date" name="kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["tgl_kembali"] . "" : "value = '' "; ?> required> <br></td>
            </tr>

            <tr>
                <td>ID Buku</td>
                <td>
                    <select name="id_buku">
                        <?php
                            $buku = tampilIdBuku();
                            foreach( $buku as $bk ) :
                        ?>
                        <option value="<?= $bk['id_buku']; ?>"><?= $bk['judul_buku']; ?></option>
                        <?php
                            endforeach;
                        ?>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>ID Member</td>
                <td>
                    <select name="id_member">
                        <?php
                            $member = tampilIdMember();
                            foreach( $member as $mb ) :
                        ?>
                        <option value="<?= $mb['id_member']; ?>"><?= $mb['nama_member']; ?></option>
                        <?php
                            endforeach;
                        ?>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>
                    <?php 
                    if (isset($_GET['id_peminjaman'])) {
                        echo "<button type=\"submit\" name=\"update\">Edit</button>";
                    }else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
                    }
                    ?>
                </td>
            </tr>
        </table>
        <?php } ?>
    </form>
    <br>
    <a href="Peminjaman.php">Kembali</a>
    <?php
    if (isset($_POST['submit'])) {
        tambahpeminjaman($_POST['id_Peminjaman'],$_POST['pinjam'],$_POST['kembali'],$_POST['id_buku'],$_POST['id_member']);
    }
    if (isset($_POST['update'])) {
       updatepeminjaman($_POST['id_Peminjaman'],$_POST['pinjam'],$_POST['kembali']);
    }
    ?>
</body>
</html>