<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\User;
use App\Models\Vendas;

class DasboardController extends Controller
{
  public function index(){

    $totalProdutos = $this->GetTotalProdutos();
    $totalClientes = $this->GetTotalClientes();
    $totalVendas = $this->GetTotalVendas();
    $findUsuarios  = $this->GetTotalUsuarios();
    // dd( $totalProdutos);
    return view('pages.dasboard.dasboard',compact('totalProdutos','totalClientes','totalVendas','findUsuarios'));


  }
  public function GetTotalProdutos(){
    $findProduto =  Produto::all()->count();
    return $findProduto;

    
  }
  public function GetTotalClientes(){
    $findClientes =  Cliente::all()->count();
    return $findClientes;

  }
  public function GetTotalVendas(){
    $findVendas =  Vendas::all()->count();
    return $findVendas;

  }
  public function GetTotalUsuarios(){
    $findUsuarios =  User::all()->count();
    return $findUsuarios;

  }
}
