@extends('dashboard.layout')

@section('content')
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <div class="row col-12">
          <div class="col-6">
            <h6 class="m-0 font-weight-bold text-primary btn-icon-split align-bottom">Role Manager / Editor </h6>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form method="POST" action="{{route('dashboard::permissions.update', ['permission' => $model->id])}}" class="form-horizontal form-label-left" id='formEditPermissions'>
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            @include('dashboard.permissions.partials.form')
            @include('dashboard.common.form_buttons')
        </form>
      </div>
    </div>

    <!-- /page content -->
@stop

@section('js-validation')
  {!! JsValidator::formRequest(\App\Http\Requests\PermissionRequest::class, '#formEditPermissions') !!}
@stop
