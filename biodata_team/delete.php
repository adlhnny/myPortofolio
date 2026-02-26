<?php
$conn = mysqli_connect("localhost","root","","db_biodata");

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id='$id'"));

if(file_exists("foto/".$data['foto'])){
    unlink("foto/".$data['foto']);
}

mysqli_query($conn,"DELETE FROM mahasiswa WHERE id='$id'");
header("Location: team.php");
?>