<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>
<?php require "../vendor/autoload.php"; ?>

<?php


\Stripe\Stripe::setApiKey($secret_key);

$charge = \Stripe\Charge::create([
  'source' => $_POST['stripeToken'],
//  'description' => "10 cucumbers from Roger's Farm",
  'amount' => $_SESSION['price'] * 100,
  'currency' => 'usd',
]);

echo "<h1>Paid</h1>";

?>
