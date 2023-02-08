<!DOCTYPE html>
<html>
<head>
  <title>Échiquier PHP</title>
  <style>
    .chess-board {
      display: flex;
      flex-wrap: wrap;
      width: 200px;
    }
    .chess-square {
      width: 25%;
      height: 25%;
      background-color: #fff;
    }
    .chess-square:nth-child(odd) {
      background-color: #000;
    }
  </style>
</head>
<body>
  <h1>Créer un échiquier PHP</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="rows">Nombre de lignes :</label>
    <input type="number" id="rows" name="rows">
    <br><br>
    <label for="columns">Nombre de colonnes :</label>
    <input type="number" id="columns" name="columns">
    <br><br>
    <input type="submit" value="Créer échiquier">
  </form>
  <br><br>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $rows = $_POST["rows"];
      $columns = $_POST["columns"];
      echo '<div class="chess-board">';
      for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
          echo '<div class="chess-square"></div>';
        }
      }
      echo '</div>';
    }
  ?>
</body>
</html>
