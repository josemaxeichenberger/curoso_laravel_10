<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Vendas;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    public function __construct(Vendas $vendas)
    {
       $this->vendas  = $vendas;
    }
      public function index(Request $request)
   {
      $pesquisar = $request->pesquisar;
      $findVendas =  $this->vendas->getVendasPesquisarIndex(search: $pesquisar ?? '');
      return view('pages.vendas.paginacao', compact('findVendas'));
   }

   public function cadastrar(Request $request)
   {
        $findNumaracao = Vendas::max('numero') + 1;
        $findProduto = Produto::all();
        $findCliente = Cliente::all();
         return view('pages.vendas.create',compact('findNumaracao','findProduto','findCliente'));
      
   }

   public function store(Request $request)
   {
     
         $data = $request->all();
         $findNumaracao = Vendas::max('numero') + 1;
         $data['numero'] =  $findNumaracao;
        // dd($data);

         Vendas::create($data);
         Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);
         return redirect()->route('vendas.index');
      
   }
}
