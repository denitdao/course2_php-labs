<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function show($name = "unknown"){
        $model = new Data();
        $additional = $model->getAdditional($name);
        return view('message', ['name' => $name, 'additional'=>$additional]);
    }
}
