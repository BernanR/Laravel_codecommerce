<?php

namespace WberEcommerce\Http\Controllers;

use Illuminate\Http\Request;

use WberEcommerce\Categorias;
use WberEcommerce\Http\Requests;
use WberEcommerce\Http\Controllers\Controller;

class categoriasController extends Controller
{
    private $categorias;

    public function __construct(Categorias $categorias){
        $this->categorias = $categorias;
    }

    public function index(){
        $categorias = $this->categorias->all();
        return view('categorias.index',compact('categorias'));
    }

    public function  create(){
        return view('categorias.create');
    }
}
