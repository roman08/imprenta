@extends('app')
@section('htmlheader_title')
Home
@endsection
@section('main-content')
<div class="container">
    <div class="col-xs-11">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Usuarios</h3>
                <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>Acciones</th>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Usuario</th>
                        <th>Estatus</th>
                        <th>Rol</th>
                        <th>Acceso</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td>
                            {!!link_to_route('usuario.edit', $title = '', $parameters = $user->id, $attributes = ['class'=>'fa fa-edit'] )!!}  
                            {!!Form::open(['route'=>['usuario.destroy', $user->usuarioId], 'method' => 'DELETE', 'style'=>'margin-top: -27px;margin-left: 20px;'])!!}
                            <button type="submit" class="btn btn-link">
                                <i class="fa fa-trash-o fa-fw"></i> 
                            </button>
                            {!!Form::close()!!}
                        </td>
                        <td>{!!$user->id!!}</td>
                        <td>{!!$user->name!!}</td>

                        <td> <?php
                            if ($user->status == 1) {
                                echo "<span class='label label-success'>Activo</span>";
                            } else {
                                echo "<span class='label label-danger'>Inactivo</span>";
                            }
                            ?></td>
                        <td>
                            {!!$roles[$user->role_id]!!}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
@endsection