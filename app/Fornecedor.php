<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';
    protected $fillable = ['nome','email_alternativo','uf','email'];

    public function produtos(){
        return $this->hasMany('App\Produto', 'fornecedor_id', 'id');
    }
}
