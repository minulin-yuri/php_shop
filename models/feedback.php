<?php

function getComments($id) {
  return getAssocResult("SELECT * FROM comments WHERE product_id = {$id}");
}

function safeUserText($str) {
  return (string)htmlspecialchars(strip_tags($str));
}

function addComment() {
  $id = $_POST['product_id'];
  $author = safeUserText($_POST['author']);
  $comment = safeUserText($_POST['comment']);
  executeSql("INSERT INTO comments( author, comment, product_id) VALUES ('{$author}', '{$comment}', {$id})");
  header("Location: /card/{$id}");
  die();
}

function editComment() {
  $id = (int)$_GET['id'];
  $author = safeUserText($_POST['author']);
  $comment = safeUserText($_POST['comment']);
  executeSql("UPDATE comments SET author = '{$author}', comment = '{$comment}' WHERE id = {$id}");
  header("Location: " . $_SERVER['HTTP_REFERER']);
  die();
}

function deleteComment() {
  $id = (int)$_GET['id'];
  executeSql("DELETE FROM comments WHERE id = {$id}");
  header("Location: " . $_SERVER['HTTP_REFERER']);
  die();
}

function doCommentAction($action) {
  if ($action == "add") {
      addComment();      
  }
  if ($action == "edit") {
      editComment();
  }
  if ($action == "delete") {
      deleteComment();
  }
}