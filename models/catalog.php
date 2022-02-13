<?php

function getData($table, $limit) {
  return getAssocResult("SELECT * FROM $table LIMIT $limit");
}

function getProductImg($dir, $img){
  return $dir . $img;
}

function getSingleProduct($id) {
  return getOneResult("SELECT * FROM products WHERE id = {$id}");
}
