<?php
//membuat query untuk hapus data
$sql="DELETE FROM kembali WHERE No_Buku ='".$_GET['No_Buku']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=kembali&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=kembali&actions=tampil');</scripr>";
}

