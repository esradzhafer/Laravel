@extends('layouts.app')  
@section('content')
    <h1>Add New Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf  
        
       
        
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        
        
        <div class="form-group">
            <button type="submit">Add Product</button>
        </div>
    </form>
@endsection
