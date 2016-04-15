<?php require_once 'core/init.php';
$result = mysqli_query($con, "SELECT ScholarshipName,SchoolId,Amount,gpa,act,sat,link FROM school_scholarships");


  echo "<table border='1'>
    <tr>
      <th>ScholarshipName</th>
      <th>SchoolId</th>
      <th>Amount</th>
      <th>gpa</th>
      <th>ACT</th>
      <th>SAT</th>
      <th>link</th>
    </tr>";

while ($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['ScholarshipName'] . "</td>";
  echo "<td>" . $row['SchoolId'] . "</td>";
  echo "<td>" . $row['Amount'] . "</td>";
  echo "<td>" . $row['gpa'] . "</td>";
  echo "<td>" . $row['act'] . "</td>";
  echo "<td>" . $row['sat'] . "</td>";
  echo "<td>" . $row['link'] . "</td>";
  echo "</tr>";
}

echo "</table>";
