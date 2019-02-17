
<?php
echo '<h2>Podgląd zadań</h2>';
$sql = "SELECT * FROM zadania WHERE id_user = '".$_SESSION['user_id']."' ORDER BY data";
//echo $sql;
$baza->polacz();
$res = $baza->zapytanie($sql);

while($row = $res->fetch_assoc()){
  ?>
  <div class="jumbotron">
    <h3><?= $row['tytul'] ?></h3>
    <p class="lead"><?= $row['opis'] ?></p>
    <hr class="my-4">
    <p>Termin wykonania: <?=$row['data'] ?> <br /> Data dodania: <?= $row['data_dodania'] ?></p>
  </div>
  <?php
}
