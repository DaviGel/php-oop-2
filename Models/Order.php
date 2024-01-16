<?php

class Order {
  private $id;
  private $taxes;
  private $total;
  private $customer;

  function __construct($_id, $_taxes, Cart $_cart, Customer $_customer)
  {
    $this->id = $_id;
    $this->taxes = $_taxes;
    $this->total = $_cart['subtotal'] + $_taxes;
    $this->customer = $_customer['id'];
  }
}