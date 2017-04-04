<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pittsburgh Coffee Shops</title>

    <!-- Bootstrap -->
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
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

    <!-- Can sort in alphabetical order later on? -->
    <div class="headline" style="height: 40px">
      <h1>Places to find your inspiration</h1>
      <br>
      <br>
      <br>
    </div>
    <?php
    if (isset($_COOKIE["suggestions"])) {
      $suggestions = unserialize($_COOKIE["suggestions"]);
    }
    else {
      $suggestions = [];
    }

    $set = false;
    if($_POST) {
      $name = $_POST["shopName"];
      $neighborhood = $_POST["neighborhood"];
      $rating = "";
      $newEntry = $name . " (" . $neighborhood . ") ";
      if(isset($_POST["rad"])) {
        $rating = $_POST["rad"]; //Will retrieve selected value
        $newEntry = $newEntry . "Rating: " . $rating;
      }
      array_push($suggestions, $newEntry);
      setcookie('suggestions', serialize($suggestions));
      $set = true;
    }
    ?>
    <div class="content-list">
      <ul id="coffeeShopList">
        <li>Adda Coffee and Tea (Shadyside)</li>
        <li>Allegheny Coffee and Tea Exchange (Strip District)</li>
        <li>Espresso a Mano (Lawrenceville)</li>
        <li>Constellation Coffee (Lawrenceville)</li>
        <li>4121 MAIN (Bloomfield)</li>
        <li>Big Dog Coffee (South Side)</li>
        <li>Crazy Mocha (Various Neighborhoods)</li>
        <li>CoffeeTree (Shadyside)</li>
        <li>Blackforge Coffeehouse (Allentown)</li>
        <li>Lili Cafe (Polish Hill)</li>
        <?php
          # Help for this code comes from: https://stackoverflow.com/questions/9032007/arrays-in-cookies-php .

          if(isset($_COOKIE["suggestions"])) {
            $sugg = unserialize($_COOKIE["suggestions"]);
            $counter = 0;
            foreach ($sugg as $s) {
              echo "<li>" . $s . "</li>";
              $counter = $counter + 1;
              if($counter==3) {
                break;
              }
            }
          }
         ?>
      </ul>
    </div>

  <!--  <div class="headline"> -->
      <h3>Suggest a shop! (Entries with ratings have been suggested by the community.)</h3>

    <form method="POST" action="" id="suggestionBox">
      <h5>Name</h5>
      <input type="text" name="shopName">
      <h5>Neighborhood</h5>
      <input type="text" name="neighborhood">
      <h5>Rating</h5>

      <input type="radio" name="rad" value="1">1
      <input type="radio" name="rad" value="2">2
      <input type="radio" name="rad" value="3" checked>3
      <input type="radio" name="rad" value="4">4
      <input type="radio" name="rad" value="5">5
      <input type="submit" value="Submit!">
      <!-- Should thank user and display it in coffeeShopList above in specified format. -->
    </form>

    <footer>
    <br>
      <p>&copy 2017 Joe Rogers, caffeine consumer extraordinaire</p>
      <p>Pittsburgh, Pennsylvania</p>
      <p>Please note that this is for a class project. All images are mine but information on coffee was found on the Internet.</p>
    </footer>
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="style/js/bootstrap.js"></script>
    <script src="js/angular.min.js"></script>
    <script>

      /* I received help on this AJAX request from this URL: https://stackoverflow.com/questions/5004233/jquery-ajax-post-example-with-php .*/
      var request;
      $("form").submit(function(event){
        event.preventDefault();
        if(request) {
          request.abort();
        }
        var $form = $(this);
        var $inputs = $form.find("input");
        var serializedData = $form.serialize();
        $inputs.prop("disabled", true);
        request = $.ajax({
          url: "",
          type: "post",
          data: serializedData
        });
        request.done(function(response, textStatus){
          console.log("Success!");
          var message = document.createElement("h4");
          var text = document.createTextNode("Thanks for your suggestion! Check back later. Up to three suggestions will be entered.");
          message.appendChild(text);
          document.getElementById("suggestionBox").appendChild(message);
        });
        request.fail(function (jqXHR, textStatus, errorThrown){
          console.error("Error: " + textStatus, errorThrown);
        });
      });

      /* This code will sort the list alphabetically so that I can add to the list as I wish. */
      /* SOURCES:
      http://stackoverflow.com/questions/12554246/how-to-list-out-all-children-of-ul
      http://stackoverflow.com/questions/3546659/how-can-i-count-the-number-of-children*/
      $(document).ready(function(){
        /* Array of Coffee Shops. */
        var coffee_shops = []
        /* Retrieve data. */
        var shop_elements = $('#coffeeShopList li');
        shop_elements.each(function(){
          coffee_shops.push($(this).html());
        });
        coffee_shops.sort();
        console.log(coffee_shops);
        var counter = 0;
        shop_elements.each(function(){
          console.log(coffee_shops[counter])
          $(this).text(coffee_shops[counter]);
          /* I did not store 'this' in a variable because it refers to a unique object each time. */
          counter = counter + 1;
        });
      });
    </script>
  </body>
</html>
