<?php

class Product {
  private $id;
  private $name;
  private $category;
  private $type;
  private $image;
  private $price;

  function __construct($_name, $_id, $_category, $_type, $_image, $_price)
  {
    $this->name = $_name;
    $this->id = $_id;
    $this->category = $_category;
    $this->type = $_type;
    $this->image = $_image;
    $this->price = $_price;
  }

  public function getId() {
    return $this->id;
  }

  public function getName() {
      try {
        if (!is_string($this->name)) {
          throw new Exception('Il nome non è una stringa!');
        }
        return $this->name;
      } catch (Exception $e) {
        echo 'Eccezione: ' . $e->getMessage();
      }
  }

  public function getCategory() {
    return $this->category;
  }

  public function getType() {
    return $this->type;
  }

  public function getImage() {
    return $this->image;
  }

  public function getPrice() {
    return $this->price;
  }
}