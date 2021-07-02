@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Liste des Demandes</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="card card-solid">
        <div class="card-body" style="min-height: 500px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                        <form method="GET" action="{{ url('/GesDemandeAvecChau') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="" name="search" placeholder="Rechercher..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table" id="tableau">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Numéro De Référence</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Grade</th>
                                        <th style="width: 100px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($demandeavecchau as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->num_référence }}</td>
                                        <td>{{ $item->nom }}</td>
                                        <td>{{ $item->prenom }}</td>
                                        <td>{{ $item->grade }}</td>
                                        <td style="width: 100px">
                                        <a href="{{ route('GesDemandeAvecChau.show' , $item->id) }}" title="View Demande"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                        
                                          <!--  <a href="{{ route('GesDemandeAvecChau.edit' , $item->id) }}" title="Edit Demande"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></button></a>-->

                                          <!--  <form method="POST" action="{{ route('GesDemandeAvecChau.destroy' , $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                @csrf
                                                @method('DELETE')
                      
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete demande" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form> -->
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $demandeavecchau->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    </section>
@endsection
