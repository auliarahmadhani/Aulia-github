<h2> Hello World, Saya akan melakukan pengeditan pada github <h2>

<?php
include 'Latihan_Database.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi =='tambah'){
    $db->input($_POST['nama'],$_POST['prodi'],$_POST['email']);
    header("location:Latihan_Tampil.php");
}
elseif($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:Latihan_Tampil.php");
}
elseif($aksi == "update"){
    $db->update($_POST['id'],$_POST['nama'],$_POST['prodi'],$_POST['email']);
    header("location:Latihan_Tampil.php");
}
?>
