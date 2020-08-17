@extends('sistema.modelo')
@section('indexCurso')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-plus"></i>&nbsp;Adicionar Curso
</button>
<br>
<br>
<div class="row" data-toggle="appear">
    <div class="col-md-12">
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">
                    <b>Inserir Cursos</b>
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
                            <th scope="col">Caminho do Drive</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cursos as $curso)
                       
                        <tr>
                            <th scope="row">{{$curso['nome']}}</th>
                            <td ><b>{!!  json_decode(file_get_contents('json/categoriasCursos.json'),true)[$curso['categoria']]['cursos'] !!}</b></td>
                            <td >{!! date_format(date_create($curso['data']),'d/m/Y')  !!}</td>
                            <td>{{$curso['ano_curso']}}</td>
                            <td><b class="text-success">DriveHDExterno/</b>{!!  json_decode(file_get_contents('json/categoriasCursos.json'),true)[$curso['categoria']]['cursos'] !!}/{{$curso['nome']}}</td>                            
                        </tr>       
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- Row #2 -->


</div>


</div>
<!-- END Page Content -->

</main>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adição de Cursos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('/adicionarCurso')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nome</label> 
                            <input name="nome" id="nome" class="form-control" type="text">
                            <br>
                            <label>Ano do Curso</label> 
                            <input name="ano_filme" id="ano_filme" class="form-control" type="text">
                            <br>
                            <label>Categoria</label> 
                            <?php
                            $categoriasCursos = json_decode(file_get_contents('json/categoriasCursos.json'), true);
                            $i = 0;
                            ?>

                            <select name="categoria" id='categoria' class="form-control">
                                
                                @foreach($categoriasCursos as $categoria)

                                <option value="{{$i}}">{{$categoria['cursos']}}</option>
                                {!! $i++ !!}
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <label>Data do Pedido</label> 
                            <input name="data" id="data" class="form-control" type="date">
                            <br>
                            
                        </div>

                    </div>  
                    <br>

                    <button type="submit" class="btn btn-info">Adicionar Filme</button>
                    <button type="reset" class="btn btn-danger">Limpar Campos</button>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection