<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?> 

<?php

$rows = $conn->query("SELECT * FROM products WHERE status = 1");
$rows->execute();

$allRows = $rows->fetchAll(PDO::FETCH_OBJ);




?>


        <div class="row mt-5">
            <?php foreach ($allRows as $product): ?>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card" >
                    <img height="213px" class="card-img-top" src="images/<?php echo $product->image; ?>">
                    <div class="card-body" >
                        <h5 class="d-inline"><b><?php echo $product->name; ?></b> </h5>
                        <h5 class="d-inline"><div class="text-muted d-inline">($<?php echo $product->price; ?>/Item)</div></h5>
                        <p><?php echo substr($product->description, 0, 120); ?></p>
                         <a href="<?php echo APPURL; ?>/shopping/single.php?id=<?php echo $product->id; ?>"  class="btn btn-primary w-100 rounded my-2"> More<i class="fas fa-arrow-right"></i> </a>      
     
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            
            <br>
         </div>

  <?php require "includes/footer.php"; ?>