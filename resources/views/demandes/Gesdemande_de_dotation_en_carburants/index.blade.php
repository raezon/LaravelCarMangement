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
                    <div class="card-header">Demandes</div>
                    <div class="card-body">
                        
                        <form method="GET" action="{{ url('/GesDotation_en_carburants') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>Numéro De Bon </th>
                                        <th>Division</th>
                                        <th>Direction</th>
                                        <th>Référence</th>
                                        <th>Lieu</th>
                                        
                                        <th style="width: 100px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($demande_de_dotation_en_carburants as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->num_dot }}</td>
                                        <td>{{ $item->division }}</td>
                                        <td>{{ $item->direction }}</td>
                                        <td>{{ $item->réf }}</td>
                                        <td>{{ $item->lieu }}</td>
                                       

                                        <td style="width: 100px">
                                  <!-- show -->  <a href="{{ url('/GesDotation_en_carburants/' . $item->id) }}" title="View demande_de_dotation_en_carburants"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                     
                                         </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $demande_de_dotation_en_carburants->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    </section>
@endsection
