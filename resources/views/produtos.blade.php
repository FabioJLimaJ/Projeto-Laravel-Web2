
@extends('template')

@section('conteudo')
 <div class="grid grid-cols-1 md:grid-cols-4 gap-3 p-3">


    @foreach ($prod as $p)

 <div class="bg-white shadow-md rounded-lg p-6">
    <center>
        <img src="{{ asset('storage/' . $p['imagem']) }}" alt="img" width="150">
       
      
       <h2 class="text-xl font-semibold mb-2">{{$p['nome']}}</h2>
      
     <p class="text-gray-600">R$ {{$p['preco']}}</p>
            
        
      
</center>
</div>


@endforeach
</div>
@endsection
