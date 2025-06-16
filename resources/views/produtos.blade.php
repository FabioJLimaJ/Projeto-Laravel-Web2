
@extends('template')

@section('conteudo')
<div class="grid grid-cols-1 md:grid-cols-4 gap-5 p-3 place-items-center">


    @foreach ($prod as $p)

 <div class="bg-white shadow-md rounded-sm p-6 w-64  h-full flex flex-col">

        <img src="{{ asset('storage/' . $p['imagem']) }}" alt="img" class=" border-2 border-gray-300 rounded-lg shadow">

      
       <h2 class="text-xl font-semibold mb-2">{{$p['nome']}}</h2>
      
     <p class="text-gray-600">R$ {{$p['preco']}}</p>
            
        <br>
      
<button class="mt-auto bg-blue-900 hover:bg-blue-850 text-white font-bold py-2 px-4 rounded" style="cursor:pointer;">
  Comprar
</button>
</div>


@endforeach
</div>
@endsection
