@extends('user.template.main')
@section('content')
 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-edit"></i> Editar Proyectos de Largo Plazo</div>
        <div class="card-body">
          <div class="table-responsive">

          	@if(count($errors) > 0)

 @foreach($errors->all() as $error)
<div class="alert alert-danger">{{ $error }}</div>
@endforeach
@endif

 {!! Form::open(['action'=>['ProjectController@update',$project->id],'method'=>'PUT','files'=>true]) !!} 
 <div class="form-group">
 {{ Form::label('title','Titulo') }}

 {!! Form::text('title',$project->title,['class' => 'form-control','placeholder'=>'ingrese eltitulo del proyecto']) !!}
 </div>
 <div class="form-group">
 {{ Form::label('name','Nombre del cliente') }}
{!! Form::text('name',$project->name,['class' => 'form-control','placeholder'=>'ingrese el nombre del cliente']) !!}
</div>
<div class="form-group">
 {{ Form::label('cedula','Cedula') }}
{!! Form::number('cedula',$project->cedula,['class' => 'form-control','placeholder'=>'ingrese la cedula del cliente']) !!}
</div>
<div class="form-group">
 {{ Form::label('email','Correo') }}
{!! Form::email('email',$project->email,['class' => 'form-control','placeholder'=>'ingrese el correo del cliente']) !!}
</div>
<div class="form-group">
 {{ Form::label('phone','Celular') }}
{!! Form::number('phone',$project->phone,['class' => 'form-control','placeholder'=>'ingrese el numero de telefono del cliente']) !!}
</div>
<div class="form-group">
 {{ Form::label('description','Descripción') }}
{!! Form::textarea('description',$project->description,['class'=>'form-control','id'=>'text-area','pleaceholder'=>'Descripcion', 'required']) !!}
</div>
<div class="form-group">
 {{ Form::label('acuerdo','Acuerdo con el cliente') }}
{!! Form::textarea('acuerdo',$project->acuerdo,['class'=>'form-control','id'=>'text-area2','pleaceholder'=>'acuardo', 'required']) !!}
</div>
<div class="form-group">
 {{ Form::label('anticipo','Pago de anticipo del proyecto') }}
{!! Form::number('anticipo',$project->anticipo,['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {{ Form::label('terrain','Área del terreno en m²') }}
{!! Form::text('terrain',$project->terrain,['class' => 'form-control','placeholder'=>'agregue la dimension total del terreno']) !!}
</div>
<div class="form-group">
 {{ Form::label('construction','Área de la construcción en m²') }}
{!! Form::text('construction',$project->construction,['class' => 'form-control','placeholder'=>'agregue la área total del construcción']) !!}
</div>
<div class="form-group">
 {{ Form::label('end','Fecha aproximada de entrega') }}
{!! Form::date('end',$project->end,['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {{ Form::label('price','Costo') }}
{!! Form::number('price',$project->price,['class' => 'form-control','placeholder'=>'']) !!}
</div>
<div class="form-group">
 {{ Form::label('status','Estado del proyecto') }}
{!! Form::select('status',$status,'s',['class' =>'form-control']) !!}
</div>
<div class="form-group">
 {{ Form::label('contract','Contrato (opcional)') }}
{!! Form::file('contract',['class' => 'form-control','placeholder'=>'inserte el contrato']) !!}
</div>
 {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}

 {!! Form::close() !!}
 <br>
 <br>
  </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
@endsection

@section('script')
<script type="text/javascript">$('#text-area').trumbowyg({
});
</script>
</script>
    

@endsection