@extends('app')
@section('htmlheader_title')
Home
@endsection
@section('main-content')
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa  fa-shopping-cart"></i> Nueva Venta</h3>           
        </div>
        <div class="box-body">
            <div class="col-sm-4 invoice-col">
                {!!Form::open(['route'=>'ventas.index','method'=>'GET','class'=>'form-horizontal','role'=>'search'])!!}
                <label for="exampleInputEmail1">Cliente</label>
                <div class="input-group input-group-sm">
                    {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Buscar Cliente'])!!}
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
                {!!Form::close();!!}
            </div>
            @foreach ($clientes as $cliente)
            <div class="col-sm-4 invoice-col">
                <address>
                    <strong><?php
                        echo $cliente->Nombres . '&nbsp;';
                        echo $cliente->ApellidoPaterno . '&nbsp;';
                        echo $cliente->ApellidoMaterno . '&nbsp;';
                        ?>, {!! $tipocliente[$cliente->TipoClienteId].'&nbsp;'!!}.</strong><br>
                    <?php echo $fp[$cliente->FormaPagoId] . '&nbsp;'; ?><br>
                    <?php
                    echo $cliente->Colonia . '&nbsp;';
                    echo '#' . $cliente->numExt . '&nbsp;';
                    echo $cliente->CP . '&nbsp;'
                    ?><br>
                    <?php
                    echo $estado[$cliente->Estado] . '&nbsp;';
                    echo $cliente->Municipio . '&nbsp;';
                    ?>,<br>
                    Tel: <?php echo $cliente->Telefono . '&nbsp;'; ?>
                    Email:<?php echo $cliente->Email . '&nbsp;'; ?>
                </address>
            </div>
            @endforeach
            <div class="col-sm-4 invoice-col">
                <b>Invoice #007612</b><br>
                <br>
                <b>Order ID:</b> 4F3S8J<br>
                <b>Payment Due:</b> 2/22/2014<br>
                <b>Account:</b> 968-34567
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group">
                        <label for="materialNombre" class="col-sm-4 control-label">Sucursal</label>
                        <div class="col-sm-8">
                            {!! Form::select('SucursalId',$sucursal, null, ['class' => 'form-control select2']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input-group">
                        <label for="materialNombre" class="col-sm-12 control-label">Fecha</label>
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        {!!Form::text('fechaRecepcion',null,['class'=>'form-control pull-right','id'=>'reservation','placeholder'=>'Fecha Recepcion'])!!}
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                &nbsp;
                <div class="input-group">
                    <label for="materialNombre" class="col-sm-4 control-label">Cantidad</label>
                    <div class="col-sm-5">
                        <input type="number" name="materialCantidad" min="1" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                &nbsp;
                <div class="input-group">
                    <label for="materialNombre" class="col-sm-4 control-label">Material</label>
                    <div class="col-sm-8">
                        {!! Form::select('SucursalId',$sucursal, null, ['class' => 'form-control select2']) !!}
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                &nbsp;
                <div class="input-group">
                    <label for="materialNombre" class="col-sm-4 control-label">Base</label>
                    <div class="col-sm-6">
                        <input type="number" name="materialCantidad" step='0.01' min="1" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                &nbsp;
                <div class="input-group">
                    <label for="materialNombre" class="col-sm-4 control-label">Altura</label>
                    <div class="col-sm-6">
                        <input type="number" name="materialCantidad" step='0.01' min="1" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                &nbsp;
                <div class="input-group">
                    <label for="materialNombre" class="col-sm-4 control-label">Metros</label>
                    <div class="col-sm-6">
                        <input type="number" name="materialCantidad" min="1" class="form-control" disabled="disabled">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                &nbsp;
                <div class="input-group">
                    <label for="materialNombre" class="col-sm-4 control-label">Costo</label>
                    <div class="col-sm-7">
                        {!! Form::text('SucursalId', null, ['class' => 'form-control','disabled'=>'disabled']) !!}
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                &nbsp;
                <div class="form-group">
                    <label for="materialNombre" class="col-sm-8 control-label">Urgente</label>
                    <label style=' margin-left: -110px'>
                        <input type="checkbox" class="minimal">
                    </label>
                </div>
            </div>
            <div class="col-sm-4">
                &nbsp;
                <div class="input-group">
                    <label for="materialNombre" class="col-sm-4 control-label">Archivos</label>
                    <div class="col-sm-8">
                        {!! Form::text('archivos', null, ['class' => 'form-control select2','placeholder'=>'Nombre archivo(s)']) !!}
                    </div>
                </div>
            </div> 
			<div class="col-sm-4">
                &nbsp;
                <div class="input-group">
                    <label for="materialNombre" class="col-sm-4 control-label">Archivos</label>
                    <div class="col-sm-8">
                        {!! Form::text('archivos', null, ['class' => 'form-control select2','placeholder'=>'Nombre archivo(s)']) !!}
                    </div>
                </div>
            </div> 
            <div class="col-sm-4">
                &nbsp;
                <div class="form-group">
                    <label for="materialNombre" class="col-sm-4 control-label">Urgente</label>
                    <label style=' margin-left: -168px'>
                        <input type="checkbox" class="minimal">
                    </label>
                </div>
            </div>
            <div class="col-sm-4">
                &nbsp;
                <div class="input-group">
                    <label for="materialNombre" class="col-sm-4 control-label">Tipo</label>
                    <div class="col-sm-8">
                        {!! Form::text('archivos', null, ['class' => 'form-control','placeholder'=>'Nombre archivo(s)']) !!}
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                &nbsp;
                <div class="input-group">
                    <label for="materialNombre" class="col-sm-4 control-label">Costo</label>
                    <div class="col-sm-8">
                        {!! Form::text('archivos', null, ['class' => 'form-control','placeholder'=>'Nombre archivo(s)']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.box-body -->
</section><!-- /.content -->
@endsection