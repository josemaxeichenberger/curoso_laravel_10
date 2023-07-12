<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestClientes;
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
      public function storeUpdate(Request $request,$id)
   {
      $findClientes = Cliente::where( 'id','=' , $id)->first();
         return view('pages.clientes.atualiza',compact('findClientes'));
      
   } 

      public function update(FormRequestClientes $request,$id)
   {
     
         $data = $request->all();
         
         $componentes = new Componetes();
         $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);
         $buscar = Cliente::find($id);
         $buscar->update($data);
         
         return redirect()->route('clientes.index');
      
   }
}
