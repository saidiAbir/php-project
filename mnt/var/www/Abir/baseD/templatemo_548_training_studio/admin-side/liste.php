<?php
include_once('../controllers/CoursController.php');
$numC = $_POST["numC"];
$controller = new CoursController();
$list = $controller->liste(); {

  echo "<table border=1>";
  echo "<tr><th>num</th><th>nom</th><th>nomC</th><th>heureD</th><th>duree</th><th>prix</th></tr>";
  while ($l = $list->fetch())

    echo "<tr>
  <td> $l[0]</td>
  <td>$l[1] </td>
<td> $l[2]</td>
 <td>$l[3] </td>
  <td> $l[4] </td>
  <td>$l[5] </td>


  </tr>";
}
echo "</table>";
