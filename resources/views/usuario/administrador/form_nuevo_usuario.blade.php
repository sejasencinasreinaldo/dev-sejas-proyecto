@extends("layout")
@section("contenido")

    <div class="box box-primary col-xs-12">

        <div class="box-header">

        </div><!-- /.box-header -->



        <div class="widget-box">
            <div class="widget-header widget-header-blue widget-header-flat">
                <h4 class="widget-title lighter">Nuevo Usuario</h4>

                <div class="widget-toolbar">
                    <label>
                        <small class="green">
                            <b>Validation</b>
                        </small>

                        <input id="skip-validation" type="checkbox" class="ace ace-switch ace-switch-4" />
                        <span class="lbl middle"></span>
                    </label>
                </div>
            </div>



            <div class="widget-body">
                <div class="widget-main">
                    <div id="fuelux-wizard-container">
                        <div class="step-content pos-rel">
                            <div class="step-pane active" data-step="1">
                                <h3 class="lighter block green">Ingrese la siguiente información por favor:</h3>

                                <form  id=""  method="post"  action="almacenar_usuario" class="form-horizontal " >

                                    {!! csrf_field() !!}

                                    <div class="form-group has-info">
                                        <label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombres:</label>

                                        <div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input name="nombre" type="text" id="" class="width-100" value="{{ old('nombre') }}" />
																		<i class=""></i>
																	</span>
                                        </div>

                                        @if($errors->has('nombre'))
                                            <div class="help-block col-xs-12 col-sm-reset inline red"> {{ $errors->first('nombre') }} </div>

                                        @endif
                                    </div>

                                    <div class="form-group has-info">
                                        <label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Apellido Paterno:</label>

                                        <div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input name="ape_pat" type="text" id="" class="width-100" value="{{ old('ape_pat') }}"/>
																		<i class=""></i>
																	</span>
                                        </div>
                                        @if($errors->has('ape_pat'))
                                            <div class="help-block col-xs-12 col-sm-reset inline red"> {{ $errors->first('ape_pat') }} </div>

                                        @endif

                                    </div>

                                    <div class="form-group has-info">
                                        <label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Apellido Materno:</label>

                                        <div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input name="ape_mat" type="text" id="" class="width-100"value="{{ old('ape_mat') }}" />
																		<i class=""></i>
																	</span>
                                        </div>
                                        @if($errors->has('ape_mat'))
                                            <div class="help-block col-xs-12 col-sm-reset inline red"> {{ $errors->first('ape_mat') }} </div>

                                        @endif

                                    </div>

                                    <div class="form-group has-info">
                                        <label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Fecha de Nacimiento:</label>

                                        <div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input name="fecha_nacimiento" type="date" id="" class="width-100"value="{{ old('fecha_nacimiento') }}" />
																		<i class=""></i>
																	</span>
                                        </div>
                                        @if($errors->has('ape_mat'))
                                            <div class="help-block col-xs-12 col-sm-reset inline red"> {{ $errors->first('ape_mat') }} </div>

                                        @endif

                                    </div>

                                    <div class="form-group has-info">
                                        <label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Nombre de Usuario:</label>

                                        <div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input name="username" type="text" id="" class="width-100"value="{{ old('username') }}"/>
																		<i class=""></i>
																	</span>
                                        </div>
                                        @if($errors->has('username'))
                                            <div class="help-block col-xs-12 col-sm-reset inline red"> {{ $errors->first('username') }} </div>

                                        @endif

                                    </div>

                                    <div class="form-group has-info">
                                        <label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Password:</label>

                                        <div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input name="password" type="password" id="" class="width-100" />
																		<i class=""></i>
																	</span>
                                        </div>
                                        @if($errors->has('password'))
                                            <div class="help-block col-xs-12 col-sm-reset inline red"> {{ $errors->first('password') }} </div>

                                        @endif
                                    </div>
                                    <div class="form-group has-info">
                                        <label class="col-xs-12 col-sm-3 control-label no-padding-right" for="inputInfo">Tipo de Usuario</label>

                                        <div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<select name="tipo" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a State...">
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
                                                                            <i class=""></i>
																	</span>
                                        </div>
                                        @if($errors->has('tipo'))
                                            <div class="help-block col-xs-12 col-sm-reset inline red"> {{ $errors->first('tipo') }} </div>

                                        @endif
                                    </div>


                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-4 col-md-9">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="ace-icon fa fa-check bigger-110"></i>
                                                Registrar
                                            </button>

                                            &nbsp; &nbsp; &nbsp;
                                            <button class="btn" type="reset">
                                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                                Cancelar
                                            </button>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection