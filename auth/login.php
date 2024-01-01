<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>

<?php 


// if you are logged in and you try to access the login page , you will be redircted back to home page because you already have a session, wish means that you a already to logged in onto the application....
if(isset($_SESSION["username"])){
    header("location: ".APPURL."");

}
    if(isset($_POST["submit"])){

        if(empty($_POST["email"]) OR empty($_POST["password"])) {
            echo "<script>alert('Something is empty');</script>";
        } else{
            $email = $_POST["email"];
            $password = $_POST["password"];

            $login = $conn->query("SELECT * FROM users WHERE email='$email'");
            $login->execute();
            $fetch = $login->fetch(PDO::FETCH_ASSOC);

            if($login->rowCount() > 0){
                if(password_verify($password, $fetch["mypassword"])){

                    $_SESSION['username'] =  $fetch['username'];
                    $_SESSION['user_id'] =  $fetch['id'];


                    // * Will go to the home page , after the user has been authenticated.
                    header("location: ".APPURL."");
            } else{
                echo "<script>alert('Incorrect password or email');</script>";
            }
        } else{
            echo "<script>alert('Incorrect password or email');</script>";
        }
        }

    }
?>



        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="form-control mt-5" method="POST" action="login.php">
                    <h4 class="text-center mt-3"> Login </h4>
                   
                    <div class="">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="">
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="">
                            <input type="password" name="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <button name="submit" class="w-100 btn btn-lg btn-primary mt-4 mb-4" type="submit">login</button>

                </form>
            </div>
        </div>
 
   
        <?php require "../includes/footer.php"; ?>