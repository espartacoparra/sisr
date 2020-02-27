@extends('user.template.main')
@section('content')

<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> clickee la imagen que desea eliminar</div>
        <div class="card-body">
          <div class="table-responsive">


<style type="text/css">
	img{border-radius: 10px}
	div{border: }
</style>

<div class="row">
	@foreach($img as $image)
	<div class="col-sm-4"><img class="img-responsive" style="width:100%" alt="Image" src="{{ asset('archivos/imagenes/'.$image->name)}}">
		<br>
		<br>
<div style="text-align: center">
	<a href="{{ action('ProjectController@deleteimg',[$image->id,$image->name]) }}" onclick="return confirm('sr.{{\Auth::user()->name }} desea eliminar esta imagen?');" "><p class="btn btn-danger" >Eliminar</p></a>
</div>
		
	</div>
	 @endforeach

</div>

 <br>
 <br>

 </div>
        </div>
       
      </div>
    </div>

@endsection

