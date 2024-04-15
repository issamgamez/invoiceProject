@extends('layout.app')

@section('content')

<div class="container mt-5">
    <h2>users Liste</h2>
    <a href="{{ route('users.create') }}" class="btn btn-secondary" style="margin:20px">Create a new user</a>
    
    @if($users->isEmpty()) 
        <p class="alert alert-info">No user found</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cin</th>
                    <th>Nom</th>
                    <th>Preom</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->cin }}</td>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user->prenom }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success">Edit</a>
                            <form method="post" action="{{ route('users.destroy', $user->id) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete {{ $user->label }}')">Delete</button>
                            </form>
                            <a href="{{ route('users.show', $user->id)}}"  class="btn btn-info">View Products</a>
                            <a href="{{ route('users.invoice', $user->id)}}"  class="btn btn-success">invoice</a>
                        </td>
                    
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

@endsection
