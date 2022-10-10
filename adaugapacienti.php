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
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>


<body id="reportsPage">
<?php include("includes/header.php");?>
        <div class="row tm-mt-big">
            <div class="col-xl-12 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Adauga Pacient</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form action="adaugpac.php" class="tm-edit-product-form">
                                <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Nume
                                    </label>
                                    <input id="nume" name="nume" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" required>
                                </div>
								<div class="input-group mb-3">
                                    <label for="prenume" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label" >Prenume
                                    </label>
                                    <input id="prenume" name="prenume" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"required>
								</div>
                                <div class="input-group mb-3">
                                    <label for="description" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">CNP</label>
                                    <textarea class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" name="cnp" rows="1" required></textarea>
                                </div>
								
                                <div class="input-group mb-3">
                                    <label for="category" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Categoria de asigurat</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" id="categorie" name="categorie">
                                        <option selected>Salariat</option>
                                        <option value="Pensionar">Pensionar</option>
                                        <option value="Elev">Elev/Student pana la varsta de 26 de ani</option>
                                        <option value="Lucrator independent">Lucrator independent</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="data" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Data Nasterii
                                    
                                    </label>
                                    <input id="data" name="data" type="date" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"
                                        data-large-mode="true">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="Adresa" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Adresa
                                       
                                    </label>
                                    <input id="Adresa" name="adresa" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <button type="submit" class="btn btn-primary">Adauga
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 mx-auto mb-4">
                            <div class="tm-product-img-dummy mx-auto">
                                <i class="fas fa-5x fa-cloud-upload-alt" onclick="document.getElementById('fileInput').click();"></i>
                            </div>
                            <div class="custom-file mt-3 mb-3">
                                <input id="fileInput" type="file" style="display:none;" />
                                <input type="button" class="btn btn-primary d-block mx-auto" value="Document Pacient" onclick="document.getElementById('fileInput').click();"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
        $(function(){
            $('#categorie').change(function(){
                var categorie= $('#categorie option:selected').text();
            })
        })
    </script>
</body>

</html>