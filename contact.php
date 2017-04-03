<?php
  if($_POST) {
    echo "Here";
    $db = new mysqli("localhost", "root", "", "contactinfo");
    if($db->connect_error) {
      echo("Connection failed: " . $db->connect_error);
    }
    mysqli_select_db($db, "contactinfo");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $gender = $_POST['gender'];
    $quer = "INSERT INTO Information VALUES (\"" . $name . "\", \"" . $email . "\", \"" . $street . "\", \"" . $city . "\", " . $zip . ", \"" . $gender . "\")";
    echo $quer . "<br>";
    $result = $db->query($quer);
    echo $result;
    mysqli_close($db);
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">

    <style>
      h4 {
        text-align: center;
        font-weight: bold;
      }
    </style>

  </head>

  <body>
    <nav>
      <ul class="nav nav-tabs">
        <li><a href="index.php">Home</a></li>
        <li><a href="coffeetypes.php">Coffee Types</a></li>
        <li><a href="coffeeshops.php">Coffee Around the 'Burgh</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
    <div style="width:100%; padding:0;margin:0;">
      <div class="content-list-theme-left">
        <h1>My Contact Information</h1>
        <br>
        <br>
        <br>
        <h4><a href="mailto:jdr86@pitt.edu">Joseph Rogers</a></h4>
        <h4>University of Pittsburgh</h4>
        <h4><a href="http://josephdrogers23.github.io" target="_blank">Personal Website</a></h4>
      </div>
      <div class="content-list-theme-right">
        <form action="" method="POST">
          <h3>Name</h3>
          <input type="text" name="name">
          <h3>Email</h3>
          <input type="text" name="email">
          <h3>Street</h3>
          <input type="text" name="street">
          <h3>City</h3>
          <input type="text" name="city">
          <h3>Zip Code</h3>
          <input type="text" name="zip">
          <h3>Gender</h3>
          <input type="radio" name="gender" value="Male">Male
          <input type="radio" name="gender" value="Female">Female
          <input type="radio" name="gender" value="Other" checked>Other
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>

    <footer>
      <br>
      <p>&copy 2017 Joe Rogers, caffeine consumer extraordinaire</p>
      <p>Pittsburgh, Pennsylvania</p>
      <p>Please note that this is for a class project. All images are mine but information on coffee was found on the Internet.</p>
    </footer>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="style/js/bootstrap.min.js"></script>
    <script src="js/angular.min.js"></script>
  </body>
</html>
