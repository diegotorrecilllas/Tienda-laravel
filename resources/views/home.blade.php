@extends('layout')

@section('content')



    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrado</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  Te has registrado correctamente
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
