<?php

require_once __DIR__ . '/../Models/Product.php';

$products = [
  new Product('Cibo per cani', 123, 'Dogs', 'Cibo', 'img/img-eukanuba.jpeg', 68),
  new Product('Osso per cani', 1678, 'Dogs', 'Gioco', 'img/img-osso.webp', 12),
  new Product('Cibo per gatti', 34, 'Cats', 'Cibo', 'img/img-sheba.jpeg', 75),
  new Product('Tiragraffi per gatti', 5678, 'Cats', 'Gioco', 'img/img-tiragraffi.jpeg', 50),
  new Product('Cuccia per cani', 84, 'Dogs', 'Cuccia', 'img/img-cuccia_cani.jpeg', 65),
  new Product('Cuccia per gatti', 1380, 'Cats', 'Cuccia', 'img/img-cuccia_gatti.jpeg', 120),
];

// $products = [
//   [
//     "id" => 123,
//     "name" => 'Cibo per cani',
//     "category" => 'Dogs',
//     "image" => 'img/img-eukanuba.jpeg',
//     "price" => 68,
//   ],
//   [
//     "id" => 1678,
//     "name" => 'Osso per cani',
//     "category" => 'Dogs',
//     "image" => 'img/img-osso.webp',
//     "price" => 12,
//   ],
//   [
//     "id" => 34,
//     "name" => 'Cibo per gatti',
//     "category" => 'Cats',
//     "image" => 'img/img-sheba.jpeg',
//     "price" => 75,
//   ],
//   [
//     "id" => 5678,
//     "name" => 'Tiragraffi per gatti',
//     "category" => 'Cats',
//     "image" => 'img/img-tiragraffi.jpeg',
//     "price" => 50,
//   ],
//   [
//     "id" => 84,
//     "name" => 'Cuccia per cani',
//     "category" => 'Dogs',
//     "image" => 'img/img-cuccia_cani.jpeg',
//     "price" => 65,
//   ],
//   [
//     "id" => 1380,
//     "name" => 'Cuccia per gatti',
//     "category" => 'Cats',
//     "image" => 'img/img-cuccia_gatti.jpeg',
//     "price" => 120,
//   ],
// ];