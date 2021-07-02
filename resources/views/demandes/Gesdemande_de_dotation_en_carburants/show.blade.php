@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">demande_de_dotation_en_carburants {{ $demande_de_dotation_en_carburants->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/GesDotation_en_carburants') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ route('RecuBonDotation.create') }}" class="btn btn-primary btn-sm" title="Ajouter Bon">
                            <i aria-hidden="true"></i> Valider
                        </a>
                        <a href="{{ url('/GesDotation_en_carburants/' . $demande_de_dotation_en_carburants->id . '/edit') }}" title="Edit "><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Refuser</button></a>

                       <!-- <form method="POST" action="{{ url('GesDotation_en_carburants' . '/' . $demande_de_dotation_en_carburants->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete demande_de_dotation_en_carburants" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>-->
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr> <th>ID</th>                            <td>{{ $demande_de_dotation_en_carburants->id }}</td></tr>
        <tr><th>Numero De dotation</th>             <td> {{ $demande_de_dotation_en_carburants->num_dot }} </td></tr>
        <tr><th>Division</th>                       <td> {{ $demande_de_dotation_en_carburants->division }} </td></tr>
        <tr><th>Direction</th>                      <td> {{ $demande_de_dotation_en_carburants->direction }} </td></tr>
        <tr><th>Référence</th>                      <td> {{ $demande_de_dotation_en_carburants->réf }} </td></tr>
        <tr><th>Lieu</th>                           <td> {{ $demande_de_dotation_en_carburants->lieu }} </td></tr>
        <tr><th>Date d'aujourd'hui</th>                           <td> {{ $demande_de_dotation_en_carburants->date_jour }} </td></tr>

        <tr><th>Date D'établissemnt De La Demande</th><td> {{ $demande_de_dotation_en_carburants->date_etab_dmnd }} </td></tr>
        <tr><th>Date Du Dernier Approvisionnement En Carburant</th><td> {{ $demande_de_dotation_en_carburants->date_dernier_app }} </td></tr>
        <tr><th>Kilométrage Parcouru  </th>          <td> {{ $demande_de_dotation_en_carburants->km_par }} </td></tr>
        <tr><th>Index</th>                           <td> {{ $demande_de_dotation_en_carburants->index }} </td></tr>
        <tr><th>Date</th>                            <td> {{ $demande_de_dotation_en_carburants->date }} </td></tr>
                
        <tr><th>Nombre De Bons </th>                 <td> {{ $demande_de_dotation_en_carburants->nbr_bon }} </td></tr>
                  
        <tr><th>Nom </th>                            <td> {{ $demande_de_dotation_en_carburants->nom }} </td></tr>
        <tr><th>Prénom </th>                         <td> {{ $demande_de_dotation_en_carburants->prenom }} </td></tr>
        <tr><th>Fonction</th>                        <td> {{ $demande_de_dotation_en_carburants->fonction }} </td></tr>
        <tr><th>Structure D'attache</th>             <td> {{ $demande_de_dotation_en_carburants->strctr_attache }} </td></tr>
        <tr><th>Type De Véhicule</th>                <td> {{ $demande_de_dotation_en_carburants->type_véhicule}} </td> <td></td></tr>
        <tr><th>Immatriculation</th>                 <td> {{ $demande_de_dotation_en_carburants->immatriculation }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
