<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    function Add_product(Request $req){
        $product = new Products();

        $product->name = $req->name;
        $product->value = $req->value;
        $product->quantity = $req->quantity;

        $product->save();
    }
}
