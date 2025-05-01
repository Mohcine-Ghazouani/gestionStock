<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Stock History</h2>
    <a href="{{ route('stock.create') }}" class="btn btn-primary mb-3">Add Movement</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Date</th><th>Product</th><th>Type</th><th>Quantity</th><th>Note</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movements as $move)
            <tr>
                <td>{{ $move->created_at->format('Y-m-d H:i') }}</td>
                <td>{{ $move->product->name }}</td>
                <td><span class="badge bg-{{ $move->type === 'in' ? 'success' : 'danger' }}">{{ strtoupper($move->type) }}</span></td>
                <td>{{ $move->quantity }}</td>
                <td>{{ $move->note }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

</body>
</html>