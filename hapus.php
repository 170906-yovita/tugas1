<?php 
require "function.php";

$t=$_GET["x"];

if(hapus($t)){
    echo"
    <script>
    alert('data berhasil dihapus');
    document.location.href='schedule.php';
</script>
    ";
}else{
    echo "
    <script>
    alert('data berhasil gagal dihapus');
    document.location.href='schedule.php';
</script>
    ";
}
?>