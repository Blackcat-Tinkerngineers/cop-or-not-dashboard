<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cop-or-Not</title>

  <!-- the following links are from Chelsie and need to be used for button functionality -->
  <!-- jquery -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css" rel="stylesheet">
  <!-- bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- handlebars -->
  <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>

  <!-- personal stylesheet -->
  <link href="./assets/css/style2.css" rel="stylesheet">
  <link href="./assets/css/swipe2.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
  <div class="container">
    <nav>
      <ul class="navbar">
        <li class="current">
          <a href="./index.php">Home</a>
        </li>
        <li>
          <a href="./login.php">Login</a>
        </li>
        <li>
          <a href="./dashboard.php">Dashboard</a>
        </li>
        <li>
          <a href="./swipe2.php">Swipe Marketplace</a>
        </li>
        <li>
          <a href="./contact2.php">Contact</a>
        </li>
      </ul>
    </nav>
  </div>


  <header>
    <div class="container">
    <p class="d-flex text-light">Click the NFT to save to dashboard and track metrics</p>
    </div>
    </header>


<div class="container">
    <div class="col-6" onclick="displayRandomImages()">
      <button onclick="displayRandomImages()" type="button" id="btn1"
        class=" btn btn-sm btn-primary rounded float-left">
        <img src="#" width="200" height="200" />
      </button>
    </div>
  
  <div class= "d-flex container ">
    <div class="col-6">
    <div class="row-2">
      <button onclick="displayRandomImages()" type="button" id="btn3"
        class="btn btn-sm btn-danger">Don't Like it! Skip!</button>
      </div>
    </div>
  </div>
</div>




<footer class="mt-auto">
        <p>&copy; Group Six</p>

    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="./assets/js/Swipe.js"></script>
</body>

</html>