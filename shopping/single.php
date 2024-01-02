<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>

<?php
if(isset($_GET["id"])){

    // * checking the id, that is coming from the shop page. id in href loop of id in the database
    $id = $_GET['id'];
    $rows = $conn->query("SELECT * FROM products WHERE status = 1 AND id='$id' ");
    $rows->execute();

    $product = $rows->fetch(PDO::FETCH_OBJ);

} else{
    echo'404';
}

?>



        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4"> <img id="main-image" src="../images/<?php echo $product->image; ?>" width="250" /> </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                         <a href="<?php echo APPURL; ?>" class="ml-1 btn btn-primary">
                                    <i class="fa fa-long-arrow-left"></i> 
                                    Back
                                </a> 
                                </div> <i class="fa fa-shopping-cart text-muted"></i>
                                </div>
                                <div class="mt-4 mb-3"> 
                                    <h5 class="text-uppercase"><?php echo $product->name; ?></h5>
                                    <div class="price d-flex flex-row align-items-center"> <span class="act-price">$<?php echo $product->price; ?></span>
                                    </div>
                                </div>
                                <p class="about"><?php echo $product->description; ?></p>
                              <form id="form-data" method="post">
                                    <div class="">
                                    <input type="text" name="pro_id" value="<?php echo $product->description; ?>" class="form-control" >
                                    </div>

                                    <div class="">
                                    <input type="text" value="<?php echo $product->name; ?>"  name="pro_name" class="form-control" >
                                    </div>

                                    <div class="">
                                    <input type="text" name="pro_image" value="<?php echo $product->image; ?>" class="form-control" >
                                    </div>

                                    <div class="">
                                    <input type="text" name="pro_price" value="<?php echo $product->price; ?>"  class="form-control" >
                                    </div>
                              
                                    <div class="">
                                    <input type="text" name="pro_amount" value="1"  class="form-control" >
                                    </div>

                                    <div class="">
                                    <input type="text" name="pro_file" value="<?php echo $product->file; ?>"  class="form-control" >
                                    </div>

                                    <div class="">
                                    <input type="text" name="user_id" class="form-control" value="<?php echo $_SESSION['user_id']; ?>" >
                                    </div>
                                
                                <div class="cart mt-4 align-items-center"> <button type="submit" name="submit" class="btn btn-primary text-uppercase mr-2 px-4"><i class="fas fa-shopping-cart"></i> Add to cart</button> </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php require "../includes/footer.php"; ?>


<script>
    $(document).ready(function(){
        $(document).on("submit", function(e){
            // grabing the data
            var $formdata = $("#form-data").serialize()+'&submit=submit';

        })
});
</script>