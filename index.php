<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Conexiunea Medicală</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>

	
<body>
    <div class="container">
        <div class="row tm-mt-big">
            <div class="col-12 mx-auto tm-login-col">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12 text-center">
                            <image src="img/MedicalService.png" alt="LOGO CONEXIUNEA MEDICALA" width="180" height="180"/align="center">
                            <h2 class="tm-block-title mt-3"><font color="009999"></h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <form name="login" method="post" action="includes/dbh.inc.php"> 
                                <div class="input-group  mt-3">
                                    <label for="username" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label"><font color="009999">Username</label>
                                    <input name="username" placeholder="Username" type="text" class="form-control validate" id="username" required>
                                </div>
                                <div class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Password</label>
                                    <input name="password" placeholder="Password" type="password" class="form-control validate" id="password" required>
                                </div>
                                <div class="input-group mt-3">
                                    <button name="login" type="submit" class="btn btn-primary d-inline-block mx-auto"><font color="009999">Login</button>
                                </div>
                                <div class="input-group mt-3">
                                </div>
                            </form>
							<h2><font color="009999"><marquee>Ești prioritatea noastră!</marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

