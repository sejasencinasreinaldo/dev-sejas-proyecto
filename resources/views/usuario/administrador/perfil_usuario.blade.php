<div class="row ">
    <div class="col-xs-12 col-sm-3 center">
		<span class="profile-picture">
		    <img class="editable img-responsive" alt="User's Avatar" id="avatar2" src="{{asset($usuario->imagen)}}" />
		</span>

        <div class="space space-4"></div>

        <a href="#" class="btn btn-sm btn-block btn-success">
            <i class="ace-icon fa fa-plus-circle bigger-120"></i>
            <span class="bigger-110">{{$usuario->tipo}}</span>
        </a>

        <a href="#" class="btn btn-sm btn-block btn-primary">
            <i class="ace-icon fa fa-envelope-o bigger-110"></i>
            <span class="bigger-110">Enviar un mensage</span>
        </a>
    </div><!-- /.col -->

    <div class="col-xs-12 col-sm-9">
        <h4 class="blue">
            <span class="middle">{{$usuario->nombre}}</span>

            <span class="label label-purple arrowed-in-right">
                <i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
                en linea
            </span>
        </h4>

        <div class="profile-user-info">
            <div class="profile-info-row">
                <div class="profile-info-name"> Nombre </div>

                <div class="profile-info-value">
                    <span>{{$usuario->nombre}}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Apellido Paterno </div>

                <div class="profile-info-value">

                    <span>{{$usuario->ape_pat}}</span>

                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Apellido materno </div>

                <div class="profile-info-value">
                    <span>{{$usuario->ape_mat}}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Nombre de Usuario </div>

                <div class="profile-info-value">
                    <span>{{$usuario->username}}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Tipo</div>

                <div class="profile-info-value">
                    <span>{{$usuario->tipo}}</span>
                </div>
            </div>
        </div>



        <div class="hr hr-8 dotted"></div>

        <div class="profile-user-info">

        @if(count($perfil)!=0)
            <div class="profile-info-row">
                <div class="profile-info-name">
                    <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                </div>

                <div class="profile-info-value">
                    <a href="{{$perfil->facebook}}">Facebook</a>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name">
                    <i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
                </div>

                <div class="profile-info-value">
                    <a href="{{$perfil->twitter}}">Twitter</a>
                </div>
            </div>
            <div class="profile-info-row">
                <div class="profile-info-name">
                    <i class="middle ace-icon fa fa-google-plus-square bigger-150 light-blue"></i>
                </div>

                <div class="profile-info-value">
                    <a href="#">Gmail</a>
                </div>
            </div>
            @endif
        </div>
    </div><!-- /.col -->

</div><!-- /.row -->