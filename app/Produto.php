<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome','descricao','peso','unidade_id','fornecedor_id'];

    public function produtoDetalhe(){
        return $this->hasOne('App\ProdutoDetalhe', 'produto_id', 'id'); 
    }

    public function fornecedor(){
        return $this->belongsTo('App\Fornecedor');
    }
}
