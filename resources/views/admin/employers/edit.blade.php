@extends('adminlte::page')

@section('title', 'Employers - EDIT')

@section('content_header')
    <h1>Employers - Edit</h1>
@stop

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Employer</h3>
  </div>
  <form action="/admin/employers/{{ $employer->id }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @include('admin.employers._form')
  </form>
</div>
@stop