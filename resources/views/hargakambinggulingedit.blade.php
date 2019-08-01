@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Harga Kambing Guling
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ url('/kambingguling') }}"></i>Harga Kambing Guling</a></li>
      <li class="active">Ubah Harga Kambing Guling</li>
    </ol>
</section>
  
<!-- Main content -->
<section class="content"> 
  <!-- Horizontal Form -->
  <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Ubah Harga Kambing Guling</h3>
              </div>
              {!! Form::model($hargakambingguling, ['url' => route('kambingguling.update', $hargakambingguling->id), 'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
             
                            <!-- /.box -->   
                <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Harga Standard</label> 
                            <div class="col-sm-9">
                                {!! Form::text('harga_1', null, ['class'=>'form-control','placeholder'=>'Harga Standard','autocomplete'=>'off']) !!}
                                {!! $errors->first('harga_1', '<p class="help-block">:message</p>') !!} 
                            </div>
                        </div> 
 
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Harga Medium</label> 
                            <div class="col-sm-9">
                                {!! Form::text('harga_2', null, ['class'=>'form-control','placeholder'=>'Harga Medium','autocomplete'=>'off']) !!}
                                {!! $errors->first('harga_2', '<p class="help-block">:message</p>') !!} 
                            </div>
                        </div> 
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Harga Spesial</label> 
                            <div class="col-sm-9">
                                {!! Form::text('harga_3', null, ['class'=>'form-control','placeholder'=>'Harga Spesial','autocomplete'=>'off']) !!}
                                {!! $errors->first('harga_3', '<p class="help-block">:message</p>') !!} 
                            </div>
                        </div> 
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Harga Komplit</label> 
                            <div class="col-sm-9">
                                {!! Form::text('harga_4', null, ['class'=>'form-control','placeholder'=>'Harga Komplit','autocomplete'=>'off']) !!}
                                {!! $errors->first('harga_4', '<p class="help-block">:message</p>') !!} 
                            </div>
                        </div> 
 

                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-10">
                                <button type="submit" class="btn btn-block btn-info pull-flat">
                                <i class="fa fa-floppy-o"></i>  Simpan</button> 
                    </div>
                    </div>
                <!-- /.box-body -->  

                
              {!! Form::close() !!}  
  </div>  
</section>
<!-- /.content -->
@endsection