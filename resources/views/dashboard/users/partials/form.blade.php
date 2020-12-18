
  <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
              <label>RUT / Passport / ID *</label>
              <input type="text" value="{{ ($model->rut) ?? old('rut') }}" class="form-control" name="rut" id='rut' placeholder="E.g: 12345678-9"/>
          </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
              <label>First Name *</label>
              <input type="text" value="{{ ($model->first_name) ?? old('first_name') }}" class="form-control" name="first_name" id='first_name' placeholder="First Name"/>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="form-group">
              <label>Second Name</label>
              <input type="text" value="{{ ($model->last_name) ?? old('last_name') }}" class="form-control" name="last_name" id='last_name' placeholder="Second name"/>
          </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="form-group">
              <label>Last name *</label>
              <input type="text" value="{{ ($model->father_surname) ?? old('father_surname') }}" class="form-control" name="father_surname" id='father_surname' placeholder="Last name"/>
          </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="form-group">
              <label>User name</label>
              <input type="text" value="{{ ($model->username) ?? old('username') }}" class="form-control" name="username" id='username' placeholder="Username"/>
          </div>
      </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label>Email address *</label>
            <input type="text" value="{{ ($model->email) ?? old('email') }}" class="form-control" name="email" id='email' placeholder="E.g: name@example.com" autocomplete="off"/>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label>Password *</label>
            <input type="password" class="form-control" name="password" id='password' placeholder=""/>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label>Confirm Password *</label>
            <input type="password" class="form-control" name="password_confirmation" id='password_confirmation' placeholder=""/>
        </div>
    </div>
  </div>

  <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
              <label class="control-label">Role :</label>
              <select name="role_id" id="role_id" class="form-control select2" >
                  <option value="">Select an option...</option>
                  @foreach($roles as $index => $name )
                  <option value="{{ $index }}" @if( $model->hasRole(str_slug($name))) selected="selected" @endif>{{ $name }}</option>
                  @endforeach
              </select>
          </div>
      </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
          <label> Status (Active / Inactive) : </label>
          <input type="checkbox" class="control-label js-switch" name="status" id='status' data-render='switchery'/>
        </div>
    </div>
  </div>
