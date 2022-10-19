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
        
    <div class="col-sm  text-dark text-center">
      <h2>Studies Info</h2>  
      <h4>I currently study at UPJ Bintaro under the Informatics class. I've started since 2020 when the pandemic was
        still at large so most of my studies were done at home, so far i've learned multiple coding languages such as c,
        java and now html as well as php. I still have a lot to learn for now and will continue to learn until an indefinite
        amount of time in the future.
      </h4>

    </div>
  </div>
</div>
</div>

</body>
</html>
