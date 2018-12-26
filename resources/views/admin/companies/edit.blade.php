@extends('adminlte::page')

@section('title', 'Companies - EDIT')

@section('content_header')
    <h1>Companies - Edit</h1>
@stop

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Company</h3>
  </div>
  <form action="/admin/companies/{{ $company->id }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @include('admin.companies._form')
  </form>
</div>
@stop