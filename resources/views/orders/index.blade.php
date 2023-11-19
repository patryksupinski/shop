@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-white text-2xl font-semibold mb-4 text-center">Lista Zamówień</h1>

        <table class="w-full mt-4">
            <thead>
                <tr class="text-white">
                    <th class="py-2">ID</th>
                    <th class="py-2">Klient</th>
                    <th class="py-2">Data zamówienia</th>
                    <th class="py-2">Kwota</th>
                    <th class="py-2">Akcje</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td class="py-2">{{ $order->id }}</td>
                        <td class="py-2">{{ $order->customer_id }}</td>
                        <td class="py-2">{{ $order->order_date }}</td>
                        <td class="py-2">{{ $order->order_amount }}</td>
                        <td class="py-2">
                            <a href="{{ route('products.show', $product->id) }}" class="text-green-500 hover:underline">Szczegóły</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure?')">Usuń</button>
                            </form>                           
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection