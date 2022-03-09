<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    
    public function getProduct()
    {
        return view('product');
    }
}