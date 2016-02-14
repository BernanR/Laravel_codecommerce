<?php

namespace WberEcommerce\Http\Controllers;

use Illuminate\Http\Request;

use WberEcommerce\Categorias;
use WberEcommerce\Http\Requests;
use WberEcommerce\Http\Controllers\Controller;

class HelloController extends Controller
{
    private $categorias;
    public function __construct(){
        $this->categorias = new Categorias();
    }
    public function index(){
        $categorias = $this->categorias->all();
        return view('welcome',compact('categorias'));
    }
}
