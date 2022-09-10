<?php

require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
    'sk_test_51LgINREM74vR3JiSH65SEHEgydYtvlzEDZstQd29igc2DtMAlpSWt8OHvHv2mtWWxUXbd6mr8urBG4IUpfi5nCQY00Uw5OQxTu'
);
$product = $stripe->products->retrieve(
	'prod_MP87vgzxvYMCOK',
	[]
);
$price = $stripe->prices->retrieve('price_1LgJr6EM74vR3JiS0FIouLXr',[]);
//echo '<pre>';
//var_dump($product);
//var_dump($price);
//echo '</pre>';
?><!DOCTYPE html>
<html>
  <head>
    <title>Rakk Lam-Ang</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
  </head>
  <body>
    <section>
      <div class="product">
        <img src="<?php echo array_pop($product->images); ?>" alt="<?php echo $product->name; ?>" />
        <div class="description">
          <h3><?php echo $product->name; ?></h3>
          <p><?php echo $product->description; ?></p>
          <h5><?php echo strtoupper($price->currency); ?> <?php echo $price->unit_amount_decimal; ?></h5>
        </div>
      </div>
      <form action="/create-checkout-session.php" method="POST">
        <button type="submit" id="checkout-button">Checkout</button>
      </form>
    </section>
  </body>
</html>