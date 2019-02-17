<h3>Logowanie</h3>

<form action="<?php echo $baza->waliduj($_SERVER['REQUEST_URI']); ?>" method="post">
	<div class="form-group">
		<label for="login">Login:</label>
		<input type="text" class="form-control" name="login">
	</div>
	<div class="form-group">
		<label for="pass">Hasło:</label>
		<input type="password" class="form-control" name="pass">
	</div>
	<div class="form-group">
		<input type="submit" value="Zaloguj" class="btn btn-danger">
	</div>
</form> 
	