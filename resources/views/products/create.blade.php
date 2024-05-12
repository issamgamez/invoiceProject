@extends('layout.app')

@section('content')

    <div class="container mt-5">
        <h2>craete a new product</h2>
        <form action="{{route('products.store')}}" method="post">
            @csrf 
            <div class="form-group">
                <label for="cin">Lable:</label>
                <input type="text" class="form-control" name="label" required>
            </div>

            <div class="form-group">
                <label for="nom">Description:</label>
                <input type="text" class="form-control" name="description" required>
            </div>
            <div class="form-group">
                <label for="nom">User id:</label>
                <input type="number" class="form-control" name="user_id" required>
            </div>
            <div class="form-group">
                <label for="nom">Prix:</label>
                <input type="number" class="form-control" name="prix" required>
            </div>
            <button class="btn btn-success" type='submit'>Create</button>

        </form>
    </div>
@endsection()