<?php
include("class/user.php");
$qus = new users;
$cat = $_POST['cat'];
$qus-> qus_show($cat);
// echo"<pre>";
// print_r($qus->qus);
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Online-Exam</h2>
<?php foreach($qus->qus as $qust) {?>

                    
  <table class="table table-bordered">
    <thead>
      <tr>
        <th><?php echo qust['question'];?> </th>
        <th>Firstname</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
      </tr>
    </tbody>
  </table>
<?php} ?>
</div>

</body>
</html>
