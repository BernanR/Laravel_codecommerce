<?php

namespace WberEcommerce;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $fillable = [
        'nome',
        'descricao'
    ];
}
