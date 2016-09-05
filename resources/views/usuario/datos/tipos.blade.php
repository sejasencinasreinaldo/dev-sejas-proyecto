@if($usuario->tipo=="Administrador")
    <span class="label label-sm label-success">{{$usuario->tipo}}</span>
@endif
@if($usuario->tipo=="Gerente")
    <span class="label label-sm label-purple">{{$usuario->tipo}}</span>
@endif
@if($usuario->tipo=="Sonidista")
    <span class="label label-sm label-warning">{{$usuario->tipo}}</span>

@endif
@if($usuario->tipo=="Luminotecnico")
    <span class="label label-sm label-danger">{{$usuario->tipo}}</span>
@endif
@if($usuario->tipo=="Apoyo")

    <span class="label label-sm label-info arrowed arrowed-righ">{{$usuario->tipo}}</span>
@endif
@if($usuario->tipo=="Cliente")
    <span class="label label-sm label-inverse arrowed-in">{{$usuario->tipo}}</span>

@endif
@if($usuario->tipo=="Grupo")
    <span class="label label-sm label-success">{{$usuario->tipo}}</span>
@endif
@if($usuario->tipo=="Dj")
    <span class="label label-sm label-default">{{$usuario->tipo}}</span>
@endif
