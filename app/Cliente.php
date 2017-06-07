<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cliente extends Model {

    protected $table = 'tb_cliente';

    public function pagamento() {
        return $this->hasMany('App\Pagamento');
    }
    
    public function descCliente($idCliente){
        
        $cliente = DB::table('tb_cliente')
                ->join('tb_plano', 'tb_cliente.id_plano', '=', 'tb_plano.id_plano')
                ->select('tb_cliente.*','tb_plano.tipo','tb_plano.valor')
                ->where('tb_cliente.id_cliente',$idCliente)
                ->first();
        
        return $cliente;
    }


}
