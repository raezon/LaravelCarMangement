@extends('layouts.app')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Consulter Employé</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <div class="row">
        <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Employé {{ $employes->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/employes') }}" title="Back"><button class="btn btn-warning btn-sm"><i aria-hidden="true"></i>Back</button></a>
                        <a href="{{ url('/employes/' . $employes->id . '/edit') }}" title="Edit Employee"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('employes' . '/' . $employes->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Employes" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $employes->id }}</td>
                                    </tr>
                                    <tr><th> Matricule </th><td> {{ $employes->matricule }} </td></tr>
                                    <tr><th> Nom </th><td> {{ $employes->nom }} </td></tr>
                                    <tr><th> Prénom </th><td> {{ $employes->prenom }} </td></tr>
                                    <tr><th> Mobile </th><td> {{ $employes->mobile }} </td></tr>
                                    <tr><th> Email </th><td> {{ $employes->email }} </td></tr>
                                    <tr><th> Fonction </th><td> {{ $employes->fonction }} </td></tr>
                                    <tr><th> Grade </th><td> {{ $employes->grade }} </td></tr>
                                    <tr><th> Structure </th><td> {{ $employes->structure }} </td></tr>
                                    <tr><th> Permis de Conduire </th><td> {{ $employes->pc }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
