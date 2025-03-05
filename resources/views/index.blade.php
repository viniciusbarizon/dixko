<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name') }} - Descubra música além dos algoritmos</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white font-sans">

  <!-- Cabeçalho com Logo -->
  <header class="p-6 bg-black">
    <div class="max-w-7xl mx-auto flex justify-center">
      <img src="{{ asset('images/logo.png') }}" alt="Logo Dixko" class="w-40">
    </div>
  </header>

  <!-- Seção de Destaque (Hero) -->
  <section class="h-screen flex flex-col justify-center items-center text-center px-6 bg-black">
    <h1 class="text-4xl md:text-6xl font-bold">Descubra álbuns incríveis, além dos algoritmos.</h1>
    <p class="text-lg md:text-xl mt-4 text-gray-400">Recomendações musicais curadas por pessoas, não por máquinas.</p>
    <a href="#recommendations" class="mt-6 px-6 py-3 bg-white text-black rounded-full text-lg font-medium hover:bg-gray-300 transition">
      Explorar recomendações
    </a>
  </section>

  <!-- Sobre o Dixko -->
  <section class="py-16 px-6 text-center bg-gray-100 text-black w-full">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-3xl font-semibold">O que é o Dixko?</h2>
      <p class="text-gray-700 mt-4">
        O Dixko é um espaço para quem quer descobrir música sem depender de algoritmos. A cada dia, um álbum é indicado por uma pessoa apaixonada por música.
      </p>
    </div>
  </section>

  <!-- Recomendação em Destaque -->
  <section id="recommendations" class="py-16 px-6 bg-black">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl font-semibold">Recomendação do Dia</h2>
      <div class="mt-8 flex flex-col md:flex-row items-center gap-6">
        <img src="https://via.placeholder.com/250" alt="Capa do Álbum" class="w-48 h-48 object-cover rounded-lg">
        <div class="text-left">
          <h3 class="text-2xl font-bold">Nome do Álbum</h3>
          <p class="text-gray-400">Artista</p>
          <p class="text-gray-300 mt-4">
            "Um breve trecho explicando por que este álbum foi recomendado."
          </p>
          <a href="#" class="mt-4 inline-block px-4 py-2 bg-white text-black rounded-full text-sm font-medium hover:bg-gray-300 transition">
            Ver mais recomendações
          </a>
        </div>
      </div>
    </div>
  </section>

   <!-- Apoie o Projeto -->
   <section class="py-16 px-6 text-center bg-gray-100 text-black w-full">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-3xl font-semibold">Apoie o Dixko</h2>
      <p class="text-gray-700 mt-4">
        O Dixko é independente. Se você quiser apoiar, ajude a manter as recomendações ativas.
      </p>
      <a href="#" class="mt-8 inline-block px-6 py-3 bg-black text-white rounded-full text-lg font-medium hover:bg-gray-800 transition">
        Apoiar o projeto
      </a>
    </div>
  </section>

  <!-- Rodapé -->
  <footer class="py-6 text-center text-gray-500 text-sm bg-black">
    <p>Dixko, 2025. Feito com amor pela música.</p>
  </footer>

</body>
</html>
