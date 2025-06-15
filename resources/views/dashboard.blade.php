
@extends('template')
@section('titulo', 'Sobre')
@section('conteudo')

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="grid grid-cols-1 md:grid-cols-1 gap-6 p-6 place-items-center gap-6 p-6">

    <h1 class="text-white">Bem-vindo(a), {{ session('usuario_nome') }} </h1>
</div>
<div class="grid grid-cols-1 md:grid-cols-5 gap-3 p-3">
    
    <div class="bg-white shadow-md rounded-lg p-6" onclick="window.location.href='frmusuario'" style="cursor:pointer;">
        <center>
    <span class="material-icons">
    login
</span>

        <h2 class="text-xl font-semibold mb-2">Cadastrar usuarios</h2>
        <p class="text-gray-600">Criar novo usuário</p>
</center>
    </div>

   
    <div class="bg-white shadow-md rounded-lg p-6" onclick="window.location.href='frmproduto'" style="cursor:pointer;">
        <center>
        <span class="material-icons">
shopping_bag
</span>
        <h2 class="text-xl font-semibold mb-2">Cadastrar produtos</h2>
        <p class="text-gray-600">Adicionar novo produto</p>
</center>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6" onclick="window.location.href='usuarios'" style="cursor:pointer;">
        <center>
         <span class="material-icons">
list_alt
</span>
        <h2 class="text-xl font-semibold mb-2">Lista de usuarios</h2>
        <p class="text-gray-600">vizualizar todos os usuarios</p>
</center>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6" onclick="window.location.href='allprodutos'" style="cursor:pointer;">
        <center>
        <span class="material-icons">
            group
        </span>
        <h2 class="text-xl font-semibold mb-2">Lista de produtos</h2>
        <p class="text-gray-600">Vizualizar todos os produtos</p>
        </center>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6" onclick="window.location.href='allcontatos'" style="cursor:pointer;">
        <center>
        <span class="material-icons">
            contacts
        </span>
        <h2 class="text-xl font-semibold mb-2">Lista de contatos</h2>
        <p class="text-gray-600">Vizualizar todos os contatos</p>
        </center>
    </div>
</div>
@endsection