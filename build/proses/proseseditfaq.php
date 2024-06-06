<?php
$conn = mysqli_connect("localhost", "root", "", "antrian");

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = $_REQUEST['id'];
$pertanyaan = $_REQUEST['pertanyaan'];
$jawaban = $_REQUEST['jawaban'];

$sql = "UPDATE faq SET  pertanyaan='$pertanyaan', jawaban='$jawaban' WHERE id_faq='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location:../pages/adminFaq.php?notif=editberhasil");
    exit();
} else {
    header("Location:../pages/adminFaq.php?notif=editgagal&error=" . mysqli_error($conn));
    exit();
}

mysqli_close($conn);
?>
