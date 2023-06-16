<?php

 

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Add Review</title>
  <link rel="stylesheet" href="addreview.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>

<body>
<div id="form">
  <div class="container">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
      <div id="userform">
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li class="active"><a href="#signup"  role="tab" data-toggle="tab">Add Review</a></li>
          
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade active in" id="signup">
            <h2 class="text-uppercase text-center"> Review</h2>
            <form id="signup" action="addm.php" method="post">
            <div class="form-group">
                <label> Your Email<span class="req">*</span> </label>
                <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Enter your mail" autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12">
                  <div class="form-group">
                    <label>Caption<span class="req">*</span> </label>
                    <input type="text" class="form-control" id="first_name" name="caption" required data-validation-required-message="Enter Caption" autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                
              </div>
             
              <div class="form-group">
                <label> Rating<span class="req">*</span> </label>
                <input type="" class="form-control" id="email" name="rate" required data-validation-required-message="Enter your mail" autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label> Review<span class="req">*</span> </label>
                <input type="tel" class="form-control" id="phone" name="review" required data-validation-required-message="Review..." autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="mrgn-30-top">
                <?php $mid1=$_GET['mid'];
                 echo "<button type='submit' name='movieid' value='".$mid1."' class='btn btn-larger btn-block'>";
                echo "Add Review";
               echo "</button>";   ?> 
              </div>
            </form>
          </div>
          
           
           
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container --> 
</div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
