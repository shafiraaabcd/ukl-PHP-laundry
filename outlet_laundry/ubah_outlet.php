<?php 
    include "header.php";
?>
<?php
    if($_SESSION['role']=='admin'){
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_outlet=mysqli_query($conn,"select * from outlet where id = '".$_GET['id']."'");
    $dt_outlet=mysqli_fetch_array($qry_get_outlet);
    ?>
    <h3>Ubah Outlet</h3>
    <form action="proses_ubah_outlet.php" method="post">
        <input type="hidden" name="id" value= "<?=$dt_outlet['id']?>">
        Nama Outlet :
  <input type="text" name="nama" value=   "<?=$dt_outlet['nama']?>" class="form-control">
        Alamat : 
<textarea name="alamat" class="form-control" rows="4"><?=$dt_outlet['alamat']?></textarea>
        </select>
        No. Telepon : 
<textarea name="tlp" class="form-control" rows="4"><?=$dt_outlet['tlp']?></textarea>
        Kota :
  <input type="text" name="kota" value=   "<?=$dt_outlet['kota']?>" class="form-control">
<input type="submit" name="simpan" value="Ubah Outlet" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
?>