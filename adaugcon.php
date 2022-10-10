<?php
session_start();

// luarea datelor din formularul de adaugare consultatie
    $cnp=trim($_POST["cnp"]);
    $diagnostic=$_POST["diagnostic"];
	$recomandari=$_POST["recomandari"];
	$tratament=$_POST["tratament"];
	$data=$_POST["data"];
    
if(empty($cnp) || empty($diagnostic) || empty($recomandari) || empty($tratament) || empty($data))
    return;

$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="mc";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error()) {
    die('Connect error(' .mysqli_connect_error(). ')'.mysqli_connect_error());
} else {
    include 'includes/userDbh.inc.php';
    //luarea id-ului in functie de username 
    $username_logat = $_SESSION['username'];
    $id_logat = $_SESSION['id'];

    $id_pacient = mysqli_query($conn,"SELECT pacient.id from pacient where cnp='$cnp'");
    $row = mysqli_fetch_array($id_pacient);
    $id_pacient = $row['id'];
    
    if ($conn->query("INSERT into consult (idPacient, idDoctor, idConcediuMedical, diagnostic, Tratament, Recomandari) values ('$id_pacient','$id_logat', STR_TO_DATE('$data', '%Y-%m-%d'), '$diagnostic', '$tratament', '$recomandari')")){
        echo "<br>". '<script>alert("Inregistararea a fost facuta")</script>';
        redirect("homePage.php");
    }   
}

?>