
@extends('layout')


@section('contenido')
    <section>
        <div id="capa_modal" class="div_modal" ></div>
        <div id="capa_para_edicion" class="div_contenido" > </div>
    </section>

    <!-- contenido principal -->
    <section class="content"  id="contenido_principal">

    </section>
    <div style="display: none;" id="cargador_empresa" align="center">
        <br>


        <label style="color:#FFF; background-color:#ABB6BA; text-align:center">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>

        <img src="{{ asset('imagenes/cargando.gif') }}" align="middle" alt="cargador"> &nbsp;<label style="color:#ABB6BA">Realizando tarea solicitada ...</label>

        <br>
        <hr style="color:#003" width="50%">
        <br>
    </div>

<table class="table table-striped table-bordered table-hover" id="usuario">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Username</th>
        <th>tipo</th>
        <th>perfil</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr data-id="{{$usuario->id_usuario}}">
            <td>{{$usuario->id_usuario}}</td>
            <td>{{$usuario->nombre}}</td>
            <td>{{$usuario->ape_pat}}</td>
            <td>{{$usuario->ape_mat}}</td>
            <td>{{$usuario->username}}</td>
            <td>@include("usuario.datos.tipos")</td>

            <td>{{$usuario->perfil}}</td>
            <td>
                <div class="hidden-sm hidden-xs action-buttons">
                    <a class="blue btn-ver" href="#">
                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                    </a>

                    <a class="green btn-editar" href="#">
                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                    </a>

                    <a class="red btn-eliminar" href="#">
                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                    </a>
                </div>
            </td>

        </tr>
    @endforeach
    </tbody>

</table>



    @endsection