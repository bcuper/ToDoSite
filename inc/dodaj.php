<?php
  $errors='';
  $flaga = true;
  $opis = '';
  $tytul ='';
  $data = '';

  if (isset($_POST['dodaj'])) {

    if ($baza->waliduj($_POST['tytul'])!='') {
      $tytul = $baza->waliduj($_POST['tytul']);
    } else {
      $errors .= '<div class="alert alert-danger" role="alert">Pole tytuł nie może być puste</div>';
    }

    if ($baza->waliduj($_POST['opis'])!='') {
      $opis = $baza->waliduj($_POST['opis']);
    } else {
      $errors .= '<div class="alert alert-danger" role="alert">Pole opis nie może być puste</div>';
    }

    if ($baza->waliduj($_POST['data'])!='') {
      $data = $baza->waliduj($_POST['data']);
    } else {
      $errors .= '<div class="alert alert-danger" role="alert">Pole data nie może być puste</div>';
    }


    if ($errors == '') {
      $sql = "INSERT INTO zadania (tytul, opis, data, id_user) VALUES ($tytul, $opis, $data, )";
      echo $sql;

    }
  }



  echo '<br>'.$errors;
?>



<h3>Dodawanie zadań</h3>
  <form action="<?php echo $baza->waliduj($_SERVER['REQUEST_URI']); ?>" method="post">
    <div class="form-group">
      <label for="tytul">Tytuł</label>
      <input class="form-control" type="text" name="tytul" value="<?= $tytul ?>" placeholder="Wpisz tytuł zadania">
    </div>
    <div class="form-group">
      <label for="opis">Opis:</label>
      <textarea class="form-control" name="opis" rows="8" cols="80" placeholder="Opis zadania"><?= $opis ?></textarea>
    </div>
    <div class="form-group">
      <label for="data">Data wykonania:</label>
      <input class="form-control" type="datetime" name="data" value="<?= $data ?>" placeholder="Wpisz datę w formacie YYYY-MM-DD">
    </div>
    <div class="form-group">
      <input class="btn btn-danger" type="submit" name="dodaj" value="Dodaj zadanie">
    </div>
  </form>
