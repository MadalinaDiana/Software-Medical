<php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
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

<body class="bg02">
<?php include("includes/header.php");?>


    <center>
  <div class="row tm-mt-big">
            <div class="col-xl-12 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Adauga Consultatie</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form action="adaugcon.php" class="tm-edit-product-form" method="post">
                                <div class="input-group mb-3">
                                    <label for="cnp" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label"  >CNP
                            
                                    </label>
                                    <textarea id="cnp" name="cnp" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" required> </textarea>
                                </div>
								<div class="input-group mb-3">
                                    <label for="diagnostic" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Diagnostic</label>
                                    <textarea class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" name="diagnostic" rows="3" placeholder="Scrie diagnostic" required></textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="recomandari" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Recomandari</label>
                                    <textarea class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" name="recomandari" rows="3" placeholder="Recomandari" required></textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="tratament" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Tratament</label>
                                    <textarea class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" name="tratament" rows="3" required></textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="data" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Data Consultatie
                                    
                                    </label>
                                    <input id="date" name="data" type="date" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" data-large-mode="true">

                                </div>
                                
                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <button type="submit"  class="btn btn-primary">Adauga Consultatie
                                      </button>
                                    </div>
                                </div>
                            </form>
                        </div>						
                        <div class="col-xl-4 col-lg-4 col-md-12 mx-auto mb-4">
                            <div class="custom-file mt-3 mb-3">
                                <input id="fileInput" type="file" style="display:none;" />
                                <input type="button" class="btn btn-primary d-block mx-auto" value="Incarca document" onclick="document.getElementById('fileInput').click();"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</center>

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
    </script>
</body>

</html>