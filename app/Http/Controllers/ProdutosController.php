<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestProdutos;
use App\Models\Componetes;
use App\Models\Produto;
// use GuzzleHttp\Psr7\Request;
use Brian2694\Toastr\Facades\Toastr;
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
         Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);
         return redirect()->route('produto.index');
      
   }
   public function update(FormRequestProdutos $request,$id)
   {
     
         $data = $request->all();
         
         $componentes = new Componetes();
         $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);
         $buscar = Produto::find($id);
         $buscar->update($data);
         
         return redirect()->route('produto.index');
      
   }
   public function storeUpdate(Request $request,$id)
   {
         $findProdutos = Produto::where( 'id','=' , $id)->first();
         return view('pages.produtos.atualiza',compact('findProdutos'));
      
   }
}
