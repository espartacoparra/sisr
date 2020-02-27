@extends('user.template.main')
@section('content')


<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-folder-open "></i> Proyectos de Largo Plazo: {{ $project->title }} </div>
        <div class="card-body">
          <div class="table-responsive">
<style>
   
    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
   
    #des{
      padding: 10px;
    }
   
  </style>
</head>


<div id="ac">

<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
     @if($project->images != '[]')
     <?php $c=0?>
     
      @foreach($project->images as $image)
      @if($c == 0)
    <div class="carousel-item active">
      <img width="800" height="400" class="d-block w-100" src="{{ asset('archivos/imagenes/'.$image->name) }}" alt="First slide">
    </div>
    <?php $c=1?>
    @else
    <div class="carousel-item">
      <img width="800" height="400" class="d-block w-100" src="{{ asset('archivos/imagenes/'.$image->name) }}" alt="First slide">
    </div>
    @endif
    @endforeach
    @else
       <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="Sin imagenes">
    </div>
   
@endif
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
  <div class="col-sm-4">
    <div class="card mb-3">
     <div class="card-header">
          <i class="fa fa-tasks "></i> Datos </div>
        <div class="card-body">
          <div class="table-responsive">
    <div class="well">
      <p><h5>{{ $project->title }}</h5></p>
    </div>
    <div class="well">
       <p><b>Cliente:</b> {{ $project->name }}</p>
    </div>
    <div class="well">
       <p><b>Cedula:</b> {{ number_format($project->cedula) }}</p>
    </div>
    
    <div class="well">
       <p><b>Área del terreno:</b> {{number_format( $project->terrain)}} m²</p>
    </div>
    <div class="well">
       <p><b>Área de construccion:</b> {{ number_format($project->construction)}} m²</p>
    </div>
    <div class="well">
       <p><b>Costo:</b> {{ number_format($project->price)}}</p>
    </div>
      </div>
        </div>
      </div>
    </div>
  

<div class="card mb-3">
     <div class="card-header">
          <i class="fa fa-clipboard "></i> Descripcion</div>
        <div class="card-body">
          <div class="table-responsive">
  <div class="well" id="des">
       <p> {!! $project->description !!}</p>
    </div>
    </div>
        </div>
      </div>
      <div class="card mb-3">
     <div class="card-header">
          <i class="fa fa-clipboard "></i> Acuerdo con el cliente</div>
        <div class="card-body">
          <div class="table-responsive">
  <div class="well" id="des">
       <p> {!! $project->acuerdo !!}</p>
    </div>
    </div>
        </div>
      </div>
    </div>
</div>
<hr>
</div>

<div class="container text-center">   

  <h3>Etapas del proyecto</h3>
  <br>
  <div class="row">
    <div class="col-sm-3" >
      <div class="btn btn-info">
      <div class="well" >
       <p>Propuesta</p>
      </div>
      @if($project->propuesta == 1)

      <a onclick="return confirm('sr.{{\Auth::user()->name }} desea desmarcar la fase de PROPUESTA ?');" href="{{ action('ProjectController@cambiarp',$project->id) }}"><div style="text-align: center;"> <img src="{{ asset('iconos/iconic/svg/check.svg') }}"></div></a>
      @else
      <a onclick="return confirm('sr.{{\Auth::user()->name }} desea marcar la fase de PROPUESTA como culminada?');" href="{{ action('ProjectController@cambiarp',$project->id) }}"><div style="text-align: center;"><img src="{{ asset('iconos/iconic/svg/x.svg') }}" ></div></a>
      @endif
     </div>
    </div>
    <div class="col-sm-3" > 
      <div class="btn btn-info">
      <div class="well">
       <p>Aprobado</p>
      </div>
     @if($project->aprobado == 1)
      <a onclick="return confirm('sr.{{\Auth::user()->name }} desea desmarcar la fase de APROBADO ?');" href="{{ action('ProjectController@cambiara',$project->id) }}"><div style="text-align: center;"><img src="{{ asset('iconos/iconic/svg/check.svg') }}"> </div></a>
      @else
      <a onclick="return confirm('sr.{{\Auth::user()->name }} desea marcar la fase de APROBADO como culminada?');" href="{{ action('ProjectController@cambiara',$project->id) }}"><div style="text-align: center;"><img src="{{ asset('iconos/iconic/svg/x.svg') }}" ></div></a>
      @endif  
      </div> 
    </div>
    <div class="col-sm-3" >
      <div class="btn btn-info">
      <div class="well">
       <p>Culminado</p>
      </div>
      @if($project->finalizado == 1)
      <a onclick="return confirm('sr.{{\Auth::user()->name }} desea desmarcar la fase de CULMINADO?');" href="{{ action('ProjectController@cambiarf',$project->id) }}"><div style="text-align: center;"><img src="{{ asset('iconos/iconic/svg/check.svg') }}"> </div></a>
      @else
      <a onclick="return confirm('sr.{{\Auth::user()->name }} desea marcar la fase de CULMINADO como culminada?');" href="{{ action('ProjectController@cambiarf',$project->id) }}"><div style="text-align: center;"><img src="{{ asset('iconos/iconic/svg/x.svg') }}" ></div></a>
      @endif
     </div> 
    </div>
    <div class="col-sm-3" >
      <div class="btn btn-info">
      <div class="well">
       <p>Cobrado</p>
      </div>
      @if($project->cobrado == 1)
      <a onclick="return confirm('sr.{{\Auth::user()->name }} desea desmarcar la fase de COBRADO');" href="{{ action('ProjectController@cambiarc',$project->id) }}"><div style="text-align: center;"><img src="{{ asset('iconos/iconic/svg/check.svg') }}"> </div></a>
      @else
     <a onclick="return confirm('sr.{{\Auth::user()->name }} desea marcar la fase de COBRADO como culminada?');" href="{{ action('ProjectController@cambiarc',$project->id) }}"><div style="text-align: center;"><img src="{{ asset('iconos/iconic/svg/x.svg') }}" ></div></a>
      @endif 
      </div> 
    </div>  
  </div>
  <hr>
</div>
<div class="container text-center">    
  <h3>Imagenes</h3>
 
  <br>
  <div class="row">
    
   
    @foreach($project->images as $images)
    <div class="col-sm-3">
      <a href="{{ asset('archivos/imagenes/'.$images->name)}}"><img src="{{ asset('archivos/imagenes/'.$images->name)}}" class="img-responsive" style="width:100%" alt="Image"> </a>
      
      <p>{{ $images->description }}</p>
    </div>

    @endforeach
   <div class="col-sm-3">
      <a href="{{ action('ProjectController@addimg',$project->id) }}"><button class="btn btn-info">Agregar imagenes</button></a>
      @if($project->images != '[]')
      <br>
      <br>
      <a href="{{ action('ProjectController@delimg',$project->id) }}"><button class="btn btn-danger">Eliminar imagenes</button></a>
      @endif
    </div>
  </div>
  <hr>
</div>


<div class="container text-center">    
  <h3>Planos</h3>
  <br>
  <div class="row">
    @foreach($project->plans as $plans)
    <div class="col-sm-3">
      <a class="" href="{{ asset('archivos/planos/'.$plans->name)}}">Descargar: {{ $plans->description}} </a>
      
     
    </div>

    @endforeach
    <div class="col-sm-3">
     <a href="{{ action('ProjectController@addplan',$project->id) }}"><button class="btn btn-info">Agregar Planos</button></a>
     @if($project->plans != '[]')
      <br>
      <br>
      <a href="{{ action('ProjectController@delplan',$project->id) }}"><button class="btn btn-danger">Eliminar Planos</button></a>
      @endif
    </div>
  </div>
</div>
<hr>
<div class="container text-center">    
  <h3>contratos</h3>
  <br>
  <div class="row">
    @foreach($project->contracts as $contract)
    <div class="col-sm-3">
      <a class="" href="{{ asset('archivos/contratos/'.$contract->name)}}">Descargar: contrato</a>
      
     
    </div>

    @endforeach
    <div class="col-sm-3">
     <a href="{{ action('ProjectController@addcontract',$project->id) }}"><button class="btn btn-info">Agregar Contarto</button></a>
     @if($project->contracts != '[]')
      <br>
      <br>
      <a href="{{ action('ProjectController@delcontract',$project->id) }}"><button class="btn btn-danger">Eliminar Contrato</button></a>
      @endif
    </div>
  </div>
</div>
<br>
</div>
<br>
 </div>
        </div>
        <div class="card-footer small text-muted">fecha de creacion: {{ $project->created_at }}</div>
      </div>
    </div>
@endsection