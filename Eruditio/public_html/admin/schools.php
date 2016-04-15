<?php require_once 'core/init.php';
$result = mysqli_query($con, "SELECT id,SchoolName,StateId FROM schools");

echo "<table border='1'>
  <tr>
    <th>id</th>
    <th>SchoolName</th>
    <th>StateId</th>
  </tr>";

while ($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['SchoolName'] . "</td>";
echo "<td>" . $row['StateId'] . "</td>";
echo "</tr>";
}

echo "</table>";
