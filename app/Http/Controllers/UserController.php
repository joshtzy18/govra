<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello from Vince';
    }

    public function show($id){
        return $id;
    }
}

