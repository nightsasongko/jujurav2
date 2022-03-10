<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    
    public function getProduct()
    {
        $url = 'http://recruitment.api.jujura.id/api/product';
        $json = file_get_contents($url);
        $data = json_decode($json);
        // var_dump($data->items);die;



        
        return view('product', compact('data'));
    }
}