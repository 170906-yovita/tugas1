<?php 
require 'function.php';

$k=$_GET["y"];

$array = query("SELECT * FROM lab WHERE ID = $k")[0];




 if(isset($_POST["t"])){


//    if(ubah($_POST)){
//        echo "
//        <script>
//                alert('data berhasil diubah');
//                document.location.href='schedule.php';
//           </script>";
//    }

   mysqli_query($coon, "UPDATE lab SET
    PEMESAN = '$_POST[PEMESAN]' 
    WHERE ID = $k
    ");
        echo "
        <script>
        alert('data berhasil diubah');
        document.location.href='schedule.php';
    </script>
        ";
        mysqli_query($coon, "UPDATE lab SET
        PRODI = '$_POST[PRODI]' 
        WHERE ID = $k
        ");
            echo "
            <script>
            alert('data berhasil diubah');
            document.location.href='schedule.php';
        </script>
            ";
            mysqli_query($coon, "UPDATE lab SET
            RUANG LAB = '$_POST[RUANGLAB]' 
            WHERE ID = $k
            ");
                echo "
                <script>
                alert('data berhasil diubah');
                document.location.href='schedule.php';
            </script>
                ";
                mysqli_query($coon, "UPDATE lab SET
            TANGGAL PINJAM = '$_POST[TANGGALPINJAM]' 
            WHERE ID = $k
            ");
                echo "
                <script>
                alert('data berhasil diubah');
                document.location.href='schedule.php';
            </script>
                ";
                mysqli_query($coon, "UPDATE lab SET
            JAM MULAI = '$_POST[JAMMULAI]' 
            WHERE ID = $k
            ");
                echo "
                <script>
                alert('data berhasil diubah');
                document.location.href='schedule.php';
            </script>
                ";
                mysqli_query($coon, "UPDATE lab SET
            JAM SELESAI = '$_POST[JAMSELESAI]' 
            WHERE ID = $k
            ");
                echo "
                <script>
                alert('data berhasil diubah');
                document.location.href='schedule.php';
            </script>
                ";
                mysqli_query($coon, "UPDATE lab SET
            KETERANGAN = '$_POST[KETERANGAN]' 
            WHERE ID = $k
            ");
                echo "
                <script>
                alert('data berhasil diubah');
                document.location.href='schedule.php';
            </script>
                ";
                mysqli_query($coon,"UPDATE lab SET 
                PENANGGUNG JAWAB = '$_POST[JAWAB]'
                WHERE ID =$k
                ");
                   
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

                table{
    margin-top: 70px;
}
    </style>
</head>
<body>
    <div class="container">
        <form class="from" action="" method="post">
            <input type="hidden" name="ID" value="<?php echo $array["ID"]?>"><br>
            <table cellpadding="5" cellspacing="0">
                <tbody>
            <tr>
          <td>  PEMESAN :</td><td><input type="text" name="PEMESAN" placeholder="pemesan" value="<?php echo $array["PEMESAN"]?>"></td>
          </tr>
          <tr>
           <td>PRODI :</td><td>
           <select name="PRODI">
            <option>-pilih prodi-</option>
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
              
           </tr>
           <tr>
           <td> RUANG LAB :</td><td>
           <select name="RUANG LAB">
            <option>-pilih ruang-</option>
          <option>Lab Komputer 1</option>
           <option>Lab Komputer 2</option>

        </select>
              
           </tr>
      
           <tr>
         <td> TANGGAL PINJAM :</td><td><input type="date" name="TANGGALPINJAM" placeholder="tanggal pinjam"  value="<?php echo $array["TANGGAL PINJAM"]?>"></td>
           </tr>
       
         <tr>
          <td> JAM MULAI :</td><td><input type="time" name="JAMMULAI" placeholder="jam mulai" value="<?php echo $array["JAM MULAI"]?>"></td>
           </tr>
        <tr>
          <td> JAM SELESAI :</td><td><input type="time" name="JAMSELESAI" placeholder="jam selesai" value="<?php echo $array["JAM SELESAI"]?>"></td>
           </tr>
        <tr>
          <td> KETERANGAN :</td><td><input type="text" name="KETERANGAN" placeholder="keterangan" value="<?php echo $array["KETERANGAN"]?>"></td>
           </tr>
         <tr>
           <td> PENANGGUNGJAWAB :</td><td><input type="text" name="JAWAB" placeholder="penanggung jawab"  value="<?php echo $array["PENANGGUNG JAWAB"]?>"></td>
           </tr>
        <tr>
           <td><button type="submit" name="t">Kirim!!</button>
           </tr>
           </tbody>
            </table>
        </form>
    </div>
</body>
</html>