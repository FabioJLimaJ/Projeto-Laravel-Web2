@extends('template')

@section('titulo', 'Cadastrar Produto')

@section('conteudo')

<div class="flex flex-col justify-start pt-8 sm:pt-12">

  <div class="flex flex-col items-center w-full mb-10 text-center">
      <h1 class="text-3xl font-bold text-white mb-2">Adicionar Novo Produto</h1>
      <p class="text-lg text-stone-400">Preencha os detalhes do item que será cadastrado.</p>
      <div class="mt-4 h-1 w-24 bg-amber-500 rounded"></div>
  </div>

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-lg">
    <div class="bg-stone-800 py-8 px-4 shadow-lg sm:rounded-lg sm:px-10 border border-stone-700">

      <form class="space-y-6" action="/addproduto" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
          <label for="nome" class="block text-sm font-medium text-stone-300">
            Nome do Produto:
          </label>
          <div class="mt-1">
            <input id="nome" name="nome" type="text" required class="appearance-none block w-full px-3 py-2 bg-stone-900 border border-stone-600 rounded-md shadow-sm placeholder-stone-500 text-stone-200 focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm">
          </div>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div>
              <label for="preco" class="block text-sm font-medium text-stone-300">
                Preço (R$):
              </label>
              <div class="mt-1">
                <input id="preco" name="preco" type="number" step="0.01" required class="appearance-none block w-full px-3 py-2 bg-stone-900 border border-stone-600 rounded-md shadow-sm placeholder-stone-500 text-stone-200 focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm">
              </div>
            </div>

            <div>
              <label for="quantidade" class="block text-sm font-medium text-stone-300">
                Quantidade em Estoque:
              </label>
              <div class="mt-1">
                <input id="quantidade" name="quantidade" type="number" required class="appearance-none block w-full px-3 py-2 bg-stone-900 border border-stone-600 rounded-md shadow-sm placeholder-stone-500 text-stone-200 focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm">
              </div>
            </div>
        </div>

        <div>
            <label for="imagem" class="block text-sm font-medium text-stone-300 mb-1">
                Imagem do Produto:
            </label>
            <label for="imagem" class="relative flex flex-col items-center justify-center w-full h-40 border-2 border-stone-600 border-dashed rounded-lg cursor-pointer bg-stone-900 hover:bg-stone-700 transition-colors">
                <div class="flex flex-col items-center justify-center pt-5 pb-6 text-center">
                    <svg class="w-10 h-10 mb-3 text-stone-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-4-4V6a4 4 0 014-4h1.586a1 1 0 01.707.293l1.414 1.414a1 1 0 00.707.293h4.172a1 1 0 00.707-.293l1.414-1.414A1 1 0 0116.414 4H18a4 4 0 014 4v6a4 4 0 01-4 4H7z"></path></svg>
                    <p id="file-label-text" class="mb-2 text-sm text-stone-400"><span class="font-semibold">Clique para enviar</span> ou arraste e solte</p>
                    <p class="text-xs text-stone-500">PNG, JPG, GIF (MAX. 2MB)</p>
                </div>
                <input id="imagem" name="imagem" type="file" class="hidden" accept="image/*">
            </label>
        </div>

        <div>
          <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-stone-950 bg-amber-500 hover:bg-amber-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-stone-800 focus:ring-amber-500 transition-colors duration-300">
            Cadastrar Produto
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('imagem');
    const fileLabelText = document.getElementById('file-label-text');

    if (fileInput && fileLabelText) {
        const originalText = fileLabelText.innerHTML;
        fileInput.addEventListener('change', function() {
            if (this.files && this.files.length > 0) {
                // Limita o nome do arquivo para não quebrar o layout
                let fileName = this.files[0].name;
                if (fileName.length > 25) {
                    fileName = fileName.substring(0, 22) + '...';
                }
                fileLabelText.textContent = fileName;
                fileLabelText.classList.add('text-amber-500');
            } else {
                fileLabelText.innerHTML = originalText;
                fileLabelText.classList.remove('text-amber-500');
            }
        });
    }
});
</script>

@endsection