@extends('template')
@section('titulo', 'Sobre')
@section('conteudo')



<div class="flex flex-col">
    <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-white border-b">
                        
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                #
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Nome
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Email
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Ações
                            </th>
                             <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Ações
                            </th>
                        </tr>
                        
                    </thead>
                    @foreach($users as $u)
                    <tbody>
                        <tr class="bg-gray-100 border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$u->id}}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$u->nome}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$u->email}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <form action="/excluirusuario/{{$u->id}}" method="POST">
@csrf
@method('delete')
<input type="submit" value="Excluir" style="cursor:pointer;" class="bg-red-700 group relative w-full flex justify-center py-2 px-1 border border-transparent text-sm font-medium rounded-md text-white transition transform-colors duration-300 hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
</form>
                            </td>
<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
    <a href="/frmeditusuario/{{$u->id}}" class="bg-yellow-600 group relative w-full flex justify-center py-2 px-1 border border-transparent text-sm font-medium rounded-md text-white transition transform-colors duration-300 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Editar</a>
</td>
                         
                        </tr>

@endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection