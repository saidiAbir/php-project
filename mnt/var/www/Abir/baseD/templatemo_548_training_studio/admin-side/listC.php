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
    include_once('../controllers/ClientController.php');
    $id = $_POST["id"];
    $controller = new ClientController();
    $list = $controller->liste(); {

      echo "<table border=1>";
      echo "<tr><th>id</th><th>prenom</th><th>nom</th><th>age</th><th>height</th><th>weight</th><th>email</th><th>mdp</th></tr>";
      while ($l = $list->fetch())
        echo "<tr>
 <td>$l[0]</td>
<td>$l[1]</td>
<td>$l[2]</td>
<td>$l[3]</td>
<td>$l[4]</td>
<td>$l[5]</td>
<td>$l[6]</td>
<td>$l[7]</td>";



      echo "</tr>";
    }
    echo "</table>";


    ?>
  </div>
</body>

</html>