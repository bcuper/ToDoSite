<?php
	$login = '';
	$pass = '';
	$errors='';
	if (isset($_POST['login'])) {

		if ($baza->waliduj($_POST['login'])!='') {
			$login = $baza->waliduj($_POST['login']);
		} else {
		  $errors .= '<div class="alert alert-danger" role="alert">Pole login nie może być puste</div>';
		}

		if ($baza->waliduj($_POST['pass'])!='') {
			$pass =md5($baza->waliduj($_POST['pass']));
		} else {
		  $errors .= '<div class="alert alert-danger" role="alert">Pole hasło nie może być puste</div>';
		}

		if ($errors == '') {
			$sql = "SELECT * FROM users WHERE login LIKE '$login' AND pass LIKE '$pass'";
			$baza->polacz();
			$res = $baza->zapytanie($sql);
			if ($res->num_rows == 1) {
				$_SESSION['zalogowany'] = 1;
				$user = $res->fetch_assoc();
				print_r ($user);
				$_SESSION['user'] = $user['login'];
				$_SESSION['user_id'] = $user['id'];
				header('Location: index.php');
			} else {
				$errors .= '<div class="alert alert-danger" role="alert">Zła nazwa uzytkownika lub hasło</div>';
			}
		}
	}
	echo '<br />'.$errors;
 ?>

<h3>Logowanie</h3>

<form action="<?php echo $baza->waliduj($_SERVER['REQUEST_URI']); ?>" method="post">
	<div class="form-group">
		<label for="login">Login:</label>
		<input type="text" class="form-control" name="login" value="<?= $login ?>">
	</div>
	<div class="form-group">
		<label for="pass">Hasło:</label>
		<input type="password" class="form-control" name="pass">
	</div>
	<div class="form-group">
		<input type="submit" value="Zaloguj" class="btn btn-danger">
	</div>
</form>
