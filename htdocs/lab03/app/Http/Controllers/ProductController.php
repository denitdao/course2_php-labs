<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function show($number = 1){
        if ($number < 0) $number = 0;
        $model = new Data();
        $list = $model->getProducts($number);
        return view('product', ['list'=>$list]);
    }
}
