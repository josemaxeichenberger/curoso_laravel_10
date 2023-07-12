<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestProdutos;
use App\Models\Componetes;
use App\Models\Produto;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{

   public function __construct(Produto $produto)
   {
      $this->produto  = $produto;
   }
   public function index(Request $request)
   {
      $pesquisar = $request->pesquisar;
      $findProdutos =  $this->produto->getProdutosPesquisarIndex(search: $pesquisar ?? '');
      return view('pages.produtos.paginacao', compact('findProdutos'));
   }
   public function delete(Request $request)
   {
      // dd($request);
      $id =  $request->id;
      $buscar = Produto::find($id);
      $buscar->delete();
      return response()->json(['success' => true]);
   }
   public function cadastrar(Request $request)
   {
      
         return view('pages.produtos.create');
      
   }

   public function store(FormRequestProdutos $request)
   {
     
         $data = $request->all();
         $componentes = new Componetes();
         $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);
         Produto::create($data);
         return redirect()->route('produto.index');
      
   }
}
