@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <h2>Edit product</h2>
        <form action="{{route('products.update',$product->id)}}" method="post">
            @csrf 
            @method('PUT')

            <div class="form-group">
                <label for="cin">Label:</label>
                <b>{{ $product->label }}</b>
            </div>

            <div class="form-group">
                <label for="nom">Description:</label>
                <input type="text" class="form-control" name="description" value="{{ $product->description }}" required>
            </div>

            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>
@endsection