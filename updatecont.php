<?php
// luarea datelor din formularul de adaugare consultatie
    $email=$_GET["email"];
    $specializare=$_GET["specializare"];
    
if(!empty($email)||!empty($specializare)){
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="mc";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    include 'includes/dbh.inc.php';  
    //luarea id-ului in functie de username 
    $username_logat = $_SESSION['username'];
    $result = mysqli_query($conn, "SELECT utilizatori.id FROM utilizatori WHERE utilizatori.username = '$username_logat'");
    $row = mysqli_fetch_array($result);
    $id_utilizator_logat = $row['id'];
    $sql = "UPDATE utilizatori SET email='$email', tip= '$specializare' WHERE id='$id_utilizator_logat'";
    if ($conn->query($sql) === TRUE) {
        echo "<br>". '<script>alert("Update-ul a fost facut")</script>';
        redirect("homePage.php");}
else {
    echo "Update esuat! Incercati din nou.";
}
}
?>