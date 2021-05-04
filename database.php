<?php

$mysqli = new mysqli('localhost','root','','hatta')or die (mysqli_error($mysqli));
$update = false;
if (isset($_POST['submit'])){
    $namabarang = $_POST ['namabarang'];
    $jenisbarang = $_POST ['jenisbarang'];
    $tanggal = $_POST ['tanggal'];
    $mysqli->query("INSERT INTO hospital(`namabarang`, `jenisbarang`, `tanggal`) VALUES ('$namabarang','$jenisbarang','$tanggal')")
    or die ($mysqli->error);
    header ("location: index.php");
}
else if(isset($_GET['delete'])){
    $id = $_GET ['delete'];
$mysqli->query(" DELETE from hospital WHERE `id`=$id")or die (mysqli_error($mysqli));
    header ("location: index.php");
}
else if (isset($_GET['edit'])){
    $id = $_GET ['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM hospital where`id`=$id")or die (mysqli_error($mysqli));
        $row = $result->fetch_array();
        $namabarang = $row ['namabarang'];
        $jenisbarang = $row ['jenisbarang'];
        $tanggal = $row ['tanggal']; 
}
else if (isset($_POST['update'])){
    $id = $_POST['id'];
    $namabarang = $_POST ['namabarang'];
    $jenisbarang = $_POST ['jenisbarang'];
    $tanggal = $_POST ['tanggal']; 
    $mysqli->query("UPDATE hospital SET `namabarang`='$namabarang',`jenisbarang`='$jenisbarang',`tanggal`='$tanggal' WHERE `id`=$id")or die (mysqli_error($mysqli));
    header ("location: index.php");
}
?>