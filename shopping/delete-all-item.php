<!--is imported because of [user_id] that is coming from the session.-->
<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>

<?php

if(isset($_POST["delete"])){

    $delete = $conn->prepare("DELETE FROM cart WHERE user_id='$_SESSION[user_id]'");

    $delete->execute();

}

?>

<?php require "../includes/footer.php"; ?>
