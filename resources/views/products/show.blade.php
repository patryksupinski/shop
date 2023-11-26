@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-white text-2xl font-semibold mb-4 text-center">{{ $product->name }}</h2>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <p class="text-gray-600 mb-4"><strong>Description:</strong> {{ $product->description }}</p>
            <p class="text-gray-600 mb-4"><strong>Price:</strong> {{ $product->price }}</p>
            <p class="text-gray-600 mb-4"><strong>Stock Quantity:</strong> {{ $product->stock_quantity }}</p>
            <p class="text-gray-600 mb-4"><strong>Category:</strong> {{ $product->category ? $product->category->name : 'N/A' }}</p>
            <div class="flex items-center justify-center">
                <a href="{{ route('products.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded">Back to List</a>
            </div>
        </div>
    </div>
@endsection
W powyższym ko