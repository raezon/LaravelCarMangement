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
                    <div class="card-header">Voiture {{ $AttribuerVhcl->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/AttribuerVhcl') }}" title="Back"><button class="btn btn-warning btn-sm"><i  aria-hidden="true"></i>Back</button></a>
                        <a href="{{ url('/AttribuerVhcl/' . $AttribuerVhcl->id . '/edit') }}" title="Edit Employee"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('AttribuerVhcl' . '/' . $AttribuerVhcl->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete AttribuerVhcl" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th>ID</th><td>{{ $AttribuerVhcl->id }}</td></tr>
                                    <tr><th> N° Série </th><td> {{ $AttribuerVhcl->N_serie }} </td></tr>
                                    <tr><th> Ancienne Immatriculation </th><td> {{ $AttribuerVhcl->ancienne_immat }} </td></tr> 
                                    <tr><th> Nouvelle Immatriculation </th><td> {{ $AttribuerVhcl->nouvelle_immat }} </td></tr>
                                    <tr><th> Numero D'assurance </th><td> {{ $AttribuerVhcl->numero_assurance }} </td></tr>
                                    <tr><th> Energie </th><td> {{ $AttribuerVhcl->Energie }} </td></tr>
                                    <tr><th> Type </th><td> {{ $AttribuerVhcl->type }} </td></tr>
                                    <tr><th> Marque </th><td> {{ $AttribuerVhcl->marque }} </td></tr>
                                    <tr><th>Modèle</th><td>{{ $AttribuerVhcl->modele }}</td></tr>
                                    <tr><th>Couleur</th><td>{{ $AttribuerVhcl->couleur }}</td></tr>
                                    <tr><th>Genre</th><td>{{ $AttribuerVhcl->Genre }}</td></tr>
                                    <tr><th>Nombre De Place</th><td>{{ $AttribuerVhcl->nbr_plc }}</td></tr>
                                    <tr><th>Nombre De chevaux</th><td>{{ $AttribuerVhcl->nbr_chv }}</td></tr>
                                    <tr><th>Tonnage</th><td>{{ $AttribuerVhcl->tonnage }}</td></tr>
                                    <tr><th>DATE DE MISE EN CIRCULATION</th><td>{{ $AttribuerVhcl->dmc }}</td></tr>
                                    <tr><th>L'état De Véhicule</th><td>{{ $AttribuerVhcl->etat }}</td></tr>
                                    <tr><th>Qualité</th><td>{{ $AttribuerVhcl->qualité }}</td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
