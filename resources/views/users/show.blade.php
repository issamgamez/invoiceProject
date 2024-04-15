@extends('layout.app')

@section('content')

<div class="container mt-5">
    <h2>products Liste</h2>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Create a new product</a>
    @if($products->isEmpty())
        <p class="alert alert-info">No product found</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Label</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->label }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Desplay</a>
                            <form method="post" action="{{ route('products.destroy', $product->id) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-warning" type="submit" onclick="return confirm('Are you sure you want to delete {{ $product->label }}')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

@endsection
