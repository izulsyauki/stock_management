@extends('layouts.admin')

@section('title', 'Purchases')
@section('page_title', 'Purchases')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm py-3 mb-4">
        <div class="container-fluid">
            <h4>Purchases</h4>
        </div>
    </nav>
    <div class="container">
        @if (!$productsExist || !$suppliersExist)
            <div class="alert alert-warning">
                You must add at least one product and one supplier before adding a new purchase.
            </div>
        @endif
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('purchases.create') }}" class="btn btn-primary"
                @if (!$productsExist || !$suppliersExist) hidden @endif>Add New Purchase</a>
            <div class="d-flex">
                <form action="{{ route('purchases.index') }}" method="GET" class="d-flex">
                    <input type="text" name="search" class="form-control me-2" placeholder="Search purchases"
                        value="{{ $search ?? '' }}">
                    <button type="submit" class="btn btn-outline-dark">Search</button>
                </form>
                <a href="{{ route('purchases.index') }}" class="btn btn-dark ms-2">Show All</a>
            </div>
        </div>
        @if ($purchases->isEmpty())
            <div class="w-25 mx-auto">
                <img src="{{ asset('images/no-data-image.png') }}" class="img-fluid" alt="No data found">
                <div class="text-center">
                    <h4>No data found</h4>
                    <p>Sorry we can't find any data</p>
                </div>
            </div>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Supplier</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchases as $purchase)
                        <tr>
                            <td>{{ $purchase->id }}</td>
                            <td>{{ $purchase->supplier->name }}</td>
                            <td>{{ $purchase->product->name }}</td>
                            <td>{{ $purchase->quantity }}</td>
                            <td>Rp. {{ $purchase->total_price }}</td>
                            <td>
                                <form action="{{ route('purchases.destroy', $purchase->id) }}" method="POST"
                                    style="display:inline-block;"
                                    onsubmit="return confirm('Are you sure you want to delete this purchased product?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-3">
                {{ $purchases->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
@endsection
