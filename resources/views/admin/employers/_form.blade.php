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
      <label for="name">First name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" 
       value="@if(isset($employer)){{ $employer->first_name }}@endif">
    </div>
    <div class="form-group">
      <label for="name">Last name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" 
       value="@if(isset($employer)){{ $employer->last_name }}@endif">
    </div>
    <div class="form-group">
      <label for="company">Company</label>
      <select id="company" name="company_id" class="form-control">
        <option value="">Select</option>
        @foreach($companies as $company)
          <option value="{{ $company->id }}" @if(isset($employer) && $company->id == $employer->company_id) selected @endif>{{ $company->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" 
       value="@if(isset($employer)){{ $employer->email }}@endif">
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" 
       value="@if(isset($employer)){{ $employer->phone }}@endif">
    </div>
  </div>


  <div class="box-footer">
    <a href="/admin/employers" class="btn btn-default">Back</a>
    <button type="submit" class="btn btn-success">Submit</button>
  </div>
</div>