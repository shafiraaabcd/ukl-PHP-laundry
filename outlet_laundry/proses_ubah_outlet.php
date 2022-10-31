<?php
    if($_POST){
        $id=$_POST['id'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $tlp=$_POST['tlp'];
        $kota=$_POST['kota'];
        if(empty($nama)){
            echo "<script>alert('nama tidak boleh kosong');location.href='ubah_outlet.php';</script>";
        } else {
            include "koneksi.php";
            $update=mysqli_query($conn,"update outlet set nama='".$nama."', alamat='".$alamat."', tlp='".$tlp."', kota='".$kota."' where id = '".$id."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_outlet.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_outlet.php?id=".$id."';</script>";
            }
        } 
    }
?>