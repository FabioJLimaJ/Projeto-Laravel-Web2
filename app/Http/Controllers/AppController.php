<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Usuario;
use App\Models\Feedback;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class AppController extends Controller
{
    
 public function sobre() {
    $frame = "(Laravel)";
    $vantagem = ["Sintaxe simples", "Sintaxe concisa", "Sistema concisa", "Sistema modular"];
    return view('sobre', ['frm'=>$frame, 'vtg' => $vantagem]);
 }

 public function home () {
   $cards = [
      [
          'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png',
          'nome' => 'Nuvem',
          'texto' => 'Plataforma de infraestrutura totalmente gerenciada para implantação e hospedagem PHP.',
          'preco' => 'A partir de US$ 0,00/mês'
      ],
      [
          'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-249x256-4gdjrenn.png',
          'nome' => 'Forja',
          'texto' => 'Gerenciamento de servidores para aplicativos no DigitalOcean, Vultr, Amazon, Hetzner e muito mais',
          'preco' => 'A partir de US$ 12,00/mês'
      ],
      [
          'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png',
          'nome' => 'Vigília Noturna',
          'texto' => 'Monitoramento e insights incomparáveis sobre o desempenho do seu aplicativo Laravel.',
          'preco' => 'Preços em breve'
      ],
      [
          'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-249x256-4gdjrenn.png',
          'nome' => 'Nova',
          'texto' => 'A maneira mais simples e rápida de criar painéis de administração prontos para produção.',
          'preco' => 'A partir de $ 99,00'
      ]
  ];
  return view('home', ['cards'=>$cards]);

 }

public function produtos () {
   $produtos = Produto::all();
   return view('produtos', ['prod'=>$produtos]);
}

public function contato () {
    return view('contato');
}

public function frmproduto () {
    return view('frmproduto');
}

public function addproduto (Request $request) {
$prod = new Produto();
$prod->nome = $request->nome;
$prod->preco = $request->preco;
$prod->quantidade = $request->quantidade;

if ($request->hasFile('imagem')) {
    $path = $request->file('imagem')->store('imagem', 'public');
    $prod->imagem = $path;
}
$prod->save();
return redirect('produtos');

}

public function frmusuario () {
    return view('frmusuario');
}

public function addusuario (Request $request) {
$usuario = new Usuario();
$usuario->nome = $request->nome;
$usuario->email = $request->email;
$usuario->senha = Hash::make($request->senha);
$usuario->save();
return redirect('/frmlogin');
}


public function usuarios () {
    $usuario = Usuario::all();
    return view('usuarios',['users'=>$usuario]);
}

public function frmeditusuario ($id) {
    $usuario = Usuario::findOrFail($id);
    return view('frmeditusuario',['user'=>$usuario]);
}

public function atualizarusuario (Request $request, $id) {
$usuario = Usuario::findOrFail($id);
$dados = [
    'nome' => $request->nome,
    'email' =>$request->email,

    
];

if(!empty($request->senha)){
    $dados['senha'] = $request->senha;
}

$usuario->update($dados);
return redirect("usuarios");
}

public function excluirusuario ($id) {

    $usuario = Usuario::findOrFail($id);
    $usuario->delete();
    return redirect("usuarios");
}


public function frmlogin(){
    return view('frmlogin');
}

public function logar(Request $request){
    $user = Usuario::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->senha, $user->senha)) {
        return redirect('/frmlogin'); 
    }

    Session::put('usuario_id', $user->id);
    Session::put('usuario_nome', $user->nome);

    return view('/dashboard');
}

public function dashboard() {
    if (!session()->has('usuario_id')) {
        return redirect('/frmlogin');
    }
    return view('/dashboard');
}

public function allprodutos () {
    $prod = Produto::all();
    return view('/allprodutos', ['prod'=>$prod]);
}

public function deletarproduto ($id) {
    $produto = Produto::findOrFail($id);
    $produto->delete();
    return redirect("allprodutos");
}


public function frmeditproduto ($id) {
  
      $produto = Produto::findOrFail($id);
    return view('frmeditproduto',['prod'=>$produto]);
}

public function atualizarProduto (Request $request, $id) {
$produto = Produto::findOrFail($id);
$dados = [
    'nome' => $request->nome,
    'preco' => $request->preco,
    'quantidade' => $request->quantidade,
];
$produto->update($dados);
return redirect ('allprodutos');
}
public function allcontatos () {
    return view('allcontatos');
}
public function addcontato (Request $request) {
$feedback = new Feedback();
$feedback->nome = $request->nome;
$feedback->email = $request->email;
$feedback->assunto = $request->assunto;
$feedback->mensagem = $request->mensagem;
$feedback->save();
return redirect('contato');
}

public function exibirFeedback () {
    $feedback = Feedback::all();
    return view('/allcontatos',['feed'=>$feedback]);
}

public function logout() {
    Session::flush();
    return redirect('/produtos');
}
}
