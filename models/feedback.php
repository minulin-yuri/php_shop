<?php

function getComments($id) {
  return getAssocResult("SELECT * FROM comments WHERE product_id = {$id}");
}