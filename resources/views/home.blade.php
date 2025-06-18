@extends('template')

@section('titulo', 'Destaques')

@section('conteudo')

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
    @foreach ($cards as $h)
    <div class="bg-stone-800 rounded-lg flex flex-col text-center border border-stone-700 transition-all duration-300 hover:border-amber-500 hover:-translate-y-1">

        <div class="mx-auto mt-6 bg-stone-700 w-32 h-32 rounded-full flex items-center justify-center overflow-hidden border-2 border-stone-600">
            <img src="{{$h['imagem']}}" alt="Imagem de {{$h['nome']}}" class="w-full h-full object-cover">
        </div>

        <div class="p-6 flex flex-col flex-grow">
            <h4 class="text-xl font-bold mb-2 text-stone-100">{{$h['nome']}}</h4>
            <p class="text-stone-400 flex-grow mb-4">{{$h['texto']}}</p>

            @if(!empty($h['preco']))
                <p class="text-2xl font-semibold text-amber-500 mb-4">
                    R$ {{ number_format((float)str_replace(',', '.', $h['preco']), 2, ',', '.') }}
                </p>
            @endif

            <button class="mt-auto w-full bg-amber-500 hover:bg-amber-400 text-stone-950 font-bold py-2 px-4 rounded-md transition-colors duration-300">
                Saiba mais
            </button>
        </div>
    </div>
    @endforeach
</div>

@endsection