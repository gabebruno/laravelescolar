@extends('home')

@section('frame1')
    <div class="card">
        <div class="card-header d-flex p-0">
            <h3 class="card-title p-3">Acessos de Gestão</h3>

            <ul class="nav nav-pills ml-auto p-2">
                <li class="nav-item ">
                    <a class="nav-link active " href="#tab_1" data-toggle="tab">Professores</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="#tab_2" data-toggle="tab">Alunos</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="#tab_3" data-toggle="tab">Salas</a>
                </li>

            </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    @include('gestores.professores', [])
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    @include('gestores.alunos', [])
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                    @include('gestores.salas', [])
                </div>
            </div>
            <!-- /.tab-content -->
        </div><!-- /.card-body -->
    </div>
@stop
