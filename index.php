<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Test</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'inc/baza.class.php'; ?>
    <?php $baza = new Baza(); ?>
  <div class="container container-fluid">
    <h1>Strona testowa</h1>
    <p>Strona testowa, dodawanie zadań, usuwanie, podgląd</p>
    <div class="row">
      <div class="col-md-2 menu">
        <ul class="ul-menu">
          <li class="menu-item"><a class="btn btn-menu <?=($_GET['akcja']==''?'btn-active':''); ?>" href="?akcja=">Strona główna</a></li>
          <li class="menu-item"><a class="btn btn-menu <?=($_GET['akcja']=='logowanie'?'btn-active':''); ?>" href="?akcja=logowanie">Logowanie</a></li>
          <li class="menu-item"><a class="btn btn-menu <?=($_GET['akcja']=='dodaj'?'btn-active':''); ?>" href="?akcja=dodaj">Dodaj zadanie</a></li>
          <li class="menu-item"><a class="btn btn-menu <?=($_GET['akcja']=='podglad'?'btn-active':''); ?>" href="?akcja=podglad">Podgląd zadań</a></li>
        </ul>
      </div>
      <div class="col-md-10 content">
        <?php include 'inc/strona.php'; ?>
      </div>

    </div>
  </div>




</body>
</html>
