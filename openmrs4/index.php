<?php
	$stat=isset($_GET['q'])?$_GET['q']:-1;
	switch($stat){
		case 1:
		$info ="<div class='alert alert-danger'>
  				<strong>Login Failed!</strong> Wrong email or password.
				</div>";
		break;
		
		case -1:
		$info ="<div class='alert alert-info'>
  				<strong>Login !</strong> Enter email and password.
				</div>";
		break;
		
		case 3:
		$info ="<div class='alert alert-success'>
  				<strong>Logged out!</strong> Successfully logged out.
				</div>";
		break;
		
		default:
		$info ="<div class='alert alert-info'>
  				<strong>Login !</strong> Enter email and password.
				</div>";
		break; 
	}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Medfocus Sign in</title>
  <link rel="stylesheet" href="css/lstyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="container">
  <img src="images/medfocuslogo.png" alt="medfocuslogo">
  <div class="login-page">
  <?php echo $info; ?>
  <div class="form">
    <form class="login-form" action="actions/processing.php" method="post">
      <input type="text" name="uname" placeholder="email"/>
      <input type="password" name="pass" placeholder="password"/>
      <button ">login</button>
      </form>
  </div>
</div>
</div>

</body>
</html>
