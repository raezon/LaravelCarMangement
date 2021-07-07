@extends('layouts.app')

@section('content')
   
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">attribuer vehicule/h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">

                        <a href="{{ url('/AttribuerVhcl') }}" title="Back">
                        <button class="btn btn-warning btn-sm">
                        <i class="fa fa-arrow-left" aria-hidden="true">
                        </i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/AttribuerVhcl') }}" accept-charset="UTF-8" 
                        class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('AttribuerVhcl.form', ['formMode' => 'create'])

                        </form>
                    </div>
                 </div>
            </div>
    </div>
@endsection