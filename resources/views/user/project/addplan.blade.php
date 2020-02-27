@extends('user.template.main')
@section('content')
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Agragar una plano al proyecto : {{ $project->title }}</div>
        <div class="card-body">
          <div class="table-responsive">

@if(count($errors) > 0)

 @foreach($errors->all() as $error)
<div class="alert alert-danger">{{ $error }}</div>
@endforeach
@endif

 {!! Form::open(['action'=>['ProjectController@updateplan',$project->id],'metohd'=>'POST','files'=>true]) !!} 
 
<div class="form-group">
 {{ Form::label('plano','Agregue una imagen') }}
{!! Form::file('plano',['class' => 'form-control','placeholder'=>'inserte el contrato']) !!}
</div>
<div class="form-group">
 {{ Form::label('description','nombre del plano') }}

 {!! Form::text('description',null,['class' => 'form-control','placeholder'=>'ingrese el nombre del plano']) !!}
 </div>
<div class="form-group">
 
 {!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}

 {!! Form::close() !!}
 <br>
 <br>

  </div>
        </div>
        
      </div>
    </div>

@endsection

