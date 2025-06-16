<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>Home</title>
  
</head>
<body class='bg-blue-950 min-h-screen flex flex-col'>
<header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md">
    <div class="flex-1 flex justify-between items-center">
        <a href="home" class="text-xl">Laravel Sneakers</a>
    </div>

    <label for="menu-toggle" class="pointer-cursor md:hidden block">
      <svg class="fill-current text-gray-900"
        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
        <title>menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />

    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
        <nav>
            <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                <li><a class="md:p-4 py-3 px-0 block" href="home">Home</a></li>
                <li><a class="md:p-4 py-3 px-0 block" href="sobre">Sobre</a></li>
                <li><a class="md:p-4 py-3 px-0 block" href="produtos">Produtos</a></li>
                <li><a class="md:p-4 py-3 px-0 block md:mb-0 mb-2" href="contato">Contato</a></li>

@if(session()->has('usuario_id'))
<li>
<div class="relative inline-block text-left" >
  <div>
    <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true"style="cursor:pointer;">
      Opções
      <svg class="-mr-1 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
      </svg>
    </button>
  </div>
   <div id="dropdown-menu" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
    <div class="py-1 " role="none">
      <!-- Active: "bg-gray-100 text-gray-900 outline-hidden", Not Active: "text-gray-700" -->
      <a href="dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" role="menuitem" tabindex="-1" id="menu-item-0">Olá, {{ session('usuario_nome') }}</a>
      
      <form method="POST" action="/logout">
    @csrf
    <li class="block px-4 py-2 hover:bg-gray-50"><button type="submit" style="cursor:pointer;">Sair</button></li>
</form>
    </div>
  </div>
</div>

</li>
@else
<li>
<button class="bg-green-800 group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white transition transform-colors duration-300 hover:bg-green-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" onclick="window.location.href='frmlogin'">Logar</button></li>
@endif
            </ul>
        
        </nav>
    </div>
    
</header>
 
<main class="flex-grow"> @yield('conteudo')</main>
    <br>
<footer class="bg-white text-white py-6">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center">
    
    <!-- Esquerda: Logo ou texto -->
    <div class="text-black mb-4 md:mb-0">
      <span class="text-lg">© 2025 Laravel Sneakers</span>
    </div>

  
    
  </div>
</footer>

 <script>
  const button = document.getElementById('menu-button');
  const menu = document.getElementById('dropdown-menu');

  button.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });

  // Opcional: fechar o menu se clicar fora
  document.addEventListener('click', (e) => {
    if (!button.contains(e.target) && !menu.contains(e.target)) {
      menu.classList.add('hidden');
    }
  });
</script>
</body>
</html>