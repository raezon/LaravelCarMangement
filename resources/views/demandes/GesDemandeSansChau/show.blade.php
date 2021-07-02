@extends('layouts.app')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Demande Véhicule Sans Chauffeur</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Demande{{ $demandesanschau->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/DemandeSansChau') }}" title="Back"><button class="btn btn-warning btn-sm"><i aria-hidden="true"></i>Back</button></a>
                        <a href="{{ url('/DemandeSansChau/' . $demandesanschau->id . '/edit') }}" title="Edit Demande"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Valider</button></a>

                        <form method="POST" action="{{ url('DemandeSansChau' . '/' . $demandesanschau->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Demande" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Refuser</button>
                        </form>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th>ID</th><td>{{ $demandesanschau->id }}</td></tr>
                                    <tr><th>Numéro de référence </th><td> {{ $demandesanschau->num_référence }} </td></tr>
                                    <tr><th>Nom </th><td> {{ $demandesanschau->nom }} </td></tr>
                                    <tr><th>Prénom </th><td> {{ $demandesanschau->prenom }} </td></tr>
                                    <tr><th>Grade</th><td>{{ $demandesanschau->grade }}</td></tr>
                                    <tr><th>Direction D'attache</th><td>{{ $demandesanschau->direction_attache }}</td></tr>
                                    <tr><th>Lieu De Déplacement</th><td>{{ $demandesanschau->lieu_demplacement }}</td></tr>
                                    <tr><th>Date</th><td>{{ $demandesanschau->date }}</td></tr>
                                    <tr><th>Heure De Départ</th><td>{{ $demandesanschau->heure_depart }}</td></tr>
                                    <tr><th>Motif</th><td>{{ $demandesanschau->motif }}</td></tr>
                                    <tr><th>Immatriculation</th><td>{{ $demandesanschau->Immatriculation }}</td></tr>
                                    <tr><th>Type</th><td>{{ $demandesanschau->type }}</td></tr>
                                    <tr><th>Marque</th><td>{{ $demandesanschau->marque }}</td></tr>
                                    <tr><th>L'état De Véhicule</th><td>{{ $demandesanschau->état_Véhicule }}</td></tr>
                                    <tr><th>Date De Remise Du Véhicule</th><td>{{ $demandesanschau->date_remise_véhicule }}</td></tr>
                                    <tr><th>Service Demandeur</th><td>{{ $demandesanschau->service_demandeur }}</td></tr>
                                    <tr><th>Structure Dobatrice</th><td>{{ $demandesanschau->sructure_donatrice }}</td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
