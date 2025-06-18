@extends('template')

@section('titulo', 'Sobre')

@section('conteudo')

<div class="flex flex-col items-center w-full mb-12 text-center">
    <h1 class="text-3xl font-bold text-white mb-2">Sobre o Projeto e o Criador</h1>
    <div class="h-1 w-24 bg-amber-500 rounded"></div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8">

    <div class="flex flex-col items-center text-center bg-stone-800 border border-stone-700 rounded-lg p-8 transition-colors duration-300 hover:border-amber-500 cursor-pointer" onclick="window.location.href='https://github.com/FabioJLimaJ'" target="_blank">
        <span class="material-icons text-amber-400 text-6xl mb-4">
            account_circle
        </span>
        <h2 class="text-2xl font-semibold mb-2 text-stone-100">Fábio José de Lima</h2>
        <p class="text-stone-400 leading-relaxed">Full stack</p>
    </div>

    <div class="flex flex-col items-center text-center bg-stone-800 border border-stone-700 rounded-lg p-8">
        <span class="material-icons text-amber-400 text-6xl mb-4">
            integration_instructions
        </span>
        <h2 class="text-2xl font-semibold mb-2 text-stone-100">Laravel Sneakers</h2>
        <p class="text-stone-400 leading-relaxed">
            Laravel Sneakers é um projeto de um site de vendas de tênis com o framework Laravel.
            Laravel é um framework PHP livre e open-source para o desenvolvimento de sistemas web que utilizam o padrão MVC. Sua sintaxe elegante, sistema modular e robustos recursos integrados o tornam uma ferramenta poderosa para a criação de aplicações modernas e de alta performance.
        </p>
    </div>
</div>

{{-- Recomenda-se mover esta tag <link> para o <head> do seu template.blade.php --}}
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

@endsection