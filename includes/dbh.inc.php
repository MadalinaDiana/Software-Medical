<?php


$host = "localhost";
$user = "root";
$password = "";
$db = "mc"; // baza de date a ta
include 'userDbh.inc.php'; //am introdus fisierul de unde luam redirect
$conn = mysqli_connect($host, $user, $password);
mysqli_select_db($conn, $db);
// pornim sesiunea
session_start();
	$username = $_POST['username'];
    $password = $_POST['password'];
    // facem query-ul de verificare a utilizatorului
    $query = "select * from utilizatori where LOWER(username) = '" . strtolower($username) . "'";
    $query_run = mysqli_query($conn, $query);

    // daca query a returnat rezultate
    if (mysqli_num_rows($query_run) > 0) {  //se cauta din baza de date tabele de mai jos
            $sql2 = mysqli_query($conn, "SELECT utilizatori.username, utilizatori.tip, tip.redirect, utilizatori.id
                                    FROM utilizatori, tip  
                                    WHERE utilizatori.username = '$username' AND utilizatori.parola = '$password' AND utilizatori.tip = tip.tip");

            $myrow = mysqli_fetch_array($sql2);

            $rows = mysqli_num_rows($sql2);

            if ($rows > 0) { //aici imi apare si mie cu rosu, nu stiu de ce..dar ar trebui sa functioneze
                //se iau datele rezultate                    
                $_SESSION["username"] = $myrow["username"];
                $_SESSION["tip"] = $myrow["tip"];
                $_SESSION["id"] = $myrow["id"];

                
               
                //functia de redirectionare in pagini pentru utilizatorii diferiti, am definit-o in userdbh
                redirect($myrow["redirect"]);
                exit;
            } else {
                echo 'ceva nu e bine';
            }
        } else {
            echo 'Conexiunea a esuat';
        }

?>