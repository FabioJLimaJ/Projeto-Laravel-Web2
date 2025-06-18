@extends('template')

@section('titulo', 'Lista de Usuários')

@section('conteudo')

<div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

    {{-- Cabeçalho da Página --}}
    <div class="mb-10 text-center">
        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">Gerenciamento de Usuários</h1>
        <p class="mt-3 text-xl text-stone-400">Visualize, edite ou remova usuários do sistema.</p>
    </div>

    {{-- Container da Tabela --}}
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-stone-700 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-stone-700">
                        <thead class="bg-stone-800">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-stone-400 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-stone-400 uppercase tracking-wider">
                                    Nome
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-stone-400 uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-stone-400 uppercase tracking-wider">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-stone-900 divide-y divide-stone-700">
                            @foreach($users as $u)
                            <tr class="hover:bg-stone-800 transition-colors duration-200">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-stone-200">
                                    {{$u->id}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-stone-300">
                                    {{$u->nome}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-stone-300">
                                    {{$u->email}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex items-center justify-center gap-x-4">
                                        <a href="/frmeditusuario/{{$u->id}}" class="text-amber-500 hover:text-amber-400 font-semibold">Editar</a>
                                        <form action="/excluirusuario/{{$u->id}}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?');">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="text-red-500 hover:text-red-400 font-semibold">Excluir</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection