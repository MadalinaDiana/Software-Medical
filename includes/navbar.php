<?php
    require_once("connection.php");
    $page = basename($_SERVER['PHP_SELF']);

    $tip = $_SESSION["tip"];
//selectarea coloanelor din care vom lua meniul in functie de tipul utilizatorilor
    $querry = "SELECT tip.tip, pagini.nume_meniu, pagini.pagina 
            FROM ((tip inner JOIN drepturi on tip.id = drepturi.tip) 
            INNER JOIN pagini on drepturi.idPage = pagini.id) 
            WHERE tip.tip = '$tip'";

    $sql1 = mysqli_query($db, $querry);

    $rows = mysqli_num_rows($sql1);
    if ($rows > 0) {


        while ($myrow = mysqli_fetch_array($sql1, MYSQLI_ASSOC)) {
            echo "<li class='nav-item'> <a class='nav-link' href='" . $myrow["pagina"] . "'>" . $myrow["nume_meniu"] . "</a></li>";
        }

    }

    ?>