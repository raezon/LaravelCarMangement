@extends('layouts.app')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Demande Véhicule Avec Chauffeur</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Demande{{ $demandeavecchau->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/DemandeAvecChau') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/DemandeAvecChau/' . $demandeavecchau->id . '/edit') }}" title="Edit Demande"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('DemandeAvecChau' . '/' . $demandeavecchau->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Demande" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th>ID</th><td>{{ $demandeavecchau->id }}</td></tr>
                                    <tr><th>Numéro de référence </th><td> {{ $demandeavecchau->num_référence }} </td></tr>
                                    <tr><th>Nom </th><td> {{ $demandeavecchau->nom }} </td></tr>
                                    <tr><th>Prénom </th><td> {{ $demandeavecchau->prenom }} </td></tr>
                                    <tr><th>Grade</th><td>{{ $demandeavecchau->grade }}</td></tr>
                                    <tr><th>Lieu De Déplacement</th><td>{{ $demandeavecchau->lieu_deplacement }}</td></tr>
                                    <tr><th>Date  De Départ</th><td>{{ $demandeavecchau->date_depart }}</td></tr>
                                    <tr><th>Date</th><td>{{ $demandeavecchau->date }}</td></tr>
                                    <tr><th>Heure De Départ</th><td>{{ $demandeavecchau->heure_depart }}</td></tr>
                                    <tr><th>Motif</th><td>{{ $demandeavecchau->motif }}</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
