@extends('layout.app')

@section('content')

<div class="container mt-5 invoice_content">
    <h2>Generate an Invoice</h2>
    
    
    <p><strong>Cin: </strong>{{ $user->cin }}</p>
    <p><strong>Last Name: </strong>{{ $user->prenom }}</p>
    <p><strong>First Name:</strong> {{ $user->nom }}</p>
    <p><strong>E-mail:</strong> {{ $user->email }}</p>

    <h3>Products</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Label</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalPrice = 0;
            @endphp
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->label }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->prix }}</td>
                </tr>
                @php
                    $totalPrice += $product->prix;
                @endphp
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2" class="text-right"><strong>Total:</strong></td>
                <td>{{ $totalPrice }}</td>
            </tr>
        </tfoot>
    </table>
</div>

<div id="print-content" style="display: none;">
    <p><strong>Cin: </strong>{{ $user->cin }}</p>
    <p><strong>Last Name: </strong>{{ $user->prenom }}</p>
    <p><strong>First Name:</strong> {{ $user->nom }}</p>
    <p><strong>E-mail:</strong> {{ $user->email }}</p>
    <h3>Products</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Label</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->label }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->prix }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2" class="text-right"><strong>Total:</strong></td>
                <td>{{ $totalPrice }} DH</td>
            </tr>
        </tfoot>
    </table>
</div>

<!-- Print Button -->
<button onclick="printDiv('print-content')" class="print_btn">Print Invoice</button>

@endsection

<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
