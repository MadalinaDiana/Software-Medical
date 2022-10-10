<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accounts Page - Dashboard Template</title>
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

<body class="bg03">
    <?php include("includes/header.php");?>
 
  
  <br><center> <div class="tm-col tm-col-big">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title">Editeaza</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form action="updatecont.php" class="tm-signup-form">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input placeholder="Email" id="email" name="email" type="text" class="form-control validate">
                                </div>
                                <div class="form-group">
								<label for="name">Specializare</label>
                                    <input placeholder="Specializare" id="specializare" name="specializare" type="text" class="form-control validate">
                                </div>                                
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Salveaza
                                        </button>										
                                    </div>                               
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
			</center>
            
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
</body>

</html>