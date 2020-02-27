
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

  <thead class="table-info">
    <tr>
      
      <th>Titulo</th>
      <th>Cliente</th>
      <th>Telefono</th>
      <th>Fecha</th>
      <th>Propuesta</th>
      <th>Aprobado</th>
      <th>Culminados</th>
      <th>Cobrado</th>
      <th>Acciones</th>

    </tr>
  </thead>
  <tbody>
  	@foreach($projects as $project )
    <tr>
     <a href="x.html">
     <td>{{ $project->title }}</td>
      <td>{{ $project->name }}</td>
      <td>{{ $project->phone }}</td>
      <td>{{ $project->end }}</td>
      @if($project->propuesta == 1)
      <td><div style="text-align: center;"> <img src="{{ asset('iconos/iconic/svg/check.svg') }}" ></div></td>
      @else
      <td><div style="text-align: center;"><img src="{{ asset('iconos/iconic/svg/x.svg') }}" ></div></td>
      @endif
      @if($project->aprobado == 1)
      <td><div style="text-align: center;"><img src="{{ asset('iconos/iconic/svg/check.svg') }}"> </div></td>
      @else
      <td><div style="text-align: center;"><img src="{{ asset('iconos/iconic/svg/x.svg') }}" ></div></td>
      @endif
      @if($project->finalizado == 1)
      <td><div style="text-align: center;"><img src="{{ asset('iconos/iconic/svg/check.svg') }}"> </div></td>
      @else
      <td><div style="text-align: center;"><img src="{{ asset('iconos/iconic/svg/x.svg') }}" ></div></td>
      @endif
      @if($project->cobrado == 1)
      <td><div style="text-align: center;"><img src="{{ asset('iconos/iconic/svg/check.svg') }}"> </div></td>
      @else
      <td><div style="text-align: center;"><img src="{{ asset('iconos/iconic/svg/x.svg') }}" ></div></td>
      @endif
      <td><div style="text-align: center;"> <a href="{{ action('ProjectController@ver',$project->id) }}" > <button class="btn btn-info">Ver</button></a></div>
      </td>
      <td><div style="text-align: center;"> <a href="{{ action('ProjectController@edit',$project->id) }}" > <button class="btn btn-warning">Editar</button></a></div>
      </td>
    </tr>
    </a>

    @endforeach
  </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
{{   $projects->render() }}
  </ul>
</nav>
   
