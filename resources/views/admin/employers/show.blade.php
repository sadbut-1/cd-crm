@extends('adminlte::page')

@section('title', 'Employers - SHOW')

@section('content_header')
    <h1>Employers - Show</h1>
@stop

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Employer</h3>
  </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">First name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" 
                        value="@if(isset($employer)){{ $employer->first_name }}@endif" disabled>
                </div>
                <div class="form-group">
                    <label for="name">Last name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" 
                        value="@if(isset($employer)){{ $employer->last_name }}@endif" disabled>
                </div>
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="Last name" 
                    value="@if(isset($employer)){{ $employer->company->name }}@endif" disabled>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" 
                        value="@if(isset($employer)){{ $employer->email }}@endif" disabled>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" 
                        value="@if(isset($employer)){{ $employer->phone }}@endif" disabled>
                </div>
                <br>
                <a href="/admin/employers" class="btn btn-success">Back</a>
                <a href="/admin/employers/{{ $employer->id }}/edit" class="btn btn-default">Edit</a>
            </div>
        </div>
    </div>
</div>
@stop