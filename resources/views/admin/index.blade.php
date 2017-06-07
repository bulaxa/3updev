@extends('layout.admin')


@section('conteudo')


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>{{$cliente->nome}} <small>{{$cliente->cnpj or old('telefone')}}</small></h3>
            </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="title_right"><h3 style="font-weight: bold;color: {{($cliente->nome =='1')? "green" : "red"}}">{{($cliente->nome =='1')? "ATIVO" : "INATIVO"}}</h3></div>
                </div>
            </div>
            


            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <?php //Zend_Debug::dump($this->objcliente);exit;?>
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label col-md-4 col-sm-12 col-xs-12" for="nome">Nome</label>
                        <input type="text" placeholder="Nome" class="form-control" value="{{$cliente->nome}}" disabled>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12 form-group">
                        <label class="control-label col-md-8 col-sm-12 col-xs-12" for="endereco">Endereço</label>
                        <input type="text" placeholder="Endereço" class="form-control" value="{{$cliente->endereco}}" disabled>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label col-md-4 col-sm-12 col-xs-12" for="email">E-mail</label>
                        <input type="text" placeholder="Email" class="form-control" value="{{$cliente->email}}" disabled>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="telefone">Telefone</label>
                        <input type="text" placeholder="Telefone" class="form-control" value="{{$cliente->telefone}}" disabled>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                        <label class="control-label col-md-3 col-sm-12 col-xs-12" for="plano">Plano</label>
                        <input type="text" placeholder="Plano" class="form-control" value="{{$cliente->tipo}}" disabled>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                        <label class="control-label col-md-3 col-sm-12 col-xs-12" for="valor">Valor</label>
                        <input type="text" placeholder="Plano" class="form-control" value="R${{$cliente->valor or '0'}},00" disabled>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" for="descricao">Descrição</label>
                        <span>{{$cliente->descricao}}</span>
                    </div>


                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
