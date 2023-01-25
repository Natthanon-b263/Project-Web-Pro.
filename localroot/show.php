<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;200&display=swap" rel="stylesheet">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
      body,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-family: 'Prompt', sans-serif;
      }

      body,
      html {
        height: 100%;
        line-height: 1.8;
        scroll-behavior: smooth;
      }


      .w3-bar .w3-button {
        padding: 16px;
      }
    </style>
    </head>
   <BODY BGCOLOR="#eeecce"></BODY>
     <body>
    <title>ข้อมูลนักศึกษา</title>
  </head>

  <body>
  <h3> - STUDENTS' RECORD -  </h3>

  <?php
  $initial=$_POST['Initial'];
  $name=$_POST['name'];
  $email=$_POST['Email'];
  $user=$_POST['Username'];
  $password=$_POST['Password'];
  $cpassword = $_POST['cpassword'];
  $sex=$_POST['Sex'];
  $date = date("H:i, jS F, Y.");

  switch ($initial){
    case '1' :
      $S = 'นาย';
      break;
    case '2' :
      $S = 'นาง';
      break;
  }

  echo "Time processed at: $date<br> ";
  echo "name : $S $name<br>";
  echo "Sex : $sex<br>";

  echo "Used Equipment : ";
    if(filter_has_var(INPUT_POST,'PC')) {
    echo "PC , ";
  }
  if(filter_has_var(INPUT_POST,'NoteBook')) {
      echo "NoteBook , ";
  }
  if(filter_has_var(INPUT_POST,'NetBook')) {
      echo "NetBook , ";
  }
  if(filter_has_var(INPUT_POST,'Tablet')) {
      echo "Tablet , ";
  }
  if(filter_has_var(INPUT_POST,'SmartPhone')) {
      echo "SmartPhone";
  }
echo "<br/>" ;
  echo "Email : $email<br>";
  echo "Username : $user<br>";
  echo "Password : $password<br>";
  echo "cpassword : $cpassword <br>";
    ?>
  </body>
</html>
