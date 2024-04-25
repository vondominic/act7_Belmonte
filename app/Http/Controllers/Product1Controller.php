<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product1Controller extends Controller
{
  public function index(){
      $products = "Product list form in Product Controller";
      return view ('product1.index',['products' => $products]);
  }


  public function create()
  {

    return view ('product1.create');

  }
}