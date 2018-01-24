<?php

namespace Apple\Checkout;

use Product;

class LineItem {
  public $product, $quantity;

  public function __construct(Product $product, int $quantity)
  {
    $this->product = $product;
    $this->quantity = $quantity;
  }

  public function getTotal()
  {
    return $this->quantity * $this->product->price;
  }
}
