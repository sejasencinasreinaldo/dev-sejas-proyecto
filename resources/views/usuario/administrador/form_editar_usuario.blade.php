

    <div class="clearfix ">
        <div class="pull-center alert alert-success no-margin">
              <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
              </button>

                    <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>

                          Haga clic en la imagen de abajo o en los campos de perfil para editarlos ...
        </div>
        <div class="hr dotted"></div>

        <div id="user-profile-1" class="user-profile row">

            <div class="col-xs-12 col-sm-3 center">
                <div id="notificacion_resul_fci"></div>
                <form  id="f_subir_imagen" name="f_subir_imagen" method="post"
                       action="subir_imagen_usuario" class="formarchivo" enctype="multipart/form-data" >
                        {!!  csrf_field()!!}
                    <input type="hidden" name="id_usuario_foto" value="{{$usuario->id_usuario}}">
                    <div>
                        <span class="profile-picture">
                            <div class="form-group col-xs-12">
                                @if($usuario->perfil=="")
                                    {{$usuario->perfil="imagenes/perfil/user.png"}}
                                    @endif
                                <img id="fotografia_usuario" class=" img-responsive" alt="Alex's Avatar" src="{{asset($usuario->perfil)}}"style="width:300px;height:200px;"/>
                            </div>

                        </span>
                    </div>
                    <div class="space-4"></div>
                    <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                        <div class="inline position-relative">
                            <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                <i class="ace-icon fa fa-circle light-green"></i>
                                &nbsp;
                                <span class="white">{{$usuario->nombre}}</span>
                            </a>

                            <ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
                                <li class="dropdown-header"> Change Status </li>

                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-circle green"></i>
                                        &nbsp;
                                        <span class="green">Available</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-circle red"></i>
                                        &nbsp;
                                        <span class="red">Busy</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-circle grey"></i>
                                        &nbsp;
                                        <span class="grey">Invisible</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="space-6"></div>
                        <div class="profile-contact-info">
                            <div class="profile-contact-links align-center">

                                <input name="archivo" id="archivo" type="file"   class="archivo form-control"  required/><br /><br />

                                <button class="btn btn-info" type="submit">
                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                    Cambiar Imagen
                                </button>
                            </div>

                            <div class="space-6"></div>

                            <div class="profile-social-links align-center">
                                <a href="#" class="tooltip-info" title="" data-original-title="Visit my Facebook">
                                    <i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
                                </a>

                                <a href="#" class="tooltip-info" title="" data-original-title="Visit my Twitter">
                                    <i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
                                </a>

                                <a href="#" class="tooltip-error" title="" data-original-title="Visit my Pinterest">
                                    <i class="middle ace-icon fa fa-pinterest-square fa-2x red"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                 </form>
                <div class="hr hr16 dotted"></div>
            </div>


            <div class="col-xs-12 col-sm-9">
                <div class="space-12"></div>
                <div id="notificacion_resul_feu"></div>
                <form  id="f_editar_usuario"  method="post"  action="editar_usuario" class="form-horizontal form_entrada" >

                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <input type="hidden" name="id_usuario" value="{{$usuario->id_usuario}}">

                    <div class="profile-user-info profile-user-info-striped">
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Nombre: </div>
                            <div class="profile-info-value col-xs-12 col-sm-12">
                                <input type="text" id="form-field-pass1" name="nombre" value="{{$usuario->nombre}}" class="width-100" />
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Apellido Paterno: </div>
                            <div class="profile-info-value col-xs-12 col-sm-12">
                                <input type="text" id="form-field-pass1" name="ape_pat" value="{{$usuario->ape_pat}}"class="width-100" />
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Apellido Materno: </div>

                            <div class="profile-info-value col-xs-12 col-sm-12">

                                <input type="text" id="form-field-pass1" name="ape_mat" value="{{$usuario->ape_mat}}" class="width-100" />
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name">Nombre de Usuario</div>

                            <div class="profile-info-value col-xs-12 col-sm-12">
                                <input type="text" id="form-field-pass1"name="username" value="{{$usuario->username}}" class="width-100" />
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <div class="profile-info-name"> Tipo de Usuario </div>

                            <div class="profile-info-value col-xs-12 col-sm-12">
                                <select id="tipo" name="tipo" class="form-control">
                                    <option value="">  </option>
                                    <option value="administrador">Administrador</option>
                                    <option value="gerente">Gerente</option>
                                    <option value="sonidista">Sonidista</option>
                                    <option value="lumino">Luminitécnico</option>
                                    <option value="grupo">Grupo Musical</option>
                                    <option value="apoyo">Apoyo</option>
                                    <option value="dj">Dj</option>
                                    <option value="cliente">Cliente</option>
                                </select>
                            </div>
                        </div>



                    </div>
                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn btn-info" type="submit">
                                <i class="ace-icon fa fa-check bigger-110"></i>
                                Save
                            </button>

                            &nbsp; &nbsp;
                            <button class="btn" type="reset">
                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
                <div class="space-20"></div>



                <div class="hr hr2 hr-double"></div>

                <div class="space-6"></div>

                <div id="notificacion_resul_fcp"></div>
                <form method="post" id="f_cambiar_password" class="form-horizontal form_entrada" action="cambiar_password" >
                    {!! csrf_field() !!}
                    <input type="hidden" name="id_usuario_password" value="{{$usuario->id_usuario}}">
                    <div class="tabbable">
                        <ul class="nav nav-tabs padding-16">



                            <li>
                                <a data-toggle="tab" href="#edit-password">
                                    <i class="blue ace-icon fa fa-key bigger-125"></i>
                                    Cambiar Password
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content profile-edit-tab-content">



                            <div id="edit-password" class="tab-pane">
                                <div class="space-10"></div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New Password</label>

                                    <div class="col-sm-9">
                                        <input type="password" id="form-field-pass1" name="password"/>
                                    </div>
                                </div>

                                <div class="space-4"></div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>

                                    <div class="col-sm-9">
                                        <input type="password" id="form-field-pass2"name="rpassword" />
                                    </div>
                                </div>

                                <div class="clearfix form-actions">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button class="btn btn-info" type="submit">
                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                            Save
                                        </button>

                                        &nbsp; &nbsp;
                                        <button class="btn" type="reset">
                                            <i class="ace-icon fa fa-undo bigger-110"></i>
                                            Reset
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </form>




            </div>
        </div>
      </div>

<script>
    function cargarpais(){
        $('#tipo option:eq("1")').prop('selected', true);
    }

    cargarpais();

</script>

