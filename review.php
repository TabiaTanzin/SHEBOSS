
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SheBoss</title>
  
  
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css" >
 <!--Main CSS--->
	
	
	 <link rel="stylesheet" href="css/style2.css" >
	 <link href="https://fonts.googleapis.com/css2?family=Pattaya&family=Russo+One&family=Saira+Condensed&display=swap" rel="stylesheet"
	 
  
</head>

<body>

  <nav class="navbar navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      Welcome! 
<div class="nav justify-content-end ml-auto">
  <a class="nav-item nav-link" href="about.html">About<span class="sr-only">(current)</span></a>
  <a class="nav-item nav-link" href="home.php">Find Businesses</a>
   <a class="nav-item nav-link" href="breg.php">Registration Form for Businesses</a>
  <a class="nav-item nav-link" href="review.php">Feedback Form for Businesses</a>
  <a class="nav-item nav-link" href="signout.php">Sign Out</a>
</div>

    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col pt-5">
        <h1 class="ProjectName">She<br>Boss</h1>
        <h2 class="subtitle">support women-owned businesses</h2>
		</div>
		</div>
		</div>
		
		
		<h2> <center> Feedback Form</h2></center>
    <br></br>
    <br></br>
    <div class="container">

      <form action="review1.php" method="POST">
        <div class="form-group row">
            <label class="col-sm-3" col-form-label><h3>UserName</h3></label>
            <div class="col-md-9">
          <input
            type="text"
            name='uname'
            class="form-control"
          />
          </div>
        </div>
        <div class="container">
          <form action="review1.php" method="POST">
           <div class="form-group row">
            <label class="col-sm-3" col-form-label><h3>Company</h3></label>
            <div class="col-md-9">
             <input
               type="text"
               name='cname'
               class="form-control"
          />
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3" col-form-label><h3>Please rate Company</h3></label>
            <div class="col-md-9 form-check-inline  offset-sm-3">
          <input type="radio" name="rate" value="1" class="form-control" /> 1
          <input type="radio" name="rate" value="2" class="form-control" /> 2
          <input type="radio" name="rate" value="3" class="form-control" /> 3
          <input type="radio" name="rate" value="4" class="form-control"/> 4
          <input type="radio" name="rate" value="5" class="form-control" checked /> 5
        </div>
        </div>

        <div class="form-group row col-sm-9">
            <label class="col-sm-3" col-form-label><h3>Comments</h3></label>
          <textarea
            name="com"
            id=""
            cols="65"
            rows="10"
            placeholder="Tell us what you liked and/or did not like"
          ></textarea>
        
        </div>
		
        <div class="row">
            <div class=" but ">
                <input type="submit" name="sub"
				 class="btn btn-danger" class="form-control" />
             </div>
        
        </div>
		
       </div>
      </form>
      <br>      
              </div>
			  
			  
			  
			  
			  
			  
			  
			  <?php 
$link = mysqli_connect("localhost", "root", "", "registration");

$query = "SELECT * FROM review";




if ($result = mysqli_query($link,$query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["uname"];
        $field2name = $row["cname"];
        $field3name = $row["rate"];
        $field4name = $row["com"];
		echo '<table border="2" cellspacing="2" cellpadding="2" > 
      <tr> 
          <td> <font face="Arial"><b>UserName</b></font> </td> 
          <td> <font face="Arial"><b>Company Name</b></font> </td> 
          <td> <font face="Arial"><b>Rating</b></font> </td> 
          <td> <font face="Arial"><b>Comment</b></font> </td> 
          
      </tr>';
        

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
				  <br>
				  <br>
				                 
              </tr>
			  
			  
				  
			  
			  '
			  
			  
			  
			  ;
			  
			 
			  
			 
			  
			 
    }
    $result->free();
} 
?>
           



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>