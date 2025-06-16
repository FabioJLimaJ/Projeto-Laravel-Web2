@extends('template')
@section('titulo', 'Sobre')
@section('conteudo')
<div class="grid grid-cols-1 md:grid-cols-4 gap-3 p-3 place-items-center">
@foreach ($cards as $h)

<div class="bg-white shadow-md rounded-sm p-6 w-64  h-full flex flex-col">
<img src="{{$h['imagem']}}" alt="Card image" class="max-w-xs max-w-16 h-32">

        <h4 class="text-xl font-semibold mb-2">{{$h['nome']}}</h4>
        <p class="text-gray-600">{{$h['texto']}}</p>
       <h5 class="text-gray-600">{{$h['preco']}}</h5><br>
       <button class="mt-auto bg-blue-900 hover:bg-blue-850 text-white font-bold py-2 px-4 rounded" style="cursor:pointer;"> Saiba mais</button>

  </div>
@endforeach
    </div>
    </div>


@endsection


