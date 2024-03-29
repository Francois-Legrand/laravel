@extends('layout')

@section('content')
<h1>{{ $client->name }}</h1>
<a href="/clients/{{ $client->id }}/edit" class="btn btn-secondary my-3">Editer</a>

<form action="/clients/{{ $client->id }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-warning">Supprimer</button>
</form>

<hr>
<p><strong>Email :</strong> {{ $client->email }}</p>
<p><strong>Entreprise :</strong> {{ $client->entreprise->name }}</p>
@endsection