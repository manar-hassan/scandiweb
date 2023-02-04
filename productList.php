<?php
require_once('handle.php');
$sc=new handle();
$data=$sc->displyRecord();
$delete=$sc->delete();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Document</title>
  <style>
    .navbar-brand{
  margin-right: 20%
}
hr{
  margin:  0 auto 50px auto;
}
.card{
  width: 18rem;
  height: 12rem;
  
}
.cardBody{
  text-align: center;
}
a{
  text-decoration:none;
  color:black;
}

  </style>
</head>
<body>
  

<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid d-flex justify-content-around">
    <a class="navbar-brand " href="#"><h1>Product List</h1></a>
    <div>
    <button type="submit" class="btn btn-outline-success mx-3" ><a href="productAdd.php">ADD</a></button>
    <button type="submit" form="listForm" name="delete-produt-btn" class="bg-danger text-light">Mass delete</button>
    </div>
  </div>
</nav>
<hr class="w-75">
<div class="container">
  <div class="row">
  
<?php 

foreach($data as $value){
  
?>
<div class="card   m-auto mb-2 ">
  <div class="card-body ">
    <form action="" id="listForm" method="post">
    <input type="checkbox" name="delete-checkbox[]" id="" form="listForm" value="<?php echo $value['sku'] ;?>">
    <h5 class="sku cardBody  mb-3"><?php echo  $value['sku'] ;?></h5>
    <h6 class="name cardBody mb-3 text-muted"><?php echo $value['name'] ;?></h6>
    <p class="price cardBody  mb-3"><?php echo $value['price'] ."$";?></p>
    <p class="size cardBody  mb-3"><?php if ($value['size']>=1){echo "Size: ".$value['size']."MB";}else{echo null;}?></p>
    <p class= "Dimension cardBody  mb-3"><?php if ( $value['height']>=1){ echo "Dimension: ", $value['height']."x".$value['width']."x". $value['length'];}else{echo null;} ?></p>
    <p class="weight cardBody "><?php if ( $value['weight']>=1){echo "Weight: ". $value['weight']."kg";}else{ echo null ;}?></p>
    </form>
    
  </div>
</div>


<?php

}

?>


</div>
</div>
</body>
</html>