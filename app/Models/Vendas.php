<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero',
        'produtos_id',
        'cliente_id',
    ];

 
     public function cliente(){
        return $this->belongsTo(Cliente::class);   
     }
     public function produtos(){
        return $this->belongsTo(Produto::class);   
     }
   
    
    function getVendasPesquisarIndex(string $search = ''){
        $venda = $this->where(function($query) use ($search){
            if($search){
                $query->where('numero',$search);
                $query->orWhere('numero','LIKE',"%{$search}%");
            }
        })->get();
        return $venda;
    }
}
