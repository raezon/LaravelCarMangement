@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Liste Des Véhicules</h1>
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
                        <a href="{{ url('/voitures/create') }}" class="btn btn-success btn-sm" title="Add New Employe">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter Véhicule
                        </a>

                        <form method="GET" action="{{ url('/voitures') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <tr><th>ID</th>
                                        <th>N° Série</th>
                                        <th>Ancienne Immatriculation</th>
                                        <th>Nouvelle Immatriculation</th>
                                        <th>Numero D'assurance</th>
                                        <th>Energie</th>
                                        <th>Type</th>
                                        
                                        <th style="width: 100px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($voitures as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->N_serie }}</td>
                                        <td>{{ $item->ancienne_immat }}</td>
                                        <td>{{ $item->nouvelle_immat }}</td>
                                        <td>{{ $item->numero_assurance }}</td>
                                        <td>{{ $item->Energie }}</td>
                                        <td>{{ $item->type }}</td>

                                        <td style="width: 100px">
                                       <a href="{{ url('/voitures/' . $item->id) }}" title="View voitures"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                        
                                            <a href="{{ route('voitures.edit' , $item->id) }}" title="Edit Voiture "><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></button></a>

                                            <form method="POST" action="{{ route('voitures.destroy' , $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $voitures->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    </section>
@endsection
