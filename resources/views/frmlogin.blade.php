@extends('template')

@section('titulo', 'Login')

@section('conteudo')

<div class="flex flex-col justify-start pt-8 sm:pt-12">

  <div class="flex flex-col items-center w-full mb-10 text-center">
      <h1 class="text-3xl font-bold text-white mb-2">Acesse sua Conta</h1>
      <p class="text-lg text-stone-400">Bem-vindo de volta!</p>
      <div class="mt-4 h-1 w-24 bg-amber-500 rounded"></div>
  </div>

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-stone-800 py-8 px-4 shadow-lg sm:rounded-lg sm:px-10 border border-stone-700">

      <form class="space-y-6" action="/logar" method="POST">
        @csrf

        <div>
          <label for="email" class="block text-sm font-medium text-stone-300">
            E-mail:
          </label>
          <div class="mt-1">
            <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none block w-full px-3 py-2 bg-stone-900 border border-stone-600 rounded-md shadow-sm placeholder-stone-500 text-stone-200 focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm">
          </div>
        </div>

        <div>
          <label for="senha" class="block text-sm font-medium text-stone-300">
            Senha:
          </label>
          <div class="mt-1">
            <input id="senha" name="senha" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 bg-stone-900 border border-stone-600 rounded-md shadow-sm placeholder-stone-500 text-stone-200 focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm">
          </div>
        </div>

        <div>
          <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-stone-950 bg-amber-500 hover:bg-amber-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-stone-800 focus:ring-amber-500 transition-colors duration-300">
            Logar
          </button>
        </div>
      </form>

      <div class="mt-6">
        <div class="relative">
          <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-stone-600"></div>
          </div>
          <div class="relative flex justify-center text-sm">
            <span class="px-2 bg-stone-800 text-stone-400">
              Não tem uma conta?
            </span>
          </div>
        </div>

        <div class="mt-6 text-center">
          <a href="frmusuario" class="w-full inline-flex justify-center py-3 px-4 border border-stone-600 rounded-md shadow-sm bg-stone-700 text-sm font-medium text-stone-200 hover:bg-stone-600 transition-colors duration-300">
            Cadastre-se
          </a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection