<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>WEB</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/content.css">
    <link rel="stylesheet" href="assets/css/global/scroll-senkatech.css">
    <link rel="stylesheet" href="assets/css/accordion-sidebar-L-senkatech.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark-Multi-Column-icons.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/Projects-Grid-images.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
    </style>
    </head>

<body>

<!-- Sidebar with image -->
<nav class="navbar navbar-dark navbar-expand-md sticky-top" style="background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #fafafa), color-stop(1, #fafafa));border-bottom: 1px solid #c2c7d1;border-top: 1px solid #c2c7d1;">
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php"><span style="color: rgb(159, 159, 159);">Home</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="ecourse.php"><span style="color: rgb(159, 159, 159);">Ecourse</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="diskusi.php"><span style="color: rgb(159, 159, 159);">Q N A</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profil.php"><span style="color: rgb(159, 159, 159);">Profile</span></a></li>
                </ul>
                <ul class="navbar-nav class= float-right ">
                    <li class="nav-item"><a class="nav-link" href="login.php"><span style="color: rgb(159, 159, 159);">Login</span></a></li>
                </ul>
            </div>
        </div>
    </nav>

<!-- Page Content -->
<div class="w3-main w3-padding-large" style="margin-left:0%">
  <!-- Menu icon to open sidebar -->
  <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

  <!-- Header -->
  <header class="w3-container w3-center" style="padding:128px 16px" id="home">
    <h1 class="w3-jumbo"><b>Ecourse Photography</b></h1>
    <p>Tempat Belajar,Latihan & sharing seputar photography.</p>
    <img src="/w3images/profile_girl.jpg" class="w3-image w3-hide-large w3-hide-small w3-round" style="display:block;width:60%;margin:auto;">
    <img src="/w3images/profile_girl.jpg" class="w3-image w3-hide-large w3-hide-medium w3-round" width="1000" height="1333">

      <div class="row">
      <div class="col w3-center mb-1"><a class="btn btn-dark button-comment" role="button" href="ecourse.php">Ecourse</i></a></div>
      </div>
  </header>
   <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-1" id="about">
    <h2 align="center">About</h2>
    <hr class="w3-opacity">
    <p>Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing
      elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
    

  <!-- Portfolio Section -->
  <div class="w3-padding-20 w3-content" id="portfolio">
    <h2 class="w3-text-grey" align="center">Karya Anak Bangsa</h2>
    <hr class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="assets/img/h2.jpg" style="width:100%">
        <img src="assets/img/h3.jpg" style="width:100%">
        <img src="assets/img/h4.jpg" style="width:100%">
      </div>
      <div class="w3-half">
        <img src="assets/img/h5.jpg" style="width:100%">
        <img src="assets/img/h6.jpg" style="width:100%">
        <img src="assets/img/h7.jpg" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

 
  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin:-24px">

    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  <!-- End footer -->
  </footer>
  
<!-- END PAGE CONTENT -->
</div>

<script>
// Open and close sidebar
function openNav() {
  document.getElementById("mySidebar").style.width = "60%";
  document.getElementById("mySidebar").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
