<!-- modal de suppression -->
<div class="modal fade" id="modalSup_rins">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="alert alert-danger">
					<strong>Voulez-vous supprimer?</strong>
				</div>
			</div>

			<div class="modal-footer">
				<button type="button" id="confirmerSup_rins" class="btn btn-danger" data-bs-dismiss="modal">Oui</button>
				<button type="button" class="btn btn-success" data-bs-dismiss="modal">Non</button>
			</div>

		</div>
	</div>
</div>
<!-- modal de modification/Réinscription -->
<div class="modal fade" id="modalMod_rins" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content bg-light">

			<div class="modal-header">
				<h4 class="modal-title text-danger">Modification/Réinscription</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>

			<div class="modal-body">
				<div class="form-floating mb-2 border border-0 text-dark border-dark d-none">
					<input type="int" name="idMod_rins" id="idMod_rins" class="form-control">
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark d-none">
					<input type="int" name="reqMontant_rins" id="reqMontant_rins" class="form-control">
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<input type="text" name="nomMod_rins" id="nomMod_rins" placeholder="Nom:" class="form-control">
					<label for="nomMod_rins" class="form-label">Nom:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<input type="text" name="prenomMod_rins" id="prenomMod_rins" placeholder="Prénoms:" class="form-control">
					<label for="prenomMod_rins" class="form-label">Prénoms:</label>
				</div>

				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<select name="parcoursMod_rins" id="parcoursMod_rins" class="form-select">
						<option value="DA2I" selected>DA2I (Informatique)</option>
						<option value="RPM">RPM (Multimédia)</option>
						<option value="AES">AES (Administration)</option>
					</select>
					<label class="form-label" for="parcoursMod_rins">Parcours:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<select type="int" name="montantMod_rins" id="montantMod_rins" placeholder="montant à payer(Ar):" class="form-select">
						<option value="505000">L2/L3 complet: 505.000</option>
						<option value="255000">premier tranche: 255.000</option>
						<option value="250000">deuxième tranche: 250.000</option>
					</select>
					<label for="montantMod_rins">montant à payer(Ar):</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<select name="niveauMod_rins" id="niveauMod_rins" class="form-select">
						<option value="L1">PREMIERE ANNEE</option>
						<option value="L2">DEUXIEME ANNEE</option>
						<option value="L3" selected>TROISIEME ANNEE</option>
					</select>
					<label class="form-label" for="niveauMod_rins">Niveau:</label>
				</div>
				<div class="form-floating border border-0 text-dark border-dark">
					<select type="text" name="statutMod_rins" id="statutMod_rins" placeholder="Status du payement:" class="form-select">
						<option value="paye">payé</option>
						<option value="non-paye">non-payé</option>
					</select>
					<label for="statutMod_rins">Status:</label>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
					<button type="button" id="confirmerMod_rins" class="btn btn-primary" data-bs-dismiss="modal">Sauver</button>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="row">
		<h3 class="text-success text-center" style="border-bottom: 2px solid green;">LISTE COMPLET DES ETUDIANTS</h3>
		<div class="col-sm-3 mt-3">
			<input class="form-control text-light border-0" type="search" id="rechercher_complet" placeholder="rechercher..." style="background-color: hsl(284, 50%, 16%);height:6vh" name="rechercher_rins">
		</div>
		<div class="col-1 mt-4 d-none">
			<img id="btReAjout" src="../image/add.ico" alt="ajout" data-bs-toggle="modal" data-bs-target="#modalReAjout">
		</div>
	</div>
</div>
<div class="row">
	<table class="table table-responsive table-striped table-light" style="position:relative;top: 50px;">
		<thead>
			<th scope="col">N°INSCRIPTION</th>
			<th scope="col">NOM</th>
			<th scope="col">PRENOMS</th>
			<th scope="col">NIVEAU</th>
			<th scope="col">PARCOURS</th>
			<th scope="col">MONTANT</th>
			<th scope="col">STATUT</th>
		</thead>
		<tbody id="listeComplet" style="font-size: 16px;">

		</tbody>
	</table>
</div>
<!-- Liste complet -->
<div class="row mt-5">
	<div class="row mt-5">
		<h3 class="text-success text-center" style="border-bottom: 2px solid green;">LISTE DES ETUDIANTS REINSCRITS</h3>
		<div class="col-sm-3">
			<label for="parcours_rins">parcours :</label>
			<select type="text" name="parcours_rins" id="parcours_rins" placeholder="Parcours" class="form-select text-warning border-0" style="background-color: hsl(16, 89%, 67%);width: 15vh">
				<option value="DA2I" selected>DA2I </option>
				<option value="AES">AES </option>
				<option value="RPM">RPM </option>
			</select>
		</div>
		<div class="col-sm-3">
			<label for="prixTranche_rins">tranche :</label>
			<select type="text" name="prixTranche_rins" id="prixTranche_rins" class="form-select text-warning border-0" style="background-color: hsl(116, 10%, 6%);width: 15vh">
				<option> ----L2/L3------</option>
				<option value="255000" selected> premier</option>
				<option value="250000"> deuxième</option>
				<option value="505000"> complet</option>
				<option> ------L1-----</option>
				<option value="250000"> premier</option>
				<option value="200000"> deuxième</option>
				<option value="450000"> complet</option>

			</select>
		</div>
		<div class="col-sm-2">
			<label class="form-label" for="niveau_rins">Niveau:</label>
			<select name="niveau_rins" id="niveau_rins" class="form-select text-warning border-0" style="background-color: hsl(116, 10%, 6%);width: 25vh">
				<option value="L1">première année</option>
				<option value="L2" selected> deuxième année</option>
				<option value="L3">troisième année</option>
			</select>
		</div>
	</div>
</div>
<div class="row mb-5">
	<table class="table table-responsive table-striped table-light mb-5" style="position:relative;top: 50px;">
		<thead>
			<th scope="col">N°INSCRIPTION</th>
			<th scope="col">NOM</th>
			<th scope="col">PRENOMS</th>
			<th scope="col">NIVEAU</th>
			<th scope="col">PARCOURS</th>
			<th scope="col">MONTANT</th>
			<th scope="col">STATUT</th>
			<th scope="col" class="text text-center">ACTIONS</th>
		</thead>
		<tbody id="lesReinscrits" style="font-size: 16px;">

		</tbody>
	</table>
</div>
<script src="../framework/js/jquery.js"></script>
<script>
	$(document).ready(() => {

		afficherReinscrit();
		afficherListeComplet();
		chercherComplet();

		function afficherListeComplet() {
			$.ajax({
				url: "../action/php/chargerListeComplet.php",
				method: "POST",
				dataType: "JSON",
				success: function(data) {
					if (data.status == "success") {
						$("#listeComplet").html(data.html);
					}
				}
			});
		}
		$(document).on("mouseenter", "#modifier_rins", action);

		function action() {
			var table = document.getElementById("lesReinscrits");
			for (var i = 0; i < table.rows.length; i++) {
				table.rows[i].onclick = function() {
					$("#reqMontant_rins").val(this.cells[5].innerHTML);
					$("#idMod_rins").val(this.cells[0].innerHTML);
					$("#nomMod_rins").val(this.cells[1].innerHTML);
					$("#prenomMod_rins").val(this.cells[2].innerHTML);
					$("#parcoursMod_rins").val(this.cells[4].innerHTML);
					$("#montantMod_rins").val(this.cells[5].innerHTML);
					$("#statutMod_rins").val(this.cells[6].innerHTML);
				}
			}
		}
		$(document).on("click", "#confirmerSup_rins", suppressionReinscrit);

		function suppressionReinscrit() {
			var idSup_rins = $("#supprimer_rins").val();
			$.ajax({
				url: "../action/php/suppressionReinscrit.php",
				method: "POST",
				data: {
					idSup_rins: idSup_rins
				},
				success: function() {
					
					afficherListeComplet();
					afficherReinscrit();
					alert("suppression réussie",5000);
				}
			});
		}
		$(document).on("click", "#confirmerMod_rins", modificationReinscrit);

		function modificationReinscrit() {
			var idReq = $("#idMod_rins").val();
			var montantReq = $("#reqMontant_rins").val();
			var nomMod = $("#nomMod_rins").val();
			var prenomMod = $("#prenomMod_rins").val();
			var parcoursMod = $("#parcoursMod_rins").val();
			var montantMod = $("#montantMod_rins").val();
			var statutMod = $("#statutMod_rins").val();
			var niveauMod = $("#niveauMod_rins").val();

			$.ajax({
				url: "../action/php/modificationReinscrit.php",
				method: "POST",
				data: {
					idReq: idReq,
					montantReq: montantReq,
					nomMod_rins: nomMod,
					prenomMod_rins: prenomMod,
					parcoursMod_rins: parcoursMod,
					montantMod_rins: montantMod,
					statutMod_rins: statutMod,
					niveauMod_rins: niveauMod,
				},
				success: function(data) {
					afficherListeComplet();
					afficherReinscrit();
					alert("modification efféctuée!",5000);
				}
			});
		}

		$("#prixTranche_rins").on("change", function() {
			afficherReinscrit();
		});
		$("#parcours_rins").on("change", function() {
			afficherReinscrit();
		});
		$("#niveau_rins").on("change", function() {
			afficherReinscrit();
		});

		function chercherComplet() {
			$("#rechercher_complet").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#listeComplet tr").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});

		}

		function afficherReinscrit() {
			var prixTranche_rins = $("#prixTranche_rins").val();
			var parcours_rins = $("#parcours_rins").val();
			var niveau_rins = $("#niveau_rins").val();

			$.ajax({
				url: "../action/php/chargerListeReinscrit.php",
				data: {
					prixTranche_rins: prixTranche_rins,
					parcours_rins: parcours_rins,
					niveau_rins: niveau_rins,
				},
				method: "POST",
				success: function(data) {
					data = $.parseJSON(data);
					if (data.status == "success") {
						$("#lesReinscrits").html(data.html);
					}
				}
			});
		}

	});
</script>