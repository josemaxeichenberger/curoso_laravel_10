<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }
      public function index(Request $request)
   {
      $pesquisar = $request->pesquisar;
      $findClientes =  $this->cliente->getClientesPesquisarIndex(search: $pesquisar ?? '');
      return view('pages.clientes.paginacao', compact('findClientes'));
   }
      public function cadastrar(Request $request)
   {
      
         return view('pages.clientes.create');
      
   } 
}
