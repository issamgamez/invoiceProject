@extends('layout.app')

@section('content')

    <div class="container mt-5">
        <h2>craete a new user</h2>
        <form action="{{route('users.store')}}" method="post">
            @csrf 
            <div class="form-group">
                <label for="cin">Cin:</label>
                <input type="text" class="form-control" name="cin" required>
            </div>

            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" name="nom" required>
            </div>
            <div class="form-group">
                <label for="nom">Prenom:</label>
                <input type="text" class="form-control" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="nom">Email:</label>
                <input type="text" class="form-control" name="email" required>
            </div>
            <button class="btn btn-success" type='submit'>Create</button>

        </form>
    </div>


@endsection()