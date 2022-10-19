<?php include 'include/conn.php';

$db_select = "SELECT * FROM users, title, links";
$query = mysqli_query($conn, $db_select);
$user_data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $user_data['title']?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-1 bg-dark text-white text-center">

<p><?php echo "<img src='{$user_data['image']}'>"?></p>

  <h1>
    <?php echo $user_data['name']?>
  </h1>
  <p>Welcome to my webpage!</p>
 
</div>
<div class="container-fluid p-4 bg-danger text-white text-center">
<div class="container mt-1">
  <div class="row">
    <div class="col-sm-4">
      <h3><a href="<?php echo $user_data['about']?>" style="color:#ffffff;">About</a></h3>
      
    </div>
    <div class="col-sm-4">
      <h3><a href="<?php echo $user_data['studies']?>" style="color:#ffffff;">Studies</a></h3>
      
    </div>
    <div class="col-sm-4">
      <h3><a href="<?php echo $user_data['progress']?>" style="color:#ffffff;">Progress</a></h3>        
      
    </div>
  </div>
</div>
</div>

</body>
</html>
