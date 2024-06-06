<?php
$conn = mysqli_connect("localhost", "root", "", "antrian");

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = $_REQUEST['id'];
$deskripsi = $_REQUEST['deskripsi'];
$link = $_REQUEST['link'];

$sql = "UPDATE sop SET  deskripsi='$deskripsi', link='$link' WHERE id_sop='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location:../pages/adminUpload.php?notif=editberhasil");
    exit();
} else {
    header("Location:../pages/adminUpload.php?notif=editgagal&error=" . mysqli_error($conn));
    exit();
}

mysqli_close($conn);
?>
