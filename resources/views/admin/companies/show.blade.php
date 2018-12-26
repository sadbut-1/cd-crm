@extends('adminlte::page')

@section('title', 'Companies - SHOW')

@section('content_header')
    <h1>Companies - Show</h1>
@stop

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Company</h3>
  </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-2">
                <img src="{{ asset('storage/'.$company->logo) }}" class="img-fluid" style="max-height:150px;"/>
            </div>
            <div class="col-md-10">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" 
                            value="@if(isset($company)){{ $company->name }}@endif" disabled>
                        </div>
                        <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" 
                            value="@if(isset($company)){{ $company->email }}@endif" disabled>
                        </div>
                        <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" id="website" name="website" placeholder="Website" 
                            value="@if(isset($company)){{ $company->website }}@endif" disabled>
                        </div>
                    </div>
            </div>
            <br>
            <a href="/admin/companies" class="btn btn-success">Back</a>
            <a href="/admin/companies/{{ $company->id }}/edit" class="btn btn-default">Edit</a>
        </div>
    </div>
</div>
@stop