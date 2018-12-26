@extends('adminlte::page')

@section('title', 'Companies - CREATE')

@section('content_header')
    <h1>Companies - Create</h1>
@stop

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Company</h3>
  </div>
  <form action="/admin/companies" method="POST" enctype="multipart/form-data">
    @include('admin.companies._form')
  </form>
</div>
@stop