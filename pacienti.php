
<script language="JavaScript" type="text/javascript">
  function checkDelete() {
    return confirm('Esti sigur ca vrei să ștergi acest pacient?');
  }
</script>
<php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pacienti</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body id="reportsPage">
<?php include("includes/header.php");?>

            <!-- row -->
            <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-12 col-lg-10 col-md-12 col-sm-12">
                    <div class="bg-white tm-block h-100">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <h2 class="tm-block-title d-inline-block">Pacienti Adaugati</h2>

                            </div>
                            <div class="col-md-4 col-sm-12 text-right">
                                <a href="adaugapacienti.php" class="btn btn-small btn-primary">Adauga Pacient</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped tm-table-striped-even mt-3">
                                <thead>
                                <div class="table-responsive">
        <?php 

        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "mc"; // trebuie baza de date a ta
        
        $conn = mysqli_connect($host, $user, $password);
        mysqli_select_db($conn, $db);
        session_start();
        //luarea datelor din sql pentru sondaje
        //luarea datelor din tabela pacienti
        
        $sqlv = "SELECT Name, Prenume, DataNasterii, categorieAsigurat, id FROM pacient";
    $resultv = mysqli_query($conn, $sqlv);
    if (!$resultv)
      die('Invalid querry:' . mysqli_error($conn));
    else {
            echo "<table class='table table-hover table-striped tm-table-striped-even mt-3'>
            <thead>
                <tr class='tm-bg-gray'>";
                        echo "<th scope='col'>&nbsp;</th>";
                        echo "<th scope='col'>Nume Prenume</th>";
                        echo "<th scope='col'class=text-center>Data Nasterii</th>";
                        echo "<th scope='col'class=text-center>Categorie</th>";
                        echo "<th scope='col'>&nbsp;</th>";
                    echo "</tr>";
                while($row = mysqli_fetch_array($resultv)){
                    echo "<tr>
                    <th scope='row'>
                        <input type='checkbox' aria-label='Checkbox'>
                    </th>";
                        echo "<td class='tm-product-name'>" . $row['Name'] . " ". $row['Prenume'] ."</td>";
                        echo "<td class='text-center'>" . $row['DataNasterii'] . "</td>";
                        echo "<td class='text-center'>" . $row['categorieAsigurat'] . "</td>";
                        echo "<td><a class='fas fa-trash-alt tm-trash-icon'onclick='return checkDelete()' href=\"stergepacient.php?id=".$row['id']."\"></a></td>";
                         echo "</tr>";
                }
                echo "</tbody></table>";
                 }
        
         
        ?>

                        </div>

                        <div class="tm-table-mt tm-table-actions-row">
                            <div class="tm-table-actions-col-left">
                                <button class="btn btn-danger">Delete Selected Items</button>
                            </div>
                            <div class="tm-table-actions-col-right">
                                <span class="tm-pagination-label">Page</span>
                                <nav aria-label="Page navigation" class="d-inline-block">
                                    <ul class="pagination tm-pagination">
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <span class="tm-dots d-block">...</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">13</a></li>
                                        <li class="page-item"><a class="page-link" href="#">14</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                
            
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('.tm-product-name').on('click', function () {
                window.location.href = "edit-product.html";
            });
        })
    </script>
</body>

</html>