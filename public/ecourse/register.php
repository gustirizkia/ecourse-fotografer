<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<title>Login</title>
</head>
<body>
<!-- Navbar-->
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
<!-- Navbar-->
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<h2 align="center">Daftar Member</h2>
			<form action="/action_page.php">
			  <div class="form-group">
			    <label for="email">Email address:</label>
			    <input type="email" class="form-control" placeholder="Enter email" id="email">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
			  </div>
			  <div class="form-group">
			    <label for="email">No Telepon :</label>
			    <input type="email" class="form-control" placeholder="Enter email" id="email">
			  </div>
			  <div class="form-group form-check">
			    <label class="form-check-label">
			      <input class="form-check-input" type="checkbox"> Remember me
			    </label>
			  </div>
			  <button type="submit" class="btn btn-primary">Daftar</button>
			</form>
		</div>
		<div class="col-sm-6">
			<img src="assets/img/l2.jpg" alt="login" style="width:100%">
		</div>
	</div>
</div>

</body>
</html>