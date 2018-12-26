@extends('adminlte::page')

@section('title', 'Employers - CREATE')

@section('content_header')
    <h1>Employers - Create</h1>
@stop

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Employer</h3>
  </div>
  <form action="/admin/employers" method="POST" enctype="multipart/form-data">
    @include('admin.employers._form')
  </form>
</div>
@stop