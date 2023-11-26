@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-white text-2xl font-semibold mb-4 text-center">Edit Product</h2>
        <form action="{{ route('products.update', $product->id) }}" method="POST" class="max-w-md mx-auto">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-white text-sm font-medium mb-2">Name</label>
                <input type="text" class="border w-full p-2" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-white text-sm font-medium mb-2">Description</label>
                <textarea class="border w-full p-2" id="description" name="description" required>{{ $product->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-white text-sm font-medium mb-2">Price</label>
                <input type="number" step="0.01" class="border w-full p-2" id="price" name="price" value="{{ $product->price }}" required>
            </div>
            <div class="mb-4">
                <label for="stock_quantity" class="block text-white text-sm font-medium mb-2">Quantity</label>
                <input type="number" step="1" class="border w-full p-2" id="stock_quantity" name="stock_quantity" value="{{ $product->stock_quantity}}" required>
            </div>
            <div class="mb-4">
                <label for="categories" class="block text-white text-sm font-medium mb-2">Categories</label>
                <select class="border w-full p-2" id="category_id" name="category_id">
                    <option value="" selected disabled>Wybierz kategorię</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if($category->id == $product->category_id) selected @endif>
                    {{ $category->name }}
                </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded">Update Product</button>
           
            
        </form>
    </div>
@endsection