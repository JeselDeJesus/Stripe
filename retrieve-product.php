<?php
require "vendor/autoload.php";
$stripe = new \Stripe\StripeClient(
  'sk_test_51LgINREM74vR3JiSH65SEHEgydYtvlzEDZstQd29igc2DtMAlpSWt8OHvHv2mtWWxUXbd6mr8urBG4IUpfi5nCQY00Uw5OQxTu'
);
$result = $stripe->products->retrieve(
  'prod_MP7lrc0DDTmSFu',
  []
);
var_dump($result);