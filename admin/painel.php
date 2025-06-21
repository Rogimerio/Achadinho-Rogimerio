<?php
session_start(); if (!($_SESSION['logado'] ?? false)) { header('Location: login.php'); exit; }
include '../includes/conexao.php';
if ($_POST) {
  $stmt = $conn->prepare("INSERT INTO produtos (nome, preco, link, imagem) VALUES (?, ?, ?, ?)");
  $stmt->execute([$_POST['nome'], $_POST['preco'], $_POST['link'], $_FILES['imagem']['name']]);
  move_uploaded_file($_FILES['imagem']['tmp_name'], "../produtos/imagens/" . $_FILES['imagem']['name']);
}
?>
<form method="post" enctype="multipart/form-data">
  <input name="nome" placeholder="Nome do Produto" required><br>
  <input name="preco" placeholder="Preço" required><br>
  <input name="link" placeholder="Link da Shopee" required><br>
  <input type="file" name="imagem" required><br>
  <button type="submit">Cadastrar</button>
</form>