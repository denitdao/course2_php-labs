<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        return view('sign-in');
    }

    public function check(Request $request){
        $model = new Data();
        $login = $request->input('login');
        $password = $request->input('password');

        if ($model->checkUser($login, $password)) {
            $list = $model->getProducts(1);
            return view('product', ['number' => 1, 'list' => $list]);
        } else
            return view('sign-in', ['message'=>'Wrong login / password']);
    }
}
