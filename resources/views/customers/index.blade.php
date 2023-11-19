@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-white text-2xl font-semibold mb-4 text-center">Lista klientów</h1>

        <table class="w-full mt-4">
            <thead>
                <tr class="text-white">
                    <th class="py-2">ID</th>
                    <th class="py-2">Imię i nazwisko</th>
                    <th class="py-2">Email</th>
                    <th class="py-2">Adres</th>
                    <th class="py-2">Numer telefonu</th>
                    <th class="py-2">Akcje</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td class="py-2">{{ $customer->id }}</td>
                        <td class="py-2">{{ $customer->first_name . ' ' . $customer->last_name }}</td>
                        <td class="py-2">{{ $customer->email }}</td>
                        <td class="py-2">{{ $customer->address }}</td>
                        <td class="py-2">{{ $customer->phone_number }}</td>
                        <td class="py-2">
                            <a href="{{ route('products.show', $product->id) }}" class="text-green-500 hover:underline">Historia zamówień</a>
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