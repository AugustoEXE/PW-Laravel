<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        try {
            return view('produtos.index');
        }catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function add()
    {
        try {


        }catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function view()
    {
        try {


        }catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
