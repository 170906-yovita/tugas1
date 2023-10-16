<?php 
require "function.php";

if(isset($_POST["submit"])){

    if(tambah($_POST)){
        echo"
        <script>
    alert('data berhasil dimasukkan');
    document.location.href='schedule.php';
</script>
        ";
    }else{
        echo"
        gagal ditambah
        ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>UPT KOMPUTER</title>
    <style>


        
        .container{
            background-image: url('assets/img/portfolio/kegiatan-2.jpeg');
            background-size: cover;
            width: 100%;
            height: 650px;
            position: relative;
            display: flex;
            justify-content: center;
            
       
}
 .container::after{
    content: '';
    display: block;
    position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: white;
    opacity: 0.4;
}
.container .f{
    z-index: 1;
}

input
{
  
   height: 18px;
}button{
    height: 25px;
 }.mahok{
position: relative;
left: -470px;
margin-left: 5px;
}a{

    color: black;
}
 table{
    margin-top: 70px;
}





    </style>
</head>
<body>
   
        <div class="container">
        <form class="f" action="" method="post">
        <h4 class="mahok"><a href="index.php">KEMBALI KE HALAMAN AWAL</a></h4><br><br>
        <table  cellpadding="5" cellspacing="0">
            <tr>
           <td> PEMESAN : </td> <td> <input type="text" name="PEMESAN" placeholder="pemesan"></td>
            </tr>
            <tr>
          <td>  PRODI : </td> <td>
          <select name="PRODI">
          <option></option>
          <option>Pascasarjana Pendidikan Ilmu Pengetahuan Sosial</option>
          <option>Pascasarjana Pendidikan Ilmu Bahasa dan Sastra Indonesia</option>
          <option>Prodi Pendidikan Guru Sekolah Dasar</option>
          <option>Prodi Pendidikan Guru Pendidikan Anak Usia Dini</option>
          <option>Prodi Pendidikan Pancasila dan Kewarganegaraan</option>
          <option>Prodi Bimbingan Konseling</option>
          <option>Prodi Pendidikan Matematika</option>
          <option>Prodi Pendidikan Biologi</option>
          <option>Prodi Pendidikan Fisika</option>
          <option>Prodi Pendidikan Ekonomi</option>
          <option>Prodi Pendidikan Akuntansi</option>
          <option>Prodi Pendidikan Sejarah</option>
          <option>Prodi Pendidikan Bahasa dan Sastra Indonesia</option>
          <option>Prodi Pendidikan Bahasa Inggris</option>
          <option>Prodi Pendidikan Teknik Elektro</option>
          <option>Prodi Manajemen</option>
          <option>Prodi Akuntansi</option>
          <option>Prodi D-III Manajemen Pajak</option>
          <option>Prodi Sistem Informasi</option>
          <option>Prodi Teknik Informatika</option>
          <option>Prodi Teknik Industri</option>
          <option>Prodi Teknik Kimia</option>
          <option>Prodi Teknik Elektro</option>
          <option>Prodi Ilmu Keolahragaan</option>
          <option>Prodi Farmasi</option>
          <option>Prodi Hukum</option>
        </select>
              
</td>
            </tr>
            <tr>
          <td> RUANG LAB : </td>  <td>
          <select name="RUANGLAB">
            <opton></option>
          <option>Lab Komputer 1</option>
           <option>Lab Komputer 2</option>
         </select>
</td>
            </tr>
            <tr>
           <td> TANGGAL PINJAM :</td> <td><input type="date" name="TANGGALPINJAM" placeholder="tanggal pinjam"></td>
            </tr>
            <tr>
           <td>JAM MULAI :</td>  <td><input type="time" name="JAMMULAI" placeholder="jam mulai"></td>
            </tr>
           <tr>
          <td> JAM SELESAI :</td> <td><input type="time" name="JAMSELESAI" placeholder="jam selesai"></td>
            </tr>
            <tr>
           <td>KETERANGAN :</td> <td><input type="text" name="KETERANGAN" placeholder="keterangan"></td>
            </tr>
            <tr>
          <td>  PENANGGUNG JAWAB :</td> <td> <input type="text" name="JAWAB" placeholder="penanggung jawab"></td>
            </tr>
            <tr>
          <td> <button type="submit" name="submit">Kirim!!</button></td> 
            </tr>
            </table>
        </form>
    </div>
</body>
</html>