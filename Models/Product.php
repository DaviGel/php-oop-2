<?php

class Product {
  private $id;
  private $name;
  private $category;
  private $image;
  private $price;

  function __construct($_name, $_id, $_category, $_image, $_price)
  {
    $this->name = $_name;
    $this->id = $_id;
    $this->category = $_category;
    $this->image = $_image;
    $this->price = $_price;
  }
}