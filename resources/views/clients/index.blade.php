@extends('layout')

@section('content')

<h1>Mes cliens</h1>
<a href="/clients/create" class="btn btn-primary my-3">Nouveau client</a>
<ul>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Entreprise</th>
            </tr>
        </thead>
        @foreach ($clients as $client)
        <tbody>
            <tr>
                <th scope="row">{{ $client->id }}</th>
            <td><a href="/clients/{{ $client->id }}">{{ $client->name }}</a></td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->status }}</td>
                <td>{{ $client->entreprise->name }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>

</ul>

@endsection