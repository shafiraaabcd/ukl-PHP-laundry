<?php
    if($_POST){
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $tlp=$_POST['tlp'];
        $kota=$_POST['kota'];
        if(empty($nama)){
            echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_outlet.php';</script>";
        } else {
            include "koneksi.php";
            $insert=mysqli_query($conn,"insert into outlet (nama, alamat, tlp, kota) values ('".$nama."','".$alamat."', '".$tlp."', '".$kota."')") or die(mysqli_error($conn));
            if($insert){
                echo "<script>alert('Sukses menambahkan member');location.href='tampil_outlet.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan member');location.href='tambah_outlet.php';</script>";
            }
        }
    }
?>