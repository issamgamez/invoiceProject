@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <h2>Edit user</h2>
        <form action="{{route('users.update',$user->id)}}" method="post">
            @csrf 
            @method('PUT')

            <div class="form-group">
                <label>cin:</label>
                <b>{{ $user->cin }}</b>
            </div>

            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" name="nom" value="{{ $user->nom }}" required>
            </div>
            <div class="form-group">
                <label for="nom">Prenom:</label>
                <input type="text" class="form-control" name="nom" value="{{ $user->prenom }}" required>
            </div>
            <div class="form-group">
                <label for="nom">E-mail:</label>
                <input type="text" class="form-control" name="nom" value="{{ $user->email }}" required>
            </div>

            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>
@endsection