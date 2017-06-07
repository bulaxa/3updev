@extends('layout.admin')


@section('conteudo')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Pagamentos</small></h3>
            </div>

        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">


                    <div class="x_content">

                        <p>Lista de Boletos emitidos</p>

                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th>
                                            <input type="checkbox" id="check-all" class="flat">
                                        </th>
                                        <th class="column-title">Númeto </th>
                                        <th class="column-title">Data </th>
                                        <th class="column-title">Código </th>
                                        <th class="column-title">Status </th>
                                        <th class="column-title">Serviço </th>
                                        </th>
                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($pagamentos as $pagamento)
                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>

                                        <td class=" ">{{$pagamento->id_pagamento}}</td>

                                        <td class=" ">{{$pagamento->data}} </td>
                                        <td class=" ">{{$pagamento->codigo}}</td>
                                        <td class=""><b style="color: {{($pagamento->pgAtivo == 1)? "green" : "red"}}">{{($pagamento->pgAtivo == 1)? "PAGO" : "A PAGAR"}}</b></td>
                                        <td class=" ">{{$pagamento->tipo}}</td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

