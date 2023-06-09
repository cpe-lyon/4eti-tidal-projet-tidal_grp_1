<link rel="stylesheet" href="css/profile.css">
<h2>Modifier mon profil</h2>
<div class="container-profile">
    <form action="controller/profile_form.php" method="post">
	<div class="grid">
		<div class="form-group">
			<label for="name">Nom</label>
			<input id="name" type="text" name="last_name" required>
		</div>

		<div class="form-group">
			<label for="first-name">Prénom</label>
			<input id="first-name" type="text" name="name" required>
		</div>

		<div class="form-group email-group">
			<label for="email">Email (CPE)</label>
			<input id="email" type="email" name="email" required>
		</div>
		<div class="form-group">
			<label for="current_password">Password</label>
			<input id="current_password" type="password" name="current_password" placeholder="Votre mot de passe actuel" required>
		</div>
		<div class="form-group">
			<label for="password">New password</label>
			<input id="password" type="password" name="password" placeholder="Nouveau mot de passe" required>
		</div>
	</div>
	<div class="button-container">
		<button type="submit" class="button">Enregister les modifications</button>
	</div>
</form>
</div>

