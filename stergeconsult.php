<?php
include "includes/connection.php";
$ConsultID = $_GET['id'];
$sql = mysqli_query($db,"delete from consult where id = '$ConsultID'"); // delete query

if ($sql) {

    echo "<br>" . '<script>alert("Stergerea consultatiei a fost facuta")</script>';
    redirect("homePage.php");
} else {
    echo "Eroare in stergerea sondajului: " . mysqli_error($db);
}
mysqli_close($db);
