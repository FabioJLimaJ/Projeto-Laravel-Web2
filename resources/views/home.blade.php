

    


 @extends('template')
@section('titulo', 'Sobre')
@section('conteudo')
<div class="grid grid-cols-1 md:grid-cols-4 gap-3 p-3">
@foreach ($cards as $h)

<div class="bg-white shadow-md rounded-lg p-6">
<img class="card-img-top" src="{{$h['imagem']}}" alt="Card image">

        <h4 class="card-title"><p>{{$h['nome']}}</p></h4>
        <p class="card-text">{{$h['texto']}}</p>
       <h5 class="card-title"><p>{{$h['preco']}}</p></h5>
       <button class="btn btn-danger"> Saiba mais</button>

  </div>
@endforeach
    </div>
    </div>


@endsection


