<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use DB;

class Pagamento extends Model
{
    protected $table = 'tb_pagamento';
    
    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }
    
    public function listaPagamento($idCliente) {

        $pagamentos = DB::table('tb_pagamento')
                ->join('tb_cliente', 'tb_pagamento.id_cliente', '=', 'tb_cliente.id_cliente')
                ->join('tb_plano', 'tb_cliente.id_plano', '=', 'tb_plano.id_plano')
                ->select('tb_pagamento.*','tb_cliente.*','tb_plano.tipo','tb_plano.valor','tb_pagamento.status as pgAtivo')
                ->where('tb_pagamento.id_cliente',$idCliente)
                ->get();
        return $pagamentos;
    }
}
