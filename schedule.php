<?php 
 require "function.php";

$database = query('SELECT * FROM lab');
if(isset($_POST["keyword"])){

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UPT KOMPUTER</title>
  <style>
  .container{
            background-image: url('assets/img/portfolio/kegiatan-2.jpeg');
            background-size: cover;

                }

                table{
    margin-top: 70px;
}
</style>
    <?php
  if(isset($_POST["submit"])){
  //seleksi
  if($_POST["nama"]=="admin" && $_POST["password"]=="170906"){
    //loncat
    header("location:index.php");
    exit;
  }else{
    $error=true;
  }
  }
?>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- header -->
	<div class="medsos">
		<div class="container">

		</div>
	</div>

  <br>
	<div class="container">


        <table border  ="1" cellpadding="10" cellspacing="0">
          <thead class="thead">
                <tr>
                    <th>ID</th>
                    <th>AKSI</th>
                    <th>PEMESAN</th>
                    <th>PRODI</th>
                    <th>RUANG LAB</th>
                    <th>TANGGAL PINJAM</th>
                    <th>JAM MULAI</th>
                    <th>JAM SELESAI</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                <?php foreach($database as $dts) :?>
                    <tr>
                        <td><?php echo $i ?></td>
			              <td><a href="ubah.php?y=<?php echo $dts["ID"]?>">Ubah</a>
                    <a href="hapus.php?x=<?php echo $dts["ID"]?>">Hapus</a>
                <td><?php echo $dts["PEMESAN"] ?></td>
                <td><?php echo $dts["PRODI"] ?></td>
                <td><?php echo $dts["RUANG LAB"] ?></td>
                <td><?php echo $dts["TANGGAL PINJAM"] ?></td>
                <td><?php echo $dts["JAM MULAI"] ?></td>
                <td><?php echo $dts["JAM SELESAI"] ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach;?>

              

            </tbody>
        </table>
    </div>
</body>
</html>