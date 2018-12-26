@extends('adminlte::page')

@section('title', 'Employers')

@section('content_header')
    <h1>Employers</h1>
@stop

@section('content')
    <a href="{{ url('admin/employers/create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> NEW</a>
    <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th>Id</th>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Company</th>
                  <th>E-mail</th>
                  <th>Phone</th>
                  <th></th>
                </tr>
                @foreach($employers as $employer)
                    <tr>
                        <td>{{ $employer->id }}</td>
                        <td>{{ $employer->first_name }}</td>
                        <td>{{ $employer->last_name }}</td>
                        <td>{{ $employer->company->name }}</td>
                        <td>{{ $employer->email }}</td>
                        <td>{{ $employer->phone }}</td>
                        <td style="display: flex;" class="pull-right">
                            <a class="btn btn-small btn-info" href="/admin/employers/{{ $employer->id }}"><i class="fa fa-eye"></i> </a>&nbsp;&nbsp;
                            <a class="btn btn-small btn-default" href="/admin/employers/{{ $employer->id }}/edit"><i class="fa fa-edit"></i> </a>&nbsp;&nbsp;
                            <form action="/admin/employers/{{ $employer->id }}" method="POST">
                                @method('DELETE') @csrf
                                <button type="submit" class="btn btn-danger btn-small"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
              </table>
              <div style="margin-left:45%">{{ $employers->links() }}</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
@stop
