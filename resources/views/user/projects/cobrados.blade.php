@extends('user.template.main')
@section('content')
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Proyectos en estado de cobrados</div>
        <div class="card-body">
          <div class="table-responsive">

@include('user.template.partials.table')
</script>
     </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
@endsection

