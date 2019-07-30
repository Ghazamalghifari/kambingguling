@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Tentang Perusahaan
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ url('/tentang') }}"></i>Tentang Perusahaan</a></li>
      <li class="active">Ubah Tentang Perusahaan</li>
    </ol>
</section>
  
<!-- Main content -->
<section class="content"> 
  <!-- Horizontal Form -->
  <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Ubah Tentang Perusahaan</h3>
              </div>
              {!! Form::model($tentang, ['url' => route('tentang.update', $tentang->id), 'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
             
                            <!-- /.box -->   
                <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tentang Kami</label> 
                            <div class="col-sm-9">
                                {!! Form::text('tentang_kami', null, ['class'=>'form-control','placeholder'=>'Tentang Kami','autocomplete'=>'off']) !!}
                                {!! $errors->first('tentang_kami', '<p class="help-block">:message</p>') !!} 
                            </div>
                        </div> 
 
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Alamat</label> 
                            <div class="col-sm-9">
                                {!! Form::text('alamat', null, ['class'=>'form-control','placeholder'=>'Alamat','autocomplete'=>'off']) !!}
                                {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!} 
                            </div>
                        </div> 

                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Alamat</label> 
                            <div class="col-sm-9">
                                {!! Form::text('alamat', null, ['class'=>'form-control','placeholder'=>'Alamat','autocomplete'=>'off']) !!}
                                {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!} 
                            </div>
                        </div> 
 
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Alamat</label> 
                            <div class="col-sm-9">
                                {!! Form::text('alamat', null, ['class'=>'form-control','placeholder'=>'Alamat','autocomplete'=>'off']) !!}
                                {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!} 
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