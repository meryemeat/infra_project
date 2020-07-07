﻿<!DOCTYPE html>
<html>
<head> 
        <meta charset="utf-8"> 
	<title>Serveurs</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #e5e5e5;">

	<nav class="sidebar">
		<div class="sidebar-head"></div>
		<div class="sidebar-body">
			<ul>
				<li><a href="accueil.html"><i class="fa fa-home"></i>Accueil</a></li>
				<li><a href="" class="active"><i class="fa fa-server"></i>Serveurs</a></li>
				<li><a href=""><i class="fa fa-users"></i>Utilisateurs</a></li>
			</ul>

		</div>
	</nav>

	

	<div class="page-container">
		<nav class="navbar navbar-expand-sm fixed-top">
			<div class="navbrand">
				<a href="">
					<i class="fa fa-user" style="font-size: 25px;"></i>
					<span style="font-size: 18px;">Nom d'utilisateur</span>
				</a>
			</div>
			<div class="nav-item ml-auto">
				<div class="profil">
					<div class="item mr-4">
						<a href="" style="font-size: 16px;"><i class="fa fa-sign-out"></i> déconnecter</a>
					</div>
				</div>
				

			</div>
		</nav>

		<div class="contenu">
			<div class="container">
				<div class="row mb-3 mt-4">
        			<div class="col-md-6"><h4>Serveurs</h4></div>
        			<div class="col-md-6 text-right">
        				<a href="" class="btn btn-primary" type="button" role="button">
        					<i class="fa fa-plus"></i> Ajouter un serveur
        				</a>
        			</div>
    			</div>
    			<hr width="100%">
				<div class="container">
					
					<div class="row border mt-4 mb-4 mx-auto bg-white" style="width: 800px; height: 100px;">
						<div class="col-md-4 h-100 bg-success">
							<center style="margin-top: 40px;"><H4>Serveur 1</H4></center>
						</div>
						<div class="col-md-4 h-100"></div>
						<div class="col-md-4 h-100">
							<div>
								<a href="" type="button" role="button" class="btn btn-danger">
									<i class="fa fa-trash"></i> Supprimer
								</a>
							</div>
						</div>
					</div>

					<div class="row border mt-4 mb-4 mx-auto bg-white" style="width: 800px; height: 100px;">
						<div class="col-md-4 h-100 bg-danger" ></div>
						<div class="col-md-4 h-100" ></div>
						<div class="col-md-4 h-100" ></div>
					</div>
					<div class="row border mt-4 mb-4 mx-auto bg-white" style="width: 800px; height: 100px;">
						<div class="col-md-4 h-100 bg-danger" ></div>
						<div class="col-md-4 h-100" ></div>
						<div class="col-md-4 h-100" ></div>
					</div>
					
				</div>
			</div>
			
				


		</div>
	</div>



	<script src="js/jquery-3.5.0.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>

</body>
</html>