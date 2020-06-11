<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <a href="chouse-name.php">go back</a>

    <?php
    $name = $_POST["name-chosen"];

    // connet it to the DBs
    $db_connect = mysqli_connect("localhost","root","","student-db");
    // crate a qwerey
    $student_sql = "SELECT First-name,Last-name FROM students WHERE First-name = 'digs'";
    echo $student_sql;
    // run qwerey
    $student_qry = mysqli_query($db_connect,$student_sql);
    // store resolt in array
    $student_aa = mysqli_fetch_assoc($student_qry);
    // desplay resolt
    echo $student_aa;
     ?>
  </body>
</html>
