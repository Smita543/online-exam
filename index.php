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
        <div class = "row">
            <div class="panel panel-info">
                <div class="panel-heading">Online-exam system</div>
                <div class="panel-body">Exam </div>
            </div>
        </div>
</div>
    <div class="container">
        <div class = "row">
            <div class="col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h4>Login Form</h4></div>
                <div class="panel-body">
                    <form role= "form" method = "post" action="login_sub.php">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="e"  id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h4>Signup Form</h4></div>
                <div class="panel-body">
                    <form role= "form" method = "post" action="signup_sub.php">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="n" id="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
