@extends('template')
@section('titulo', 'Sobre')
@section('conteudo')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="grid  grid-cols-1 place-items-center md:grid-cols-1 gap-3 p-3">
    
 

    <div class="bg-white shadow-md rounded-lg p-6" onclick="window.location.href='allprodutos'" style="cursor:pointer;">
        <center>
        <span class="material-icons">
            person
        </span>
        <h2 class="text-xl font-semibold mb-2">Fábio José de Lima</h2>
        <p class="text-gray-600">Full stack</p>
        </center>
    </div>

</div>
 
<div class="grid  grid-cols-1 place-items-center md:grid-cols-1 gap-3 p-3">
    
 

    <div class="bg-white shadow-md rounded-lg p-6">
        <center>
        <span class="material-icons">
            sentiment_satisfied

        </span>
        <h2 class="text-xl font-semibold mb-2">Framework Laravel</h2>
        <p class="text-gray-600">
            Laravel é um framework PHP livre e open-source criado por Taylor B. Otwell para o desenvolvimento de sistemas web que utilizam o padrão MVC (model, view, controller). Algumas características proeminentes do Laravel são sua sintaxe simples e concisa, um sistema modular com gerenciador de dependências dedicado, várias formas de acesso a banco de dados relacionais e vários utilitários indispensáveis no auxílio ao desenvolvimento e manutenção de sistemas.


        </p>
        </center>
    </div>
</div>



@endsection


