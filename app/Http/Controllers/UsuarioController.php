<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestUser;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function __construct(User $user)
   {
      $this->user  = $user;
   }

   public function index(Request $request)
   {
      $pesquisar = $request->pesquisar;
      $findUsuarios =  $this->user->getUsuariosIndex(search: $pesquisar ?? '');
      return view('pages.usuarios.paginacao', compact('findUsuarios'));
   }

   public function cadastrar(Request $request)
   {
      
         return view('pages.usuarios.create');
      
   }


   public function store(FormRequestUser $request)
   {
     
         $data = $request->all();
         
         $data['password'] = Hash::make($data['password']);
         User::create($data);
         Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);
         return redirect()->route('usuarios.index');
      
   }

   public function update(FormRequestUser $request,$id)
   {
     
         $data = $request->all();
         $data['password'] = Hash::make($data['password']);
         $buscar = User::find($id);
         $buscar->update($data);
         
         return redirect()->route('usuarios.index');
      
   }
   public function storeUpdate(Request $request,$id)
   {
         $findUsuarios = User::where( 'id','=' , $id)->first();
         return view('pages.usuarios.atualiza',compact('findUsuarios'));
      
   }

   public function delete(Request $request)
   {
      // dd($request);
      $id =  $request->id;
      $buscar = User::find($id);
      $buscar->delete();
      return response()->json(['success' => true]);
   }
}
