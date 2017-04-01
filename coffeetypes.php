<!DOCTYPE html>
<html ng-app="types">
  <head>
    <title>Types of Coffee</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
  </head>
  <script src="js/angular.min.js"></script>

  <body ng-controller="Main">
    <script src="js/coffeeTypes.js"></script>
    <nav>
      <ul class="nav nav-tabs">
        <li><a href="index.php">Home</a></li>
        <li><a href="coffeetypes.php">Coffee Types</a></li>
        <li><a href="coffeeshops.php">Coffee Around the 'Burgh</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>

    <div ng-repeat="obj in types" class="coffee-types">
      <h1>{{ obj.title }}</h1>
      <img ng-src="{{ obj.imageURL }}" alt="{{ obj.alt }}">
      <p>{{ obj.description }}</p>
      <p>Source found <a ng-href="{{ obj.source }}" target="_blank">here.</a></p>
    </div>

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
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

  </body>
</html>
