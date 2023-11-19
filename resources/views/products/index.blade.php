@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-white text-2xl font-semibold mb-4 text-center">Product List</h2>
        <a href="{{ route('products.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Add Product</a>
        <table class="w-full mt-4">
            <thead>
                <tr class="text-white">
                    <th class="py-2">ID</th>
                    <th class="py-2">Name</th>
                    <th class="py-2">Description</th>
                    <th class="py-2">Price</th>
                    <th class="py-2">Stock Quantity</th>
                    <th class="py-2">Category</th>
                    <th class="py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="text-white text-center">
                        <td class="py-2">{{ $product->id }}</td>
                        <td class="py-2">{{ $product->name }}</td>
                        <td class="py-2">{{ $product->description }}</td>
                        <td class="py-2">{{ $product->price }}</td>
                        <td class="py-2">{{ $product->stock_quantity }}</td>
                        <td class="py-2">{{ $product->category ? $product->category->name : 'brak' }}</td>
                        <td class="py-2">
                            <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500 hover:underline mr-2">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                            <a href="{{ route('products.show', $product->id) }}" class="text-green-500 hover:underline">Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection