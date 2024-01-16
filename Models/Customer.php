<?php

class Customer {
  private $id;
  private $first_name;
  private $last_name;
  private $email;
  private $credit_card;

  function __construct($_id, $_first_name, $_last_name, $_email, $_credit_card)
  {
    $this->id = $_id;
    $this->first_name = $_first_name;
    $this->last_name = $_last_name;
    $this->email = $_email;
    $this->credit_card = $_credit_card;
  }
}