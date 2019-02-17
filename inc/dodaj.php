<?php
  $errors='';
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

    $data .= $_POST['year']."-".$_POST['month']."-".$_POST['day'];


    if ($errors == '') {
      $sql = "INSERT INTO zadania (tytul, opis, data, id_user, data_dodania) VALUES ('$tytul', '$opis', '$data', '".$_SESSION['user_id']."', NOW())";
      //echo $sql;
      $baza->polacz();
      if($res = $baza->zapytanie($sql)){
        $errors .=  '<div class="alert alert-success" role="alert">Dodano zadanie</div>';
      } else {
        $errors .= '<div class="alert alert-danger" role="alert">Błąd. Zadanie nie zostało dodane</div>';
      }
    }
  }
  echo '<br>'.$errors;
?>



<h2>Dodawanie zadań</h2>
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
      <label for="data">Termin wykonania:</label>
      <div class="form-inline">
        <label for="year">Rok:&nbsp;</label>
        <select class="custom-select" name="year">
          <option><?= date("Y") ?></option>
          <option><?= date("Y")+1 ?></option>
        </select>&nbsp;
        <label for="month">Miesiąc: </label>&nbsp;
        <select class="custom-select" name="month">
          <?php for ($i=1; $i < 13; $i++) {
            echo "<option ".($i == date("m")?'selected':'').">".($i<10?"0".$i:$i)."</option>";
          } ?>
        </select>&nbsp;
        <label for="day">Dzień</label>&nbsp;
        <select class="custom-select" name="day">
          <?php for ($i=1; $i < 32; $i++) {
            echo "<option ".($i == date("d")?'selected':'').">".($i<10?"0".$i:$i)."</option>";
          } ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <input class="btn btn-danger" type="submit" name="dodaj" value="Dodaj zadanie">
    </div>
  </form>
