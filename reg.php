
<html>
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css" >
 <!--Main CSS--->
	
	
	 <link rel="stylesheet" href="css/style.css" >
	
	
</head>
<title>
SHE-BOSS</title>
<body>


<div class="navb">

<nav class="navbar navbar-expand-lg navbar-light"style=" background-color:#FF90B0">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto font-weight-bold">
      <li class="nav-item active pl-3">
        <a class="nav-link" href="#logg">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#logg">Registration</a>
      </li>
      
    </ul>
  </div>
</nav>
</div>


<div class="row">
<div class="col-md-6">
<h1 class="ProjectName pt-5">SHE<br>BOSS</h1>
<h2 class="subtitle">support women-owned businesses</h2>

</div>
<div class="col-md-6">
<img src="image/cv.jpg" alt="landing image" id="landing-img">
</div>



<div class="login" id="logg">
<div class="form">

<form action="log.php" method="post" class="reg">
    
<h1 class="pb-4" style="text-align:center"><b>Login</b></h1>
  
    <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="User Name">
    

      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	  
    
  <button type="submit" name="signin" ">Sign In </button>





<p class="meg" style="text-align:center">Don't have an account? 
  <a href="#" >Register here!</a>
  </p>
  </form>
  
  
  
  <form  action="reg1.php" method="post"  class="reg2" >
  <h1 class="pb-4" style="text-align:center"><b>Create Account</b></h1>
  
    <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="User Name">
	 <input type="email" name="email" class="form-control" id="exampleInputEmail1"  placeholder="Email">
    

      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	  
    
  <button type="submit" name="signup" class="btn btn-primary">Create </button>

<p class="meg" style="text-align:center">Have an account? 
 <a href="#" class="w3-bar-item w3-button">Login here!</a>
  </p>
</form>

  
  
  </div>
  </div>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script>
  $('.meg a').click(function(){
  $('form').animate({height:"toggle",opacity:"toggle"},"slow");
  });
</script>
  
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
	
    <script src="js/bootstrap.bundle.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/testi.js"></script>
</html>










