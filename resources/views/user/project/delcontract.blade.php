@extends('user.template.main')
@section('content')

<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> seleccione el contrato que desee eliminar</div>
        <div class="card-body">
          <div class="table-responsive">


<style type="text/css">
	img{border-radius: 10px}
	div{border: }
</style>

<div class="row">
	@foreach($contr as $contrs)
	
	<div class="col-sm-4"><p align="center">{{ $contrs->name }}</p>
		
<div style="text-align: center">
	<a href="{{ action('ProjectController@deletecontract',[$contrs->id,$contrs->name]) }}" onclick="return confirm('sr.{{\Auth::user()->name }} desea eliminar este contrato?');" "><p class="btn btn-danger" >Eliminar</p></a>
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

