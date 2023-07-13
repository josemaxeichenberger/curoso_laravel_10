<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestClientes;
use App\Models\Cliente;
use App\Models\Componetes;
use Brian2694\Toastr\Facades\Toastr;
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
         
 
         $buscar = Cliente::find($id);
         $buscar->update($data);
         
         return redirect()->route('clientes.index');
      
   }

   public function store(FormRequestClientes $request)
   {
     
         $data = $request->all();
         Cliente::create($data);
         Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);
         return redirect()->route('clientes.index');
      
   }
   public function delete(Request $request)
   {
      // dd($request);
      $id =  $request->id;
      $buscar = Cliente::find($id);
      $buscar->delete();
      return response()->json(['success' => true]);
   }
}
