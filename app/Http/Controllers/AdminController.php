<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Cliente;
use App\Pagamento;

class AdminController extends Controller {
    
    public function __construct() {
        $this->middleware('autenticador',['except' => ['form']]);
    }


        public function form() {
            if(Auth::check()){
                return redirect()->action('AdminController@index');
            }  else {
                return view('admin/login');
            }
            
    }

    public function login() {

        $dados = Request::only('email', 'password');
        if (Auth::attempt($dados)) {
            
            return redirect()->action('AdminController@index');
        }
        return redirect()->action('AdminController@login');
    }
    

    public function index() {
        
        
        $dados = Auth::user()->id_cliente;


        $modelCliente = new Cliente();
        $clientes = $modelCliente->descCliente($dados);
        return view('admin.index')->with('cliente', $clientes);
    }

    public function boleto() {

        //alterar pelo return auth
        $clientes = Cliente::where('id_cliente', '1')->get();

        $model = new Pagamento();
        $pagamentos = $model->listaPagamento($clientes[0]['id_cliente']);

        return view('admin.pagamento')->with('pagamentos', $pagamentos);
    }
    
    public function logout(){
        Auth::logout();
        return redirect('/admin');
    }

}
