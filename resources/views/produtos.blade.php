@extends('template')

@section('titulo', 'Produtos')

@section('conteudo')

<div class="flex flex-col items-center w-full mb-12 text-center">
    <h1 class="text-3xl font-bold text-white mb-2">Nossos Produtos</h1>
    <div class="h-1 w-24 bg-amber-500 rounded"></div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
    @foreach ($prod as $p)
    <div class="bg-stone-800 rounded-lg overflow-hidden flex flex-col border border-stone-700 transition-all duration-300 hover:border-amber-500 hover:-translate-y-1">

        <div class="w-full h-48 sm:h-56 bg-stone-700">
            <img src="{{ asset('storage/' . $p['imagem']) }}" alt="Imagem de {{$p['nome']}}" class="w-full h-full object-cover">
        </div>

        <div class="p-5 flex flex-col flex-grow">
            <h2 class="text-xl font-bold mb-2 text-stone-100 tracking-tight">{{$p['nome']}}</h2>

            <p class="text-2xl font-semibold text-amber-500 mb-4">
                R$ {{ number_format($p['preco'], 2, ',', '.') }}
            </p>

            <button class="mt-auto w-full bg-amber-500 hover:bg-amber-400 text-stone-950 font-bold py-2 px-4 rounded-md transition-colors duration-300">
                Comprar
            </button>
        </div>
    </div>
    @endforeach
</div>

@endsection