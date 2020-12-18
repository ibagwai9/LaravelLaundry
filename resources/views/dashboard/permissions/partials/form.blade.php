

  <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
              <label>Name *</label>
              <input type="text" value="{{ ($model->display_name) ?? old('display_name') }}" class="form-control" name="display_name" id='display_name' placeholder="Name"/>
          </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
              <label>Permission Code</label>
              <input type="text" value="{{ ($model->name) ?? old('name') }}" class="form-control" name="name" id='name' placeholder="Permission Code" readonly/>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
              <label>Description</label>
              <input type="text" value="{{ ($model->description) ?? old('description') }}" class="form-control" name="description" id='description' placeholder="Description"/>
          </div>
      </div>
  </div>




<input type="hidden" value="{{$page}}" name="page" />
