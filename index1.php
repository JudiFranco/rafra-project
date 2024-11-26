<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MODEL</title>
	<?php require "header.php" ?>
	<style>
		#menu {
			background: hsl(284, 50%, 16%);
			border-radius: 1%;
		}

		.card-img-top {
			border-radius: 15px;
			border: 4px solid lightgray;
		}

		#welcome {
			border-radius: 15px 150px;
			width: 300px;
			height: 50px;
			background-color: hsl(190, 90%, 50%);
			animation-name: changerCouleur;
			animation-duration: 8s;
			animation-delay: -2s;
			animation-timing-function: ease-in-out;
			animation-direction: alternate;
			animation-iteration-count: infinite;
		}

		body {
			background: hsl(284, 100%, 7%);
			color: white;
			font-family: "Lato", sans-serif;
		}

		.card {
			background-color: transparent;
			width: 350px;
			height: min-content;
			transition-property: width;
			transition-duration: 1.5s;
			transition-delay: -1s;
			/* opacity: 0.5; */
			transition-timing-function: ease-in-out;
		}

		/* .card:hover {
			width: 380px;
			opacity: 0.9;
		} */
	</style>
</head>

<body>
	<div id="main_container" class="container-fluid">
		<div class="row">
			<div id="menu" class="position-fixed col-sm-2 start-0 top-0 mt-2 mx-2" style="height:98vh;width:6%;"> <!-- Gauche -->
				<ul class="nav flex-column text-center mt-5 mb-5">
					<li class="nav-item">
						<img class="img rounded mb-3" src="../icone/icons8_home_64.png" title="Accueil" id="btAccueil">
					</li>
					<div class="iconeCentre" style="position: relative;top:125px;">
						<li class="nav-item">
							<img class="img img-thumbnail rounded-circle bg-light mb-4 mt-3" title="inscription" src="../icone/icons8_man_student_64.png" id="btInscrits" style="width:60px;">
						</li>
						<li class="nav-item">
							<img class="img img-thumbnail rounded-circle bg-info mb-4" title="Réinscription" src="../image/inscription.ico" id="btReinscription" style="width:60px;">
						</li>
						<li class="nav-item">
							<img class="img mb-4 img img-thumbnail rounded-circle bg-warning" title="Payement" src="../icone/icons8_money_bag_64.png" data-bs-toggle="modal" data-bs-target="#modalPayement" style="width:60px;">
						</li>
						<li class="nav-item">
							<img class="img img-thumbnail rounded-circle bg-dark" title="Statistique" src="../icone/statistic_32.png" id="btStatistique" style="width:60px;">
						</li>
					</div>
					<li class="nav-item mt-3" style="position:relative;top:250px;">
						<a id="retour"><img src="../icone/icons8_logout_rounded_up_64.png" title="Quitter" class="img img-thumbnail rounded-circle bg-light" style="width:60px;"></a>
					</li>
				</ul>
			</div> <!-- Gauche -->
			<div class="col-sm-8 offset-2 mt-2 "> <!-- Centre -->
				<div class="row mt-2 mb-1 mt-2">
					<h1 class="text-primary">ECOLE DE MANAGEMENT</h1>
					<h3 class="text-light">ET D'INNOVATION </h3>
					<h5 class="text-muted">TECHNOLOGIQUE</h5>
					<div id="contenu" class="row">

					</div>
				</div>
			</div> <!-- Centre -->
			<div id="Pdroite" class="col-sm-2 position-fixed end-0 mx-5"> <!-- Droite -->

			</div> <!-- Droite -->

		</div>

		<!-- modal payement -->
		<div class="modal fade" id="modalPayement" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content bg-light">
					<div class="modal-header bg-dark">
						<h4 class="modal-title text-danger">Payement</h4>
						<img src="../icone/piece.ico" alt="money">
					</div>
					<div class="modal-body">

						<div class="form-floating mb-2 border border-0 text-dark border-dark d-none">
							<input type="text" name="niveau" id="niveau" placeholder="Niveau:" class="form-control">
							<label for="id_niveau">Niveau:</label>
						</div>
						<div class="form-floating mb-2 border border-0 text-dark border-dark">
							<input type="text" name="num_inscription" id="num_inscription" placeholder="numéro d'inscription:" class="form-control">
							<label for="num_inscription">Numéro d'inscription:</label>
						</div>
						<div class="form-floating mb-2 border border-0 text-dark border-dark">
							<input type="text" name="reference" id="reference" placeholder="Reference:" class="form-control">
							<label for="reference">Reference</label>
						</div>
						<div class="form-floating mb-2 border border-0 text-dark border-dark">
							<select type="text" name="statut" id="statut" placeholder="Status du payement:" class="form-select">
								<option value="paye">payé</option>
								<option value="non-paye">non-payé</option>
							</select>
							<label for="statut">Status:</label>
						</div>
						<div class="form-floating mb-2 border border-0 text-dark border-dark">
							<input type="text" name="bcc" id="bcc" placeholder="Nom de la banque:" class="form-control">
							<label for="bcc">Nom de la banque</label>
						</div>
						<div class="form-floating mb-2 border border-0 text-dark border-dark">
							<select type="int" name="montant" id="montant" placeholder="montant à payer(Ar):" class="form-select">
								<option value="450000">L1_complet: 450.000</option>
								<option value="250000">_premier_tranche: 250.000</option>
								<option value="200000">_deuxième_tranche: 200.000</option>
								<option value="" disabled>------------------------------</option> <!--  mila balise manao underscore -->
								<option value="505000">L2/L3_complet: 505.000</option>
								<option value="255000">_premier_tranche: 255.000</option>
								<option value="250000">_deuxième_tranche: 250.000</option>
							</select>
							<label for="montant">montant à payer(Ar):</label>
						</div>
						<div class="form-floating mb-2 border text-dark border-0 border-dark">
							<input type="date" name="date_paie" id="date_paie" placeholder="Date de payement:" class="form-control">
							<label for="date_paie">Date de payement:</label>
						</div>

					</div>

					<div class="modal-footer">
						<button style="height: 28px;" type="button" id="annulerPayement" class="btn btn-outline-danger btn-sm mb-2" data-bs-dismiss="modal">ANNULER</button>
						<button style="height: 28px;" type="button" id="sauverPayement" class="btn btn-outline-success btn-sm mb-2">SAUVER</button>
					</div>
				</div>
			</div>
		</div>
		</ <!-- Alert Payement reussi -->
		<div class="toast" id="notificationPayement">
			<div class="toast-body">
				<h6 class="h5 d-inline text-primary mx-1" style="position:relative;left:50px;">Payement effectué!</h6>
				<button type="button" class="btn-close btn-close-md d-inline" data-bs-dismiss="toast" style="position:relative;left:110px;"></button>
			</div>
		</div>
		<?php require "footer.php" ?>
		<script>
			$(document).ready(function() {
			$("#btStatistique").click(()=>{
				$("#welcomeHorloge").addClass("d-none");
       			$("#contenu").load("statistique.php");
    		});
				deconnexion();
				preAffichageId();
				function preAffichageId() {
					$.ajax({
						url: "../action/php/preAffichage.php",
						method: "POST",
						dataType: "JSON",
						success: function(data) {
							$("#num_inscription").val(data[0]);
							$("#num_inscription").text(data[0]);
							$("#niveau").val(data[1]);
							$("#niveau").text(data[1]);
						}	
					});
				}
				function deconnexion()
				{
					$("#retour").click(function(){
						$(this).attr("href", "index.php");
					});
				}
			});
		</script>
</body>

</html>