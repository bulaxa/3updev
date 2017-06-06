<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    
    public function form(){
        return view('admin/login');
    }
    
    public function login(){
        
        $dados = Request::only('email','password');
        if(Auth::attempt($dados)){
            return redirect()->action('AdminController@index');
        }
        return redirect()->action('AdminController@login');
        
    }
    
    public function index(){
        return view('admin.index');
    }
}
