<?php include 'includes/funcoes.php'; $produtos = listarProdutos(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Achadinhos Rogimerio</title>
  <link href="css/tailwind.css" rel="stylesheet">
</head>
<body class="bg-white text-black">
  <header class="bg-gradient-to-r from-green-600 via-yellow-400 to-blue-600 p-4 text-white">
    <div class="container mx-auto flex justify-between items-center">
      <img src="img/faviconwer3.png" alt="Logo" class="rounded mb-3" width="180px">
      <h1 class="text-3xl font-bold">Achadinhos Rogimerio</h1>
      <nav class="space-x-4">
        <a href="#produtos" class="hover:underline">Produtos</a>
        <a href="#sobre" class="hover:underline">Sobre</a>
        <a href="https://www.instagram.com/achadinhosrogimerio" target="_blank" class="hover:underline">Instagram</a>
      </nav>
    </div>
  </header>

  <section class="text-center py-10 bg-yellow-100">
    <h2 class="text-4xl font-bold mb-4">Os melhores achadinhos da Shopee estão aqui!</h2>
    <p class="mb-6">Produtos com ótimo preço e entrega garantida</p>
    <a href="#produtos" class="bg-green-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-green-700">Ver Produtos</a>
  </section>

  <section id="produtos" class="py-10 bg-white">
    <div class="container mx-auto">
      <h3 class="text-3xl font-bold text-center text-blue-600 mb-8">Produtos em Destaque</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach($produtos as $p): ?>
        <div class="border rounded-xl shadow-lg p-4">
          <img src="produtos/imagens/<?= $p['imagem'] ?>" alt="<?= $p['nome'] ?>" class="rounded mb-3" width="110px">
          <h4 class="text-lg font-semibold"><?= $p['nome'] ?></h4>
          <p class="text-green-600 font-bold"><?= $p['preco'] ?></p>
          <a href="<?= $p['link'] ?>" target="_blank" class="mt-2 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver na Shopee</a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="sobre" class="py-10 bg-gray-100">
    <div class="container mx-auto text-center max-w-2xl">
      <h3 class="text-3xl font-bold text-green-700 mb-4">Sobre a Loja</h3>
      <p>Olá! Eu sou Rogimerio Ribeiro, afiliado da Shopee, e criei esta loja para te ajudar a encontrar os melhores produtos com descontos e qualidade garantida.</p>
    </div>
  </section>

  <footer class="bg-black text-white text-center py-4">
    <p>&copy; 2025 Achadinhos Rogimerio. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
