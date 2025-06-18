@extends('template')

@section('titulo', 'Editar Usuário')

@section('conteudo')

<div class="flex flex-col justify-start pt-8 sm:pt-12">

  <div class="flex flex-col items-center w-full mb-10 text-center">
      <h1 class="text-3xl font-bold text-white mb-2">Editar Usuário</h1>
      <p class="text-lg text-stone-400">Altere os dados do usuário abaixo.</p>
      <div class="mt-4 h-1 w-24 bg-amber-500 rounded"></div>
  </div>

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-lg">
    <div class="bg-stone-800 py-8 px-4 shadow-lg sm:rounded-lg sm:px-10 border border-stone-700">

      <form class="space-y-6" action="/atualizarusuario/{{$user->id}}" method="POST">
        @csrf
        @method('put')

        <div>
          <label for="nome" class="block text-sm font-medium text-stone-300">
            Nome Completo:
          </label>
          <div class="mt-1">
            <input id="nome" name="nome" type="text" autocomplete="name" required value="{{$user->nome}}" class="appearance-none block w-full px-3 py-2 bg-stone-900 border border-stone-600 rounded-md shadow-sm placeholder-stone-500 text-stone-200 focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm">
          </div>
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-stone-300">
            E-mail:
          </label>
          <div class="mt-1">
            <input id="email" name="email" type="email" autocomplete="email" required value="{{$user->email}}" class="appearance-none block w-full px-3 py-2 bg-stone-900 border border-stone-600 rounded-md shadow-sm placeholder-stone-500 text-stone-200 focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm">
          </div>
        </div>

        <div class="w-full border-t border-stone-700 pt-6">
            <p class="text-sm text-stone-400">Preencha os campos abaixo somente se desejar alterar a senha.</p>
        </div>

        <div>
          <label for="senha" class="block text-sm font-medium text-stone-300">
            Nova Senha:
          </label>
          <div class="mt-1">
            <input id="senha" name="senha" type="password" autocomplete="new-password" class="appearance-none block w-full px-3 py-2 bg-stone-900 border border-stone-600 rounded-md shadow-sm placeholder-stone-500 text-stone-200 focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm">
          </div>
        </div>

        <div>
          <label for="senha_confirmation" class="block text-sm font-medium text-stone-300">
            Confirmar Nova Senha:
          </label>
          <div class="mt-1">
            <input id="senha_confirmation" name="senha_confirmation" type="password" autocomplete="new-password" class="appearance-none block w-full px-3 py-2 bg-stone-900 border border-stone-600 rounded-md shadow-sm placeholder-stone-500 text-stone-200 focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm">
          </div>
        </div>

        <div>
          <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-stone-950 bg-amber-500 hover:bg-amber-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-stone-800 focus:ring-amber-500 transition-colors duration-300">
            Atualizar Usuário
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection