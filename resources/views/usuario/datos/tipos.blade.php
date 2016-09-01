@if($usuario->tipo=="administrador")
    <span class="label label-sm label-success">{{$usuario->tipo}}</span>
@endif
@if($usuario->tipo=="gerente")
    <span class="label label-sm label-purple">{{$usuario->tipo}}</span>
@endif
@if($usuario->tipo=="sonidista")
    <span class="label label-sm label-warning">{{$usuario->tipo}}</span>

@endif
@if($usuario->tipo=="lumino")
    <span class="label label-sm label-danger">{{$usuario->tipo}}</span>
@endif
@if($usuario->tipo=="apoyo")

    <span class="label label-sm label-info arrowed arrowed-righ">{{$usuario->tipo}}</span>
@endif
@if($usuario->tipo=="cliente")
    <span class="label label-sm label-inverse arrowed-in">{{$usuario->tipo}}</span>

@endif
@if($usuario->tipo=="grupo")
    <span class="label label-sm label-success">{{$usuario->tipo}}</span>
@endif
@if($usuario->tipo=="dj")
    <span class="label label-sm label-default">{{$usuario->tipo}}</span>
@endif
