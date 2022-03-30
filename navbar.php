<!DOCTYPE html>
<html lang="en">
  <html>
    <head>
      <title>Registration</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta charset="utf-8" />


      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">



      <link rel="stylesheet" type="text/css" href="../css/registration_style.css"/>
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      />
      <link
        href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600"
        rel="stylesheet"
        type="text/css"
      />
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/responsive.css">
      <link rel="stylesheet" href="../css/navbar.css">

    </head>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark dmenu">
            <div class="container-fluid dmenudiv">
              <!-- <a class="navbar-brand" href="https://www.police.gov.bd/"> -->
                <img src="../images/logo2.png">
              </a>
              <button class="navbar-toggler dtoggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 listing">
                  <li class="nav-item ">
                    <a class="nav-link" aria-current="page" href="home.php">Home</a>
                  </li>
                  
                  <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Area     
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Dhaka</a></li>
                      <li><a class="dropdown-item" href="#">Chittagong</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Other</a></li>
                    </ul>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="../Pages/about.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../Pages/contact.php">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Pages/faq.php">FAQ</a>
                  </li>
                  <li class="nav-item dropdown">
                    <?php
                      if($_SESSION["name"]) {
                        echo '<p style="color: white;"> Welcome <code>'.$_SESSION["name"].'</code></p>'; 

                        echo '<li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="../php/logout_session.php">Logout</a>';

                        }
                        elseif(isset($_SESSION['aid'])) {
                          echo '<p style="color: white;"> Welcome <code> '.$_SESSION["aname"].' </code></p>';

                          echo '<li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../php/logout_session.php">Logout</a>';
                        }
                        else {
                        // echo "<p style=\"color:white;\">Please login first .</p>";
                        echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Login
                        </a>
                        <ul class="dropdown-menu log" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="../Pages/login.php">User</a></li>
                          <li><a class="dropdown-item" href="../Pages/official_login.php">Admin</a></li>
                        </ul>';
                      }

                    ?>
                    </li>
                    <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login
                    </a> -->
                    <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="../Pages/login.php">User</a></li>
                      <li><a class="dropdown-item" href="../Pages/official_login.php">Admin</a></li>
                    </ul> -->
                  </li>
                </ul>
                <!-- <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
              </div>
            </div>
          </nav>