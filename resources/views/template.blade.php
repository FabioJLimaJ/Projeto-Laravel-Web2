<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Sneakers</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
            }
          }
        }
      }
    </script>
</head>
<body class='bg-stone-950 text-stone-300 min-h-screen flex flex-col font-sans'>

<header class="lg:px-16 px-4 bg-stone-950/80 backdrop-blur-sm sticky top-0 z-20 flex flex-wrap items-center py-4 border-b border-stone-800">
    <div class="flex-1 flex justify-between items-center">
        <a href="home" class="text-xl font-bold text-stone-100 hover:text-amber-400 transition-colors duration-300">Laravel Sneakers</a>
    </div>

    <label for="menu-toggle" class="pointer-cursor md:hidden block">
        <svg class="fill-current text-stone-300" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
            <title>menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />

    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
        <nav>
            <ul class="md:flex items-center justify-between text-base pt-4 md:pt-0">
                <li><a class="md:p-4 py-3 px-0 block text-stone-300 hover:text-amber-400 transition-colors duration-300" href="home">Home</a></li>
                <li><a class="md:p-4 py-3 px-0 block text-stone-300 hover:text-amber-400 transition-colors duration-300" href="sobre">Sobre</a></li>
                <li><a class="md:p-4 py-3 px-0 block text-stone-300 hover:text-amber-400 transition-colors duration-300" href="produtos">Produtos</a></li>
                <li><a class="md:p-4 py-3 px-0 block md:mb-0 mb-2 text-stone-300 hover:text-amber-400 transition-colors duration-300" href="contato">Contato</a></li>

                @if(session()->has('usuario_id'))
                    <li>
                        <div class="relative inline-block text-left ml-4">
                            <div>
                                <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-stone-800 px-3 py-2 text-sm font-semibold text-stone-200 shadow-sm ring-1 ring-inset ring-stone-700 hover:bg-stone-700 transition-colors duration-300" id="menu-button" aria-expanded="false" aria-haspopup="true">
                                    Opções
                                    <svg class="-mr-1 h-5 w-5 text-stone-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                            <div id="dropdown-menu" class="hidden absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-stone-800 shadow-lg ring-1 ring-stone-700 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="dashboard" class="block px-4 py-2 text-sm text-stone-300 hover:bg-stone-700 hover:text-amber-400 transition-colors duration-300" role="menuitem" tabindex="-1" id="menu-item-0">Olá, {{ session('usuario_nome') }}</a>
                                    <form method="POST" action="/logout" role="none">
                                        @csrf
                                        <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-stone-300 hover:bg-stone-700 hover:text-amber-400 transition-colors duration-300" role="menuitem" tabindex="-1" id="menu-item-1">
                                            Sair
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                @else
                    <li class="ml-4">
                        <button class="bg-amber-500 group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-stone-950 transition-colors duration-300 hover:bg-amber-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-stone-900 focus:ring-amber-500" onclick="window.location.href='frmlogin'">
                            Logar
                        </button>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</header>

<main class="flex-grow container mx-auto p-4 md:p-8">
    @yield('conteudo')
</main>

<footer class="bg-stone-950 py-6 border-t border-stone-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-center items-center">
        <div class="text-stone-500">
            <span class="text-sm">© 2025 Laravel Sneakers. Todos os direitos reservados.</span>
        </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const button = document.getElementById('menu-button');
    const menu = document.getElementById('dropdown-menu');

    if (button && menu) {
        button.addEventListener('click', (event) => {
            event.stopPropagation();
            menu.classList.toggle('hidden');
            const isExpanded = menu.classList.contains('hidden') ? 'false' : 'true';
            button.setAttribute('aria-expanded', isExpanded);
        });

        document.addEventListener('click', (e) => {
            if (!menu.classList.contains('hidden') && !button.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.add('hidden');
                button.setAttribute('aria-expanded', 'false');
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !menu.classList.contains('hidden')) {
                menu.classList.add('hidden');
                button.setAttribute('aria-expanded', 'false');
            }
        });
    }

    const menuToggle = document.getElementById('menu-toggle');
    const menuDiv = document.getElementById('menu');

    if (menuToggle && menuDiv) {
        menuToggle.addEventListener('change', () => {
            menuDiv.classList.toggle('hidden', !menuToggle.checked);
        });
    }
});
</script>

</body>
</html>