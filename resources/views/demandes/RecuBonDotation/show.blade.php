@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">RecuBonDotation {{ $RecuBonDotation->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/RecuBonDotation') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/RecuBonDotation/' . $RecuBonDotation->id . '/edit') }}" title="Edit Reçu_de_bon"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('RecuBonDotation' . '/' . $RecuBonDotation->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete RecuBonDotation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th>ID</th><td>{{ $RecuBonDotation->id }} </td></tr>
                                    <tr><th> Référence </th><td> {{ $RecuBonDotation->réf }} </td></tr>
                                    <tr><th> lieu </th><td> {{ $RecuBonDotation->lieu }} </td></tr>
                                    <tr><th> Date d'aujourd'hui </th><td> {{ $RecuBonDotation->date_jour }} </td></tr>
                                    <tr><th> Date Remis </th><td> {{ $RecuBonDotation->remis_le }} </td></tr>
                                    <tr><th> Dotation N° </th><td> {{ $RecuBonDotation->num_dot }} </td></tr>
                                    <tr><th> Du </th><td> {{ $RecuBonDotation->du }} </td></tr>
                                    <tr><th> Nombre De Bon</th><td> {{ $RecuBonDotation->nbr_bon }} </td></tr>
                                    <tr><th> Debut De N° série Du Bon </th><td> {{ $RecuBonDotation->debut_ser }} </td></tr>
                                    <tr><th> Fin De N° série Du Bon </th><td> {{ $RecuBonDotation->fin_ser }} </td></tr>
                                    <tr><th> Nom </th><td> {{ $RecuBonDotation->nom }} </td></tr>
                                    <tr><th> Prénom </th><td> {{ $RecuBonDotation->prenom }} </td></tr>
                                    <tr><th> Fonction </th><td> {{ $RecuBonDotation->fonction }} </td></tr>
                                    <tr><th> Structure D'attache </th><td> {{ $RecuBonDotation->structure_attache }} </td></tr>
                                    <tr><th> Immatriculation </th><td> {{ $RecuBonDotation->immatriculation }} </td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
