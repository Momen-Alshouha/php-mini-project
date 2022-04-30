<?php
include_once 'config.php';

?>

<?php include_once "./header.php";?>

<?php

$select = mysqli_query($conn, "SELECT * FROM products");

?>


<div class="d-flex align-items-center justify-content-center" style="background-color:#eee; margin-top:40px; margin-bottom:40px;">
   <h1 class="text-dark m-4">Welcome To Products Page</h1>
</div>
<div class="container mt-2">

    <div class="row row-cols-1 row-cols-md-5 g-5">
      <?php while($row = mysqli_fetch_assoc($select)){ ?>
        <div class="col">
        <div class="card">
        <img src="uploaded_img/<?php echo $row['image']; ?>" alt=""  class="card-img-top">
        <div class="card-body">
        <h5 class="card-title"><?php echo $row['name']; ?></h5>
        <p class="card-text">$<?php echo $row['price']; ?>/-</p>
        </div>
        </div>
        </div>

        <?php } ?>
    </div>
</div>

<?php include_once "./footer.php";?>