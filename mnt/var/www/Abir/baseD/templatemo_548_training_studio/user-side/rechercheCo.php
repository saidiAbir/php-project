<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="background-image: url('./css/schedule-bg.jpg');">
  <div class="wrapper">
    <?php
    include_once('../controllers/CoursController.php');
    $critere = $_POST["critere"];
    $valeur = $_POST["valeur"];
    $controller = new CoursController();

    $rechercheCours = $controller->rechercheCours($critere, $valeur);
    if ($rechercheCours->rowCount() > 0) {
      echo "
<table border=1>
<tr><th>num</th><th>nom</th><th>nomC</th><th>heureD</th><th>duree</th><th>prix</th></tr>";
      while ($l = $rechercheCours->fetch()) {
        echo "<tr>";
        echo "<td>" . $l[0] . "</td>";
        echo "<td>" . $l[1] . "</td>";
        echo "<td>" . $l[2] . "</td>";
        echo "<td>" . $l[3] . "</td>";
        echo "<td>" . $l[4] . "</td>";
        echo "<td>" . $l[5] . "</td>";


        echo "</tr>";
      }
      echo "</table>";
    } else {
      header("refresh:0.1 ;url = rechercheCo.html");
    }
    ?>
  </div>
</body>

</html>