@extends('layouts.app')

@section('content')
    <a href="{{route('admin.client.create')}}" class="btn btn-lg btn-success">Criar Cliente</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>e-mail</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clents as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->cpf}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('client.edit', ['client' => $client->id])}}" class="mr-2"><i class="fa fa-edit">&nbsp;</i></a>
                            <form action="{{route('client.destroy', ['client' => $p->id])}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="mr-2"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$clients->links()}}
@endsection