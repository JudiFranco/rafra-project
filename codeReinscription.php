<!-- modal reinscription -->
<div class="modal" id="modalReAjout">
	<div class="modal-dialog">
		<div class="modal-content bg-light">
			<div class="modal-header">
				<h4 class="modal-title text-danger">Réinscription</h4>
			</div>
			<div class="modal-body">

				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<input type="text" name="nom_rins" id="nom_rins" placeholder="Nom:" class="form-control">
					<label for="nom_rins" class="form-label">Nom:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<input type="text" name="prenom_rins" id="prenom_rins" placeholder="Prénoms:" class="form-control">
					<label for="prenom_rins" class="form-label">Prénoms:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<input type="date" name="date_naiss_rins" id="date_naiss_rins" class="form-control">
					<label class="form-label" for="date_naiss_rins">Date de naissance:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<input type="text" name="lieu_naiss_rins" id="lieu_naiss_rins" placeholder="A:" class="form-control">
					<label for="lieu_naiss_rins" class="form-label">A:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<input type="text" name="adresse_rins" id="adresse_rins" placeholder="Adresse:" class="form-control">
					<label for="adresse_rins">Adresse:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<input type="text" name="cin_rins" id="cin_rins" placeholder="Numéro CIN:" class="form-control">
					<label for="cin_rins">Numéro CIN:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<select name="parcours_rins" id="parcours_rins" class="form-select">
						<option value="DA2I" selected>DA2I (Informatique)</option>
						<option value="RPM">RPM (Multimédia)</option>
						<option value="AES">AES (Administration)</option>
					</select>
					<label class="form-label" for="parcours_rins">Parcours:</label>
				</div>
				<div class="form-floating mb-2 border border-0 text-dark border-dark">
					<select name="niveau_reinscription" id="niveau_reinscription" class="form-select">
						<option value="L1">PREMIERE ANNEE</option>
						<option value="L2" selected>DEUXIEME ANNEE</option>
						<option value="L3">TROISIEME ANNEE</option>
					</select>
					<label class="form-label" for="niveau_reinscription">Niveau:</label>
				</div>

			</div>

			<div class="modal-footer">
				<button type="button" id="sauver_rins" class="btn btn-danger" data-bs-dismiss="modal">Oui</button>
				<button type="button" class="btn btn-success" data-bs-dismiss="modal">Non</button>
			</div>

		</div>
	</div>
</div>

<h3 class="h2 text-danger mt-5 text-center">Payement</h3>

<div>
	
</div>