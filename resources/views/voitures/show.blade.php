@extends('layouts.app')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Consulter Véhicule</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Voiture {{ $Voitures->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/voitures') }}" title="Back"><button class="btn btn-warning btn-sm"><i  aria-hidden="true"></i>Back</button></a>
                        <a href="{{ url('/voitures/' . $Voitures->id . '/edit') }}" title="Edit Employee"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('voitures' . '/' . $Voitures->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete voitures" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th>ID</th><td>{{ $Voitures->id }}</td></tr>
                                    <tr><th> Immatriculatio </th><td> {{ $Voitures->immatriculation }} </td></tr>
                                    <tr><th> Type </th><td> {{ $Voitures->type }} </td></tr>
                                    <tr><th> Marque </th><td> {{ $Voitures->marque }} </td></tr>
                                    <tr><th> Numero D'assurance </th><td> {{ $Voitures->numero_assurance }} </td></tr>
                                    <tr><th> Modèle </th><td> {{ $Voitures->modele }} </td></tr>
                                    <tr><th> Couleur </th><td> {{ $Voitures->couleur }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
