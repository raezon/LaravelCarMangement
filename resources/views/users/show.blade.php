@extends('layouts.app')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Consulter users</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">users {{ $users->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/users') }}" title="Back"><button class="btn btn-warning btn-sm"><i aria-hidden="true"></i>Back</button></a>
                        <a href="{{ url('/users/' . $users->id . '/edit') }}" title="Edit users"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('users' . '/' . $users->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete users" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th>ID</th><td>{{ $users->id }}</td></tr>
                                    <tr><th> Matricule </th><td> {{ $users->matricule }} </td></tr>
                                    <tr><th> Email </th><td> {{ $users->email }} </td></tr>
                                    <tr><th> Role </th><td> {{ $users->role_as }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
