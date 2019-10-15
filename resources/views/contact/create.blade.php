@extends('layout')

@section('content')

<h1>contactez-nous</h1>

<form action="/contact" method="POST">

    @csrf
    <div class="form-group">
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
            placeholder="Exemple: Marie" value="{{ old('name')}}">
        @error('name')
        <div class="invalid-feedback">
            {{ $errors->first('name') }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
            placeholder="Exemple: Marie@gmail.com" value="{{ old('email')}}">
        @error('email')
        <div class="invalid-feedback">
            {{ $errors->first('email') }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <textarea name="message" placeholder="Entrez votre message" cols="30" rows="10" class="form-control @error('message') is-invalid
                @enderror">{{ old('message') }}</textarea>
        @error('message')
        <div class="invalid-feedback">
            {{ $errors->first('message')}}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>

</form>
@endsection