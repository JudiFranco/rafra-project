<form class="container" style="width: 1000px; position: absolute; top: 100px;left: 460px;">
	<div class="row ">
		<div class="row ">
			<div class="col-1">
				<img src="../image/Student Male.ico">
			</div>
			<div class="col">
				<h3 class="h3 text-danger mt-2">inscription</h3>
			</div>
		</div>
		<div class="col-6">
			
			<div class="form-floating mb-2 border border-1 border-primary">
				<input type="text" name="nationalite" id="nationalite_ins" placeholder="Nationalité:" class="form-control">
				<label for="nationalite_ins">Nationalité:</label>
			</div>
			<div class="form-floating mb-2 border border-1 border-primary">
				<input type="text" name="situation_ins" id="situation_ins" placeholder="Situation familiale:" class="form-control">
				<label for="situation_ins" class="form-label">Situation familiale:</label>
			</div>
			<div class="form-floating mb-2 border border-1 border-primary">
				<select name="sexe_ins" id="sexe_ins" class="form-select">
					<option value="MASCULIN">MASCULIN</option>
					<option value="FEMININ">FEMININ</option>
				</select>
				<label class="form-label" for="sexe_ins">Sexe:</label>
			</div>
			<div class="form-floating mb-2 border border-1 border-primary">
				<input type="text" name="nom_pere_ins" id="nom_pere_ins" placeholder="Nom du père:" class="form-control">
				<label for="nom_pere_ins">Nom du Père:</label>
			</div>
			<div class="form-floating mb-2 border border-1 border-primary">
				<input type="text" name="nom_mere_ins" id="nom_mere_ins" placeholder="Nom de la Mère:" class="form-control">
				<label for="nom_mere_ins">Nom de la Mère:</label>
			</div>
			<div class="form-floating mb-2 border border-1 border-primary">
				<input type="text" name="adresse_ins" id="adresse_ins" placeholder="Adresse:" class="form-control">
				<label for="adresse_ins">Adresse:</label>
			</div>
		</div>
		<div class="col-6">
			<div class="form-floating mb-2 border border-1 border-primary">
				<input type="text" name="telephone_ins" id="telephone_ins" placeholder="Téléphone:" class="form-control">
				<label for="telephone_ins">Téléphone:</label>
			</div>
			<div class="form-floating mb-2 border border-1 border-primary">
				<input type="mail" name="mail_ins" id="mail_ins" placeholder="Mail:" class="form-control">
				<label for="mail_ins">Mail:</label>
			</div>
			<div class="form-floating mb-2 border border-1 border-primary">
				<select name="type_bacc_ins" id="type_bacc_ins" class="form-select">
					<option value="GENERALE">BACC GENERALE</option>
					<option value="TECHNIQUE">BACC TECHNIQUE</option>
				</select>
				<label class="form-label" for="type_bacc_ins">Type de Bacc:</label>
			</div>
			<div class="form-floating mb-2 border border-1 border-primary">
				<select name="serie_ins" id="serie_ins" class="form-select">
					<option value="SCIENTIFIQUE">SCIENTIFIQUE (C/D)</option>
					<option value="LITTERAIRE">LITTERAIRE (A1/A2)</option>
					<option value="OSE">OSE</option>
					<option value="FTG">FTG</option>
					<option value="FPI">FPI</option>
				</select>
				<label class="form-label" for="serie_ins">Série:</label>
			</div>
			<div class="form-floating mb-2 border border-1 border-primary">
				<input type="number" name="num_bacc_ins" id="num_bacc_ins" placeholder="Numéro au Bac:" class="form-control">
				<label for="num_bacc_ins">Numéro au Bac:</label>
			</div>
			<div class="form-floating mb-2 border border-1 border-primary">
				<select name="annee_bacc_ins" id="annee_bacc_ins" class="form-select">
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022" selected>2022</option>
				</select>
				<label class="form-label" for="annee_bacc_ins">Année du Bac:</label>
			</div>
			<div class="form-floating mb-2 border border-1 border-primary">
				<input type="text" name="centre_ins" id="centre_ins" placeholder="Centre d'examen au Bac:" class="form-control">
				<label for="centre_ins">Centre d'examen au Bac:</label>
			</div>
			<div class="form-floating mb-2 border border-1 border-primary">
				<input type="text" name="cin_ins" id="cin_ins" placeholder="Numéro CIN:" class="form-control">
				<label for="cin_ins">Numéro CIN:</label>
			</div>
			<div class="form-floating mb-2 border border-1 border-primary">
				<select name="parcours_ins" id="parcours_ins" class="form-select">
					<option value="DA2I" selected>DA2I (Informatique)</option>
					<option value="RPM">RPM (Multimédia)</option>
					<option value="AES">AES (Administration)</option>
				</select>
				<label class="form-label" for="parcours_ins">Parcours:</label>
			</div>
		</div>
	</div>
	<div class="row ">
		<div class="col-8">

		</div>
		<div class="col">
			<button style="height: 28px;" type="button" id="annuler" class="btn btn-outline-danger btn-sm mb-2">ANNULER</button>
			<button style="height: 28px;" type="button" id="" class="btn btn-outline-success btn-sm mb-2">SAUVER</button>
		</div>
	</div>
</form>
<!-- Alert inscription reussi -->
<div class="toast" id="notificationAjout">
	<div class="toast-body">
		<h6 class="h5 d-inline text-primary mx-1" style="position:relative;left:50px;">inscription réussie!</h6>
		<button type="button" class="btn-close btn-close-md d-inline" data-bs-dismiss="toast" style="position:relative;left:110px;"></button>
	</div>
</div>