@extends('dashboard.layout')

@section('content')


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="row col-12">
      <div class="col-6">
        <h6 class="m-0 font-weight-bold text-primary btn-icon-split align-bottom">List of collaborators</h6>
      </div>
      <div class="col-6">
        <a href="{{ route('dashboard::users.create') }}" class="btn btn-success btn-icon-split float-right">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text">New Collaborator</span>
        </a>
      </div>
    </div>
  </div>
  <div class="card-body">
    <div>
      <table id="datatable-responsive" class="table table-striped  dt-responsive">
        <thead>
          <tr>
            <th>#</th>
            <th>Rut</th>
            <th>Name</th>
            <th>Email</th>
            <th>Web access</th>
            <th>Access to the app</th>
            <th>Acctions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($items as $index => $item)
              <tr>
                <td>{{$index + 1}}</td>
                <td>{{$item->rut}}</td>
                <td>{{$item->completeName()}}</td>
                <td>{{$item->email}}</td>

                <td>
                  <a  href="{{ route('dashboard::users.toggleAccess', ['user' => $item->id, 'type' => 'access_web', 'page' => $page]) }}" data-toggle="tooltip" data-placement="top" title="" class="status-icons d-flex justify-content-center" data-original-title="Web access">
                    <i class="fa @if( $item->access_web ) fa-toggle-on @else fa-toggle-off @endif fa-2x"></i>
                  </a>
                </td>

                <td>
                  <a  href="{{ route('dashboard::users.toggleAccess', ['user' => $item->id, 'type' => 'access_app', 'page' => $page]) }}" data-toggle="tooltip" data-placement="top" title="" class="status-icons d-flex justify-content-center" data-original-title="Access to the aplication">
                    <i class="fa @if( $item->access_app ) fa-toggle-on @else fa-toggle-off @endif fa-2x"></i>
                  </a>
                </td>

                <td class="d-flex justify-content-center">
                  <a href="{{ route('dashboard::users.edit', ['user' => $item->id, 'page' => $page]) }}" class="btn btn-info btn-circle btn-sm" title="Edit" style="margin:1px">
                    <span class="icon">
                      <i class="fas fa-pen-alt"></i>
                    </span>
                  </a>
                  <a href="{{ route('dashboard::users.edit', ['user' => $item->id, 'page' => $page]) }}" class="btn btn-danger btn-circle btn-sm" title="Delete" style="margin:1px">
                    <span class="icon">
                      <i class="fas fa-trash"></i>
                    </span>
                  </a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
      @if($items->total() > 0)
          <div class="row">
              <div class="col-sm-4 text-muted font-13">Showing records from {{$items->firstItem()}} to the {{$items->lastItem()}} of {{$items->total()}}.</div>
              <div class="col-sm-8 text-right">{{$items->appends(['search' => request('search')])->links()}}</div>
          </div>
      @endif
    </div>
  </div>
  <div class="card-header py-3">
    <div class="row col-12">
      <div class="col-6">
        <h6 class="m-0 font-weight-bold text-primary btn-icon-split align-bottom">Exportaciones en excel</h6>
      </div>
    </div>
    <div class="row col-12">
        <div class="col-4"></div>
        <div class="col-2">
          <a href="{{ route('dashboard::users.export', [ 'type' => 'mapping' ]) }}" target="_blank" class="btn btn-success btn-icon-split float-right">
            <span class="icon text-white-50">
              <i class="fas fa-download"></i>
            </span>
            <span class="text">Mapping <i class="fas fa-file-excel"></i></span>
          </a>
        </div>
        <div class="col-2">
          <a href="{{ route('dashboard::users.export', [ 'type' => 'query' ]) }}" target="_blank" class="btn btn-success btn-icon-split float-right">
            <span class="icon text-white-50">
              <i class="fas fa-download"></i>
            </span>
            <span class="text">Query <i class="fas fa-file-excel"></i></span>
          </a>
        </div>
        <div class="col-2">
          <a href="{{ route('dashboard::users.export', [ 'type' => 'view' ]) }}" target="_blank" class="btn btn-success btn-icon-split float-right">
            <span class="icon text-white-50">
              <i class="fas fa-download"></i>
            </span>
            <span class="text">View <i class="fas fa-file-excel"></i></span>
          </a>
        </div>
        <div class="col-2">
          <a href="{{ route('dashboard::users.export', [ 'type' => 'collection' ]) }}" target="_blank" class="btn btn-success btn-icon-split float-right">
            <span class="icon text-white-50">
              <i class="fas fa-download"></i>
            </span>
            <span class="text">Collection <i class="fas fa-file-excel"></i></span>
          </a>
        </div>
    </div>
  </div>
</div>

@stop
