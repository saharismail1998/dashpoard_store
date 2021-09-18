<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{

    protected $products = [
        1 => 'product1',
        2 => 'product2',
        3 => 'product3',
        4 => 'product4',
        5 => 'product5',
        6 => 'product6',
    ];
    public function index()
    {
        return view('products',[
            'title'=>'Our products',
            'products'=> $this->products,
        ]);
    }

    public function show($category, $name = '')
    {
        return 'product name:' . $category . '/' . $this->products[$name];
    }
}
