<?php

namespace App\Http\Controllers;

use App\Models\Vendas;
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
}
