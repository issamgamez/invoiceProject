@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <h2>categorie details</h2>
        <p><strong>ID:</strong> {{ $product->id }}</p>
        <p><strong>Label:</strong> {{ $product->label }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>
        <p><strong>created at:</strong> {{ $product->created_at}}</p>
        <p><strong>updated at:</strong> {{ $product->updated_at}}</p>
        <a class="btn btn-primary" href="{{route('users.index')}}">Back To List</a>
    </div>
@endsection