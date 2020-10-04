
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

        <form action="/categories" method="post" class="form-inline search">
          <input class="form-control mr-sm-2 ml-auto" type="search" placeholder="Type in your city here" name="city" aria-label="Search">
        
          <button class="btn btn-outline-secondary my-2 my-sm-0 ml-auto" type="button" data-toggle="modal" data-target="#myModal">Categories</button>
          <div class ="modal" id ="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h2> Categories</h2>
                </div>
               <div class = "modal-body">
             
                  <input type="checkbox" onclick="location.href='food.html'"id="category-one" name="category" value="Food-and-Drink">
                  <label for="category-one">Food & Drink </label><br>
                  <input type="checkbox" onclick="location.href='tech.html'" id="category-two" name="category" value="Tech">
                  <label for="category-two">Tech</label><br>
                  <input type="checkbox" onclick="location.href='arc.html'" id="category-three" name="category" value="Home Décor">
                  <label for="category-three">Home Décor</label><br> 
                  <input type="checkbox" onclick="location.href='beauty.html'" id="category-four" name="category" value="Hair-and-Beauty">
                  <label for="category-four">Hair and Beauty</label><br> 
                  <input type="checkbox" onclick="location.href='ent.html'" id="category-five" name="category" value="Entertainment">
                  <label for="category-five">Entertainment</label><br> 
                  <input type="checkbox"  onclick="location.href='fasion house.html'"id="category-six" name="category" value="Fashion House">
                  <label for="category-six">Fashion House</label><br> 
                  
        
                  <input type="checkbox" onclick="location.href='book.html'" id="category-eight" name="category" value="Books">
                  <label for="category-eight">Books</label><br> 
                  
                  
               </div>
              </div>
            </div>
          </div>
          <svg class="bi bi-search" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
          </svg>
        </form>

      </div>
      <div class="col pt-5 pl-5">
        <img src="image/hm.jpg" alt="landing image" id="team-img">
      </div>
    </div>
  </div>
  
    <!-- 
    <div class="card border-dark mr-auto mb-6" style="max-width: 50rem;"">
      <div class="card-body ">
    
        
        
      </div>
    </div>
  -->
  
  
</div>
</div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>