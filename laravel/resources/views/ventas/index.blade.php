@extends('app')
@section('htmlheader_title')
Home
@endsection
@section('main-content')
<style>
    .ui-autocomplete { max-height: 200px; overflow-y: scroll; overflow-x: hidden;}
</style>
<link rel="stylesheet"href="//codeorigin.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
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
                    {!!Form::text('name',null,['class'=>'form-control search','id' => 'search', 'placeholder'=>'Buscar Cliente','autocomplete'=>'on'])!!}
                    {!!Form::text('cliente',null, ['id' => 'response','hidden'])!!}
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
                {!!Form::close();!!}
            </div>

            <div class="col-sm-4 invoice-col">
                <address>
                    <strong><?php
//                        echo $cliente->Nombres . '&nbsp;';
//                        echo $cliente->ApellidoPaterno . '&nbsp;';
//                        echo $cliente->ApellidoMaterno . '&nbsp;';
                        ?>, 
                        <!--$tipocliente[$cliente->TipoClienteId].'&nbsp;'!!}.</strong><br>-->
                        <?php // echo $fp[$cliente->FormaPagoId] . '&nbsp;'; ?><br>
                        <?php
//                    echo $cliente->Colonia . '&nbsp;';
//                    echo '#' . $cliente->numExt . '&nbsp;';
//                    echo $cliente->CP . '&nbsp;'
                        ?><br>
                        <?php
//                    echo $estado[$cliente->Estado] . '&nbsp;';
//                    echo $cliente->Municipio . '&nbsp;';
                        ?>,<br>
                        Tel: <?php // echo $cliente->Telefono . '&nbsp;';   ?>
                        Email:<?php // echo $cliente->Email . '&nbsp;';   ?>
                        </address>
                        </div>

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

                            <div class="col-sm-4">
                                &nbsp;
                                <div class="input-group">
                                    <label for="materialNombre" class="col-sm-4 control-label">Cantidad</label>
                                    <div class="col-sm-6">
                                        <input type="number" name="materialCantidad" min="1" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                &nbsp;
                                <div class="input-group">
                                    <label for="materialNombre" class="col-sm-4 control-label">Material</label>
                                    <div class="col-sm-8">
                                        {!! Form::select('SucursalId',$material, null, ['class' => 'form-control select2']) !!}
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
                                <div class="form-group">
                                    <label for="materialNombre" class="col-sm-3 control-label">Archivos</label>
                                    <div class="col-sm-8">   
                                        {!!Form::text('archivos',null,['class'=>'form-control', 'placeholder'=>'Nombre archivo(s)'])!!}
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="row">
                            <!--                <div class="col-sm-4" style="/*margin-left: 1px;*/">
                                                &nbsp;
                                                <div class="form-group">
                                                    <label for="materialNombre" class="col-sm-2 control-label">Diseño</label>
                                                    <label>
                                                        <input type="checkbox" class="minimal">
                                                    </label>
                                                </div>
                                            </div>-->
                            <div class="col-sm-4">
                                &nbsp;
                                <div class="form-group">
                                    <label for="materialNombre" class="col-sm-8 control-label">Diseño</label>
                                    <label style=' margin-left: -110px'>
                                        <input type="checkbox" name="diseño" class="minimal">
                                    </label>
                                </div>
                            </div>


                            <div class="col-sm-4">
                                &nbsp;
                                <div class="input-group">
                                    <label for="materialNombre" class="col-sm-3 control-label">Tipo</label>
                                    <div class="col-sm-8">
                                        {!! Form::text('archivos', null, ['class' => 'form-control','placeholder'=>'Nombre archivo(s)']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                &nbsp;
                                <div class="input-group">
                                    <label for="materialNombre" class="col-sm-4 control-label">Costo Diseño</label>
                                    <div class="col-sm-8">
                                        {!! Form::text('archivos', null, ['class' => 'form-control','placeholder'=>'Nombre archivo(s)','style'=>'margin-left: -14px']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                &nbsp;
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Diseñador</label>
                                    <div class="col-sm-8">                            
                                        {!! Form::text('disenadorId', null, ['class' => 'form-control input-sm','placeholder'=>'Diseñador','style'=>'margin-left:-27px']) !!}
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
                                    <label for="materialNombre" class="col-sm-4 control-label">Costo</label>
                                    <div class="col-sm-7">
                                        {!! Form::text('SucursalId', null, ['class' => 'form-control','disabled'=>'disabled']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!!Form::submit('Realizar Pedido',['class'=>'btn btn-success pull-right'])!!}
                        <br>

                        </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- The time line -->
                                <ul class="timeline">
                                    <!-- timeline time label -->

                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <li style="margin-left:-57px">

                                        <div class="timeline-item">
                                            <div class="timeline-body">
                                                <h4>Descripcion del Pedido </h4> 
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <div class="box" style="border-top: none">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-12 table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Qty</th>
                                                    <th>Product</th>
                                                    <th>Serial #</th>
                                                    <th>Description</th>
                                                    <th>Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Call of Duty</td>
                                                    <td>455-981-221</td>
                                                    <td>El snort testosterone trophy driving gloves handsome</td>
                                                    <td>$64.50</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Need for Speed IV</td>
                                                    <td>247-925-726</td>
                                                    <td>Wes Anderson umami biodiesel</td>
                                                    <td>$50.00</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Monsters DVD</td>
                                                    <td>735-845-642</td>
                                                    <td>Terry Richardson helvetica tousled street art master</td>
                                                    <td>$10.70</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Grown Ups Blue Ray</td>
                                                    <td>422-568-642</td>
                                                    <td>Tousled lomo letterpress</td>
                                                    <td>$25.99</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                                <div class="row">
                                    <!-- accepted payments column -->
                                    <div class="col-xs-6">
                                        <p class="lead">Metodos de Pago:</p>
                    <!--                    <img src="../public/dist/img/credit/visa.png" alt="Visa">
                                        <img src="../public/dist/img/credit/mastercard.png" alt="Mastercard">
                                        <img src="../public/dist/img/credit/american-express.png" alt="American Express">
                                        <img src="../public/dist/img/credit/paypal2.png" alt="Paypal">-->
                                        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                            Elige la forma de pago 
                                        </p>
                                    </div><!-- /.col -->
                                    <div class="col-xs-6">
                                        <p class="lead">Amount Due 2/22/2014</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th style="width:50%">Subtotal:</th>
                                                    <td>$250.30</td>
                                                </tr>
                                                <tr>
                                                    <th>Tax (9.3%)</th>
                                                    <td>$10.34</td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping:</th>
                                                    <td>$5.80</td>
                                                </tr>
                                                <tr>
                                                    <th>Total:</th>
                                                    <td>$265.24</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                                <div class="row no-print">
                                    <div class="col-xs-12">
                                        <a href="invoice-print.html" target="_blank" class="btn btn-default "><i class="fa fa-print"></i> Print</a>
                                        <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                                        <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                                    </div>
                                </div>
                            </div>
                                                    </div><!-- /.box-body -->
                        </section><!-- /.content -->
                        @endsection