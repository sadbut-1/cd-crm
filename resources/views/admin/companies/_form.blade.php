<div class="box-body">
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name" 
       value="@if(isset($company)){{ $company->name }}@endif">
    </div>
    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" 
       value="@if(isset($company)){{ $company->email }}@endif">
    </div>
    <div class="form-group">
      <label for="logo">Logo</label>
      <input type="file" id="logo" name="logo">

      <p class="help-block">Minimum 100×100.</p>
    </div>
    <div class="form-group">
      <label for="website">Website</label>
      <input type="text" class="form-control" id="website" name="website" placeholder="Website" 
       value="@if(isset($company)){{ $company->website }}@endif">
    </div>
  </div>


  <div class="box-footer">
      <a href="/admin/companies" class="btn btn-default">Back</a>
      <button type="submit" class="btn btn-success">Submit</button>
  </div>
</div>