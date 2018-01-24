<?php

namespace Apple\Checkout;

class ShoppingCart {
  protected $lineItems = [];

  public function add($lineItem)
  {
    $this->lineItems[] = $lineItem;
  }

  public function getTotal()
  {
    $total = 0;

    foreach($this->lineItems as $lineItem) {
      $total += $lineItem->getTotal();
    }

    return $total;
  }

  public function remove($album) {
    $newLineItems = [];
    foreach($this->lineItems as $lineItem) {
      if (!($lineItem === $album)) {
          array_push($newLineItems, $lineItem);
      }
    }
    $this->lineItems = $newLineItems;
  }

  public function empty() {
    foreach($this->lineItems as $lineItem) {
      $this->remove($lineItem);
    }
  }
}
