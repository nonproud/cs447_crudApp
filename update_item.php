<?php
  session_start();
  include("php/conn.php");
  $fname = $_SESSION['fname'];
  $aut_lev = $_SESSION['Aut_lev'];
  $id = $_REQUEST['id'];
  $item = mysqli_query($conn, 'SELECT * FROM `goods` WHERE ID = "'.mysqli_real_escape_string($conn, $id).'";');
  $item_array = mysqli_fetch_array($item);
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update Item</title>

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
    <script type="text/javascript" src="js/my_script.js"></script>
    <script>
      function click(){
        alert("Clicked!");
      }
    </script>

  </head>

  <body id="page-top" background="img/background/IMG_4148.jpg">

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
            <?php
              if($aut_lev == 'Administrator'){
                echo '<li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="add_user.html" style="background-color:#FEEF03; color:black;">Add user</a>
                  </li>';
              }

            ?>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="user_menu.php" style="background-color:green;">Hello <?php echo $fname; ?>!</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="php/logout.php" style="background-color:red;">Logout</a>
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
        <h2 class="text-center" style="color: white; border: 10px; background-color: black">Edit Item</h2>
        <hr>
        <div align="center">
          <form method="post" action="php/update_item.php" id="update_form">
            <?php printf('<input type="hidden" name="id" value="%s">',$id); ?>
            <table width="50%">
          <tr>
            <th> Name: </th>
            <th><?php printf('<input type="text" name="pName" value="%s"> <br><br>',$item_array['Name']) ?></th>
          </tr>
          <tr>
            <th> Price: </th>
            <th> <?php printf('<input type="text" name="pPrice" value="%s"> <br><br>',$item_array['Price']) ?></th>
            <th>  Bath.</th>
          </tr>
          <tr>
            <th> Amount: </th>
            <th> <?php printf('<input type="text" name="pAmount" value="%s"> <br><br>',$item_array['Amount']) ?></th>
            <th>Pcs.</th>
          </tr>
          <tr>
            <th>Describtion:</th>
            <th><?php printf('<textarea name="pDescription">%s</textarea> <br><br>',$item_array['Describtion']) ?></th>
          </tr>
        </table>    
            <!--<input type="file" name="fileToUpload" id="fileToUpload"><br><br>-->
            
            <input type="submit" value="Update" name="submit" style="width: 100px;">
            <input type="button" name="clearform" onclick="clearform('update_form')" value="Clear">

          </form>

        </div>
        <div class="row">
        <button onclick="click()">dddd</button>

      
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
