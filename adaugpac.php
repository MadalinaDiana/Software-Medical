<?php
include 'includes/connection.php';
// luarea datelor din formularul de adaugare pacient
    $nume=$_GET["nume"];
    $prenume=$_GET["prenume"];
	$cnp=$_GET["cnp"];
	$categorie=$_GET["categorie"];
	$data=$_GET["data"];
    $adresa=$_GET["adresa"];
    
if(!empty($nume)||!empty($prenume)||!empty($cnp)||!empty($categorie) || !empty($data) || !empty($adresa)){
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="mc";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error()) {
  die('Connect error(' .mysqli_connect_error(). ')'.mysqli_connect_error());
}

else {
    //introducere date in baza de date
    $query_run = mysqli_query($conn, "insert into pacient (cnp, Name, Prenume, DataNasterii, categorieAsigurat, Adresa) values ('$cnp','$nume','$prenume', STR_TO_DATE('$data', '%Y-%m-%d'), '$categorie', '$adresa')");
    echo "<br>". '<script>alert("Inregistararea a fost facuta")</script>';
   if ($query_run) redirect("homePage.php");

}
}
?>