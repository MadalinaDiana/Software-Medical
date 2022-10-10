<?php
include "includes/connection.php";
$PacientID = $_GET['id'];
$sql = mysqli_query($db,"delete from pacient where id = '$PacientID'"); // delete query

if ($sql) {

    echo "<br>" . '<script>alert("Stergerea pacientului a fost facuta")</script>';
    redirect("homePage.php");
} else {
    echo "Eroare in stergerea pacientului: " . mysqli_error($db);
}
mysqli_close($db);
