<html>
  <head>
    <title></title>
  </head>
  <body>
    <p id="top">
      <a href="#schools">Schools</a>
      <a href="#states">States</a>
      <a href="#scholarships">Scholarships</a>
    </p>
    <h3>Insert a School</h3>
    <form action="insertschool.php" method="post">
      School: <input type="text" name="school"><br/>
      StateId: <input type="number" name="stateid"><br/>
      <input type="submit">
      <br/>
      <br/>
    </form>
    <h3>Insert a Scholarship (school must be made first)</h3>
    <form action="insertscholarship.php" method="post">
      Scholarship Name: <input type="text" name="scholarshipname"><br/>
      SchoolId: <input type="number" name="schoolid"><br/>
      Amount: <input type="number" name="amount"><br/>
      GPA: <input type="number" step=".01" name="gpa"><br/>
      ACT: <input type="number" name="act"><br/>
      SAT: <input type="number" name="sat"><br/>
      Link: <input type="text" name="link"><br/>
      <input type="submit">
    </form>
    <h2 id="schools">Schools</h2>
    <?php
    include 'schools.php';
    ?>
    <p><a href="#top">Back to top</a></p>
    <h2 id="states">States</h2>
    <?php
    include 'states.php';
    ?>
    <p><a href="#top">Back to top</a></p>
    <h2 id="scholarships">Scholarships</h2><br/>
    <?php
    include 'scholarships.php';
    ?>
    <p><a href="#top">Back to top</a></p>
  </body>
</html>
