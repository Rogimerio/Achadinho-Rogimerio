<?php session_start();
if ($_POST['senha'] ?? '' === 'admin123') { $_SESSION['logado'] = true; header('Location: painel.php'); exit; } ?>
<form method="post">
  <input type="password" name="senha" placeholder="Senha" required>
  <button type="submit">Entrar</button>
</form>