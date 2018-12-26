@extends('adminlte::page')

@section('title', 'Companies')

@section('content_header')
    <h1>Companies</h1>
@stop

@section('content')
    <a href="{{ url('admin/companies/create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> NEW</a>
    <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th>Logo</th>
                  <th>Name</th>
                  <th>E-mail</th>
                  <th>Website</th>
                  <th></th>
                </tr>
                @foreach($companies as $company)
                    <tr>
                        <td><img src="{{ asset('storage/'.$company->logo) }}" class="img-fluid" style="max-height:45px;"/></td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->website }}</td>
                        <td style="display: flex;" class="pull-right">
                            <a class="btn btn-small btn-info" href="/admin/companies/{{ $company->id }}"><i class="fa fa-eye"></i> </a>&nbsp;&nbsp;
                            <a class="btn btn-small btn-default" href="/admin/companies/{{ $company->id }}/edit"><i class="fa fa-edit"></i> </a>&nbsp;&nbsp;
                            <form action="/admin/companies/{{ $company->id }}" method="POST">
                                @method('DELETE') @csrf
                                <button type="submit" class="btn btn-danger btn-small"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
              </table>
              <div style="margin-left:45%">{{ $companies->links() }}</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
@stop
