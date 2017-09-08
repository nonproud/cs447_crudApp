<?php
  session_start();
  include("php/conn.php");
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $address = $_SESSION['address'];
  $img = $_SESSION['img'];
  $last_login = $_SESSION['lastlogin'];
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Item</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <style type="text/css">
      input {
        width: 300px;
      } 
      textarea {
        width: 300px;
        height: 100px;
      }      
    </style>

  </head>

  <body id="page-top" background="img/background/add_item_bg.jpg">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger">PP Storage</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="home.php">View Storage</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="user_menu.php" style="background-color:green;">Hello <?php echo $fname; ?>!</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php" style="background-color:red;">Logout</a>
            </li>
            <li cl >
          </ul>
        </div>
      </div>
    </nav>

    <br>
    <br>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center" style="color: white; border: 10px; background-color: gray">Add Item</h2>
        <hr>
        <div align="center">
          <form method="post">
            <input type="text" name="pName" placeholder="Name"> <br><br>
            <input type="text" name="pPrice" placeholder="Price"> <br><br>
            <input type="text" name="pAmount" placeholder="Amount"> <br><br>
            <textarea placeholder="description" name="pDescription"></textarea> <br><br>
            <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
            
            <button>Add</button>
            <button>Clear form</button>

          </form>

        </div>
        <div class="row">

      
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; PP STORAGE 2017
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
