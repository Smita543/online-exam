<?php
include("class/users.php");
$email = $_SESSION['email'];
$profile->users_profile($email);
//$profile->($profile->cat);
//$profile->($profile->data);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Online-Exam </h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <li><a data-toggle="tab" href="#menu2"></a></li>
    <li style = "float : right "><a data-toggle="tab" href="#menu3">logout</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <button type="button" class="btn btn-primary">Start Exam</button>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Show</h3>
    </div>
    
    
     
      
    </div>
  </div>
</div>

</body>
</html>
