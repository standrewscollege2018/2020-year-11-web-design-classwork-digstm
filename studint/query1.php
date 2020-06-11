<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // connet it to the DB
    $db_connect = mysqli_connect("localhost","root","","student-db");

    // crate a qwerey
    $student_sql = "SELECT `First-name`,`Last-name` FROM `students` WHERE `student-ID` = 5"
    // run qwerey
    $student_qry = mysqli_query($db_connect,$student_sql);
    // store resolt in array
    $student_aa = mysqli_fetch_assoc($student_qry);
    // desplay resolt
    echo $student_aa;
     ?>
  </body>
</html>
