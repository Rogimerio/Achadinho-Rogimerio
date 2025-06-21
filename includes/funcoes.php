<?php
include 'conexao.php';

function listarProdutos() {
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM produtos ORDER BY id DESC");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>