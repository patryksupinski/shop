@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-white text-2xl font-semibold mb-4 text-center">Add Product</h2>
        <form action="{{ route('products.store') }}" method="POST" class="max-w-md mx-auto">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-white text-sm font-medium mb-2">Name</label>
                <input type="text" class="border w-full p-2" id="name" name="name" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-white text-sm font-medium mb-2">Description</label>
                <textarea class="border w-full p-2" id="description" name="description" required></textarea>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-white text-sm font-medium mb-2">Price</label>
                <input type="number" step="0.01" class="border w-full p-2" id="price" name="price" required>
            </div>
            <div class="mb-4">
                <label for="stock_quantity" class="block text-white text-sm font-medium mb-2">Quantity</label>
                <input type="number" step="1" class="border w-full p-2" id="stock_quantity" name="stock_quantity" required>
            </div>
           <button type="submit" class="w-full bg-green-500 text-white px-4 py-2 rounded">Add Product</button>
        </form>
    </div>
@endsection