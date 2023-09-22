@extends('layouts.app') 
@section('content')
    <h1>Product List</h1>
    <!-- Display the list of products here -->
    @foreach ($products as $product)
        <div>
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p>Price: ${{ $product->price }}</p>
        </div>
    @endforeach
@endsection
