@extends('sistema.modelo')
@section('sistemaIndex')
<div class="row" data-toggle="appear">
    <!-- Row #2 -->
    <div class="col-md-12">
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">
                    <b>Lista de Pedidos</b>  <small>Use a Busca!!</small>
                </h3>                                    
            </div>
            <div class="block-content block-content-full">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Ano</th>
                            <th scope="col">Atendimento do Pedido</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Investimentos para Leigos: Começando do Zero</th>
                            <td>Cursos</td>
                            <td>2020</td>
                            <td>16/08/2020</td>

                        </tr>                                            
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <div class="col-md-12">
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">
                    <b>Pedidos Atendidos</b>  <small>Use a Busca!!</small>
                </h3>                                    
            </div>
            <div class="block-content block-content-full">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Ano</th>
                            <th scope="col">Atendimento do Pedido</th>
                            <th scope="col">Caminho no Drive</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Investimentos para Leigos: Começando do Zero</th>
                            <td>Cursos</td>
                            <td>2020</td>
                            <td>16/08/2020</td>
                            <td><b class="text-success">Drive HD Externo</b>/Curso/Contabilidade</td>
                        </tr>                                            
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <div class="col-md-12">
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">
                    Pedidos Pendêntes <small>Use a Busca!!</small>
                </h3>
            </div>
            <div class="block-content block-content-full">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Ano</th>                                                
                            <th scope="col">Status</th>                                                
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Cenário Econômico e Mercado Financeiro</th>
                            <td>Cursos</td>
                            <td>2020</td>
                            <td><b class="badge badge-warning">Buscando</b></td>
                        </tr>                                            
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- END Row #2 -->
</div>


</div>
<!-- END Page Content -->

</main>
@endsection