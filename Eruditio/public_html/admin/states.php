<?php require_once 'core/init.php';
$result = mysqli_query($con, "SELECT id,state FROM states");

echo "<table border='1'>
  <tr>
    <th>id</th>
    <th>state</th>
  </tr>";

while ($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "</tr>";
}

echo "</table>";
