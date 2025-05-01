@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard</h2>

    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card text-bg-primary">
                <div class="card-body">
                    <h5>Total Products</h5>
                    <h3>{{ $totalProducts }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-bg-secondary">
                <div class="card-body">
                    <h5>Total Categories</h5>
                    <h3>{{ $totalCategories }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-bg-success">
                <div class="card-body">
                    <h5>Total Stock IN</h5>
                    <h3>{{ $totalIn }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-bg-danger">
                <div class="card-body">
                    <h5>Total Stock OUT</h5>
                    <h3>{{ $totalOut }}</h3>
                </div>
            </div>
        </div>
    </div>

    @if($lowStock->count())
    <div class="alert alert-warning">
        <strong>⚠️ Low Stock Products:</strong>
        <ul class="mb-0">
            @foreach($lowStock as $product)
                <li>{{ $product->name }} — {{ $product->quantity }} left</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@endsection
