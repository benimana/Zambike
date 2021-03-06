

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zambike</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Zambike</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo $first_name.' '.$last_name; ?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Zambike</h1>
          <div class="list-group">
            <a href="index.html" class="list-group-item">bikes</a>
            <a href="carts.html" class="list-group-item">carts</a>
            <a href="parts.html" class="list-group-item">Spare parts</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="05.jpg"  alt="First slide" style="width: 900px; height: 330px">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="06.jpg" alt="Second slide" style="width: 900px; height: 330px">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="07.jpg" alt="Third slide" style="width: 900px; height: 330px">
              </div>
               <div class="carousel-item">
                <img class="d-block img-fluid" src="17.jpg" alt="fourth slide" style="width: 900px; height: 330px">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="18.jpg" alt="fifth slide" style="width: 900px; height: 330px">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="19.jpg" alt="sixth slide" style="width: 900px; height: 330px">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
            
                <form action="registratiion.php" method="post">
    Product's code:<input type="text" name="first_name"><p/>
    country of Buying:<input type="text" name="last_name"><p/>
    Shipping company:<input type="text" name="last_name"><p/>
    <input type="submit" value="calculate">
              </form>
               

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->
 <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
            
                <form action="registratiion.php" method="post">
    Product's price:<input type="text" name="first_name"><p/>
    tax fee:<input type="text" name="last_name"><p/>
    Shipping fee:<input type="text" name="last_name"><p/>
    Transaction fee:<input type="text" name="last_name"><p/>
    Total price:<input type="text" name="last_name"><p/>
    <input type="submit" value="order now">
              </form>
              </div>
              </div>
      </div>
      <!-- /.row -->

  


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
