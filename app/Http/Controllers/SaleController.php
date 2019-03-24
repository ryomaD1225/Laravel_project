<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    //売上ページ表示
    public function index(){
        return view('sales', []); 
    }
}
