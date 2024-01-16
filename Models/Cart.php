<?php

class Cart {
  private $items = [];
  private $subtotal;

  function __construct($_items, $_subtotal)
  {
    $this->items = $_items;
    $this->subtotal = $_subtotal;
  }
}