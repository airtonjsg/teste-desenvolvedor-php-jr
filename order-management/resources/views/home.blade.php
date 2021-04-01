@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <H4>Ações de Manutenção</H4>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('admin.client.index') }}"> <i class="fa fa-search">&nbsp Clientes</i></a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
