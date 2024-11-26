<div class="row">
	<div class="row">
		<div class="col-sm-3 mt-3">
			<input class="form-control text-light border-0" type="search" id="rechercherIns" placeholder="rechercher..." style="background-color: hsl(284, 50%, 16%);height:6vh" name="rechercherIns">
		</div>
		<div class="col-1 mt-4">
			<img id="btAjout" src="../image/add.ico" alt="ajout" data-bs-toggle="modal" data-bs-target="#modalAjout">
		</div>
		<div class="col-sm-3">
			<label for="parcoursInscrit">parcours :</label>
			<select type="text" name="parcoursInscrit" id="parcoursInscrit" placeholder="Parcours" class="form-select text-warning border-0" style="background-color: hsl(16, 89%, 67%);width: 15vh">
				<option value="DA2I" selected>DA2I </option>
				<option value="AES">AES </option>
				<option value="RPM">RPM </option>
			</select>
		</div>
		<div class="col-sm-3">
			<label for="parcoursInscrit">tranche :</label>
			<select type="text" name="prixTranche" id="prixTranche" class="form-select form-select text-warning border-0" style="background-color: hsl(116, 10%, 6%);width: 15vh">
				<option value="250000" selected> premier</option>
				<option value="200000"> deuxième</option>
				<option value="450000"> complet</option>
			</select>
		</div>
	</div>
</div>
<div class="row">
	<table class="table table-responsive table-striped table-light" style="position:relative;top: 100px;">
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
		<tbody id="lesInscrits" style="font-size: 16px;">

		</tbody>
	</table>
</div>
<!-- modal inscription -->
<div class="modal fade" id="modalAjout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content bg-light">
			<div class="modal-header">
				<h4 class="modal-title text-danger">Inscription</h4>
				<img src="../icone/icons8_graduation_cap_64.png" alt="student">
			</div>
			<div class="modal-body">

				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<input type="text" name="nom_ins" id="nom_ins" placeholder="Nom:" class="form-control">
					<label for="nom_ins" class="form-label">Nom:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<input type="text" name="prenom_ins" id="prenom_ins" placeholder="Prénoms:" class="form-control">
					<label for="prenom_ins" class="form-label">Prénoms:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<input type="date" name="date_naiss_ins" id="date_naiss_ins" class="form-control">
					<label class="form-label" for="date_naiss_ins">Date de naissance:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<input type="text" name="lieu_naiss_ins" id="lieu_naiss_ins" placeholder="A:" class="form-control">
					<label for="lieu_naiss_ins" class="form-label">A:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<input type="text" name="adresse_ins" id="adresse_ins" placeholder="Adresse:" class="form-control">
					<label for="adresse_ins">Adresse:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<input type="text" name="cin_ins" id="cin_ins" placeholder="Numéro CIN:" class="form-control">
					<label for="cin_ins">Numéro CIN:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<select name="parcours_ins" id="parcours_ins" class="form-select">
						<option value="DA2I" selected>DA2I (Informatique)</option>
						<option value="RPM">RPM (Multimédia)</option>
						<option value="AES">AES (Administration)</option>
					</select>
					<label class="form-label" for="parcours_ins">Parcours:</label>
				</div>

			</div>

			<div class="modal-footer">
				<button type="button" id="sauver" class="btn btn-danger" data-bs-dismiss="modal">Sauver</button>
				<button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler</button>
			</div>

		</div>
	</div>
</div>

<!-- modal de suppression -->
<div class="modal fade" id="modalSup">
	<div class="modal-dialog">
		<div class="modal-content bg-light">
			<div class="modal-header">
				<h4 class="modal-title text-danger">Suppression?</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>
			<div class="modal-body">
				<div class="alert alert-light">
					<strong>Voulez-vous supprimer?</strong>
				</div>
			</div>

			<div class="modal-footer">
				<button type="button" id="confirmerSup" class="btn btn-danger" data-bs-dismiss="modal">Oui</button>
				<button type="button" class="btn btn-success" data-bs-dismiss="modal">Non</button>
			</div>

		</div>
	</div>
</div>
<!-- modal de modification -->
<div class="modal fade" id="modalMod" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content bg-light">

			<div class="modal-header">
				<h4 class="modal-title text-dark">Modification?</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>

			<div class="modal-body">
				<div class="form-floating mb-2 border border-0 text-dark border-dark d-none">
					<input type="int" name="idMod" id="idMod" class="form-control">
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark d-none">
					<input type="int" name="reqMontant" id="reqMontant" class="form-control">
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<input type="text" name="nomMod" id="nomMod" placeholder="Nom:" class="form-control">
					<label for="nomMod" class="form-label">Nom:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<input type="text" name="prenomMod" id="prenomMod" placeholder="Prénoms:" class="form-control">
					<label for="prenomMod" class="form-label">Prénoms:</label>
				</div>

				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<select name="parcoursMod" id="parcoursMod" class="form-select">
						<option value="DA2I" selected>DA2I (Informatique)</option>
						<option value="RPM">RPM (Multimédia)</option>
						<option value="AES">AES (Administration)</option>
					</select>
					<label class="form-label" for="parcoursMod">Parcours:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<select type="int" name="montantMod" id="montantMod" placeholder="montant à payer(Ar):" class="form-select">
						<option value="450000">L1_complet: 450.000</option>
						<option value="250000">premier tranche: 250.000</option>
						<option value="200000">deuxième tranche: 200.000</option>
					</select>
					<label for="montantMod">montant à payer(Ar):</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<select name="niveauMod" id="niveauMod" class="form-select" disabled>
						<option value="L1" selected >PREMIERE ANNEE</option>
					</select>
					<label class="form-label" for="niveauMod">Niveau:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<select type="text" name="statutMod" id="statutMod" placeholder="Status du payement:" class="form-select">
						<option value="paye">payé</option>
						<option value="non-paye">non-payé</option>
					</select>
					<label for="statutMod">Status:</label>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
					<button type="button" id="confirmerMod" class="btn btn-primary" data-bs-dismiss="modal">Sauver</button>
				</div>

			</div>
		</div>
	</div>
</div>
<div class="toast" id="notificationSuppression">
	<div class="toast-body">
		<h6 class="h5 d-inline text-light mx-1" style="position:relative;left:50px;">suppression effectuée!</h6>
		<button type="button" class="btn-close btn-close-md d-inline" data-bs-dismiss="toast" style="position:relative;left:50px;"></button>
	</div>
</div>
<div class="toast" id="notificationModification">
	<div class="toast-body">
		<h6 class="h5 d-inline text-primary mx-1" style="position:relative;left:50px;">modification réussie!</h6>
		<button type="button" class="btn-close btn-close-white d-inline " data-bs-dismiss="toast" style="position:relative;left:50px;"></button>
	</div>
</div>
<script src="../framework/js/jquery.js"></script>
<script>
	$(document).ready(() => {
		chercherInscrit();
		$(document).on("mouseenter", "#modifier", action);

		function action() {
			var table = document.getElementById("lesInscrits");
			for (var i = 0; i < table.rows.length; i++) {
				table.rows[i].onclick = function() {
					var reqMontant = $("#reqMontant").val(this.cells[5].innerHTML);
					var idMod = $("#idMod").val(this.cells[0].innerHTML);
					var nomMod = $("#nomMod").val(this.cells[1].innerHTML);
					var prenomMod = $("#prenomMod").val(this.cells[2].innerHTML);
					var parcoursMod = $("#parcoursMod").val(this.cells[4].innerHTML);
					var montantMod = $("#montantMod").val(this.cells[5].innerHTML);
					var statutMod = $("#statutMod").val(this.cells[6].innerHTML);
				}
			}
		}
		$(document).on("click", "#confirmerSup", suppressionInscrit);

		function suppressionInscrit() {
			var idSup = $("#supprimer").val();
			$.ajax({
				url: "../action/php/suppressionInscrit.php",
				method: "POST",
				data: {
					idSup: idSup
				},
				success: function() {
					alert("suppression réussie!");
					afficherInscrit();
					
				}
			});
		}
		$(document).on("click", "#confirmerMod", modificationInscrit);

		function modificationInscrit() {
			var idMod = $("#idMod").val();
			var reqMontant = $("#reqMontant").val();
			var nomMod = $("#nomMod").val();
			var prenomMod = $("#prenomMod").val();
			var parcoursMod = $("#parcoursMod").val();
			var montantMod = $("#montantMod").val();
			var statutMod = $("#statutMod").val();
			var niveauMod = $("#niveauMod").val();

			$.ajax({
				url: "../action/php/modificationInscrit.php",
				method: "POST",
				data: {
					idMod: idMod,
					reqMontant: reqMontant,
					nomMod: nomMod,
					prenomMod: prenomMod,
					parcoursMod: parcoursMod,
					montantMod: montantMod,
					statutMod: statutMod,
					niveauMod: niveauMod,
				},
				success: function(data) {
					alert("modification réussie!");
					afficherInscrit();
					
				}
			});
		}

		afficherInscrit();
		$("#prixTranche").on("change", function() {
			afficherInscrit();
		});
		$("#parcoursInscrit").on("change", function() {
			afficherInscrit();
		});

		function chercherInscrit() {
			$("#rechercherIns").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#lesInscrits tr").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});

		}

		function afficherInscrit() {
			var prixTranche = $("#prixTranche").val();
			var parcoursInscrit = $("#parcoursInscrit").val();
			$.ajax({
				url: "../action/php/chargerListeInscrit.php",
				data: {
					prixTranche: prixTranche,
					parcoursInscrit: parcoursInscrit
				},
				method: "POST",
				success: function(data) {
					data = $.parseJSON(data);
					if (data.status == "success") {
						$("#lesInscrits").html(data.html);
					}
				}
			});
		}

	});
</script>