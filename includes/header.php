<?php 
	session_start();
?>
<header class="top-navbar">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="index.php">
				<img src="img/MedicalService.png" alt="" style="height: 120px" /> 
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbars-rs-food">
				<ul class="navbar-nav ml-auto">
					<?php include 'navbar.php'; ?> <!--includem meniul generat din baza de date -->
                    <?php
        
       				 // verificam daca ii logat si afisam logout altfel butonul de login
        			if (isset($_SESSION['username']))
        			{
                    echo "<li class='dropdown nav-item'><a href='#' class='dropdown-toggle nav-link' data-toggle='dropdown'> Conectat ca: $_SESSION[username] <b class= 'caret'></b></a>"
					?>
                        <ul class="dropdown-menu">
                            <li class="divider"></li>
					<li class="nav-item"> <a class="nav-link" href="contulmeu.php">ContulMeu</a> </li>
          			<li class="nav-item"> <a class="nav-link" href="index.php">Logout</a> </li>
          			<?php
        			}
        			else
        			{
          			?>
          			<li class="nav-item"> <a class="nav-link" a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#login-modal">Login</a> </li>
          			<?php
        			}
        			?>
						</ul>
				</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
