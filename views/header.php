<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://www.bookio.pk/styles.css">


    <title>Bookio</title>
  </head>

  <body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="https://www.bookio.pk/demo.php">
      <img id="logoB" src="img\logo-blue.svg" width="145px">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">

      <!-- <li class="nav-item">
        <a class="nav-link" href="?page=timeline">TimeLine</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="?page=tweets">Tweets</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="?page=profile">Public Profile</a>
      </li> -->
      
    </ul>
    <div class="form-inline">
      
      <?php if (isset($_SESSION['id'])) { ?>

        <a class="btn btn-outline-success my-2 my-sm-0" href="?func=logout">Logout</a>

      <?php  } else { ?>

        <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#exampleModal">Login/SignUp</button>  
      
      <?php } ?>

    </div>
  </div>
</nav>