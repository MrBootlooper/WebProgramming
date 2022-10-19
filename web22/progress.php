<?php include 'include/conn.php';

$db_select = "SELECT * FROM users, title, progress";
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

<div class="container-fluid p-1 bg-dark text-white">

    <div class="row">


        <div class="col-sm text-center">
            <h2>
                Gavin's Webpage
            </h2>
        </div>
        <div class="col-sm">
            <h3><a href="<?php echo $user_data['about']?>" style="color:#ffffff;">About</a></h3>
        </div>

        <div class="col-sm">
            <h3><a href="<?php echo $user_data['progress']?>" style="color:#ffffff;">Progress</a></h3>
        </div>

        <div class="col-sm ">
            <h3><a href="<?php echo $user_data['studies']?>" style="color:#ffffff;">Studies</a></h3>
        </div>
    </div>

</div>


  
 
</div>
<div class="container-fluid p-5">
<div class="container p-5">
  <div class="row">
    <div class="col-sm">
      <h1><?php echo $user_data['prodesc']?></h1>
      <br>
      <h3>Statistics are subject to change</h3>
    </div>
    <div class="col-sm">
        
    <div class="col-sm  text-dark text-center">
      <h3>html:</h3>  
      <h2><?php echo $user_data['html']?>%</h2>
      <br>
      <h3>css:</h3>
      <h2><?php echo $user_data['css']?>%</h2> 
      <br>
      <h3>php:</h3>
      <h2><?php echo $user_data['php']?>%</h2>


    </div>
  </div>
</div>
</div>

</body>
</html>
