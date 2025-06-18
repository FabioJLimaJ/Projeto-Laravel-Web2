@extends('template')

@section('titulo', 'Dashboard')

@section('conteudo')

<div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

    {{-- Cabeçalho do Dashboard --}}
    <div class="mb-12 text-center">
        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">Dashboard</h1>
        <p class="mt-3 text-xl text-stone-400">Bem-vindo(a) de volta, {{ session('usuario_nome') }}!</p>
    </div>

    {{-- Grid de Ações --}}
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">

        <a href="frmusuario" class="group bg-stone-800 rounded-lg p-6 flex flex-col items-center text-center border border-stone-700 transition-all duration-300 hover:border-amber-500 hover:-translate-y-1">
            <span class="material-icons text-amber-400 text-5xl mb-4 transition-transform duration-300 group-hover:scale-110">
                person_add
            </span>
            <h2 class="text-xl font-semibold mb-1 text-stone-100">Cadastrar Usuário</h2>
            <p class="text-stone-400 text-sm">Criar novo usuário</p>
        </a>

        <a href="frmproduto" class="group bg-stone-800 rounded-lg p-6 flex flex-col items-center text-center border border-stone-700 transition-all duration-300 hover:border-amber-500 hover:-translate-y-1">
            <span class="material-icons text-amber-400 text-5xl mb-4 transition-transform duration-300 group-hover:scale-110">
                add_shopping_cart
            </span>
            <h2 class="text-xl font-semibold mb-1 text-stone-100">Cadastrar Produto</h2>
            <p class="text-stone-400 text-sm">Adicionar novo produto</p>
        </a>

        <a href="usuarios" class="group bg-stone-800 rounded-lg p-6 flex flex-col items-center text-center border border-stone-700 transition-all duration-300 hover:border-amber-500 hover:-translate-y-1">
            <span class="material-icons text-amber-400 text-5xl mb-4 transition-transform duration-300 group-hover:scale-110">
                group
            </span>
            <h2 class="text-xl font-semibold mb-1 text-stone-100">Lista de Usuários</h2>
            <p class="text-stone-400 text-sm">Visualizar todos os usuários</p>
        </a>

        <a href="allprodutos" class="group bg-stone-800 rounded-lg p-6 flex flex-col items-center text-center border border-stone-700 transition-all duration-300 hover:border-amber-500 hover:-translate-y-1">
            <span class="material-icons text-amber-400 text-5xl mb-4 transition-transform duration-300 group-hover:scale-110">
                inventory_2
            </span>
            <h2 class="text-xl font-semibold mb-1 text-stone-100">Lista de Produtos</h2>
            <p class="text-stone-400 text-sm">Visualizar todos os produtos</p>
        </a>

        <a href="allcontatos" class="group bg-stone-800 rounded-lg p-6 flex flex-col items-center text-center border border-stone-700 transition-all duration-300 hover:border-amber-500 hover:-translate-y-1">
            <span class="material-icons text-amber-400 text-5xl mb-4 transition-transform duration-300 group-hover:scale-110">
                forward_to_inbox
            </span>
            <h2 class="text-xl font-semibold mb-1 text-stone-100">Lista de Contatos</h2>
            <p class="text-stone-400 text-sm">Visualizar todas as mensagens</p>
        </a>
    </div>
</div>

{{-- Recomenda-se mover esta tag <link> para o <head> do seu template.blade.php para melhor performance --}}
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

@endsection