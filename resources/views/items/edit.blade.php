@extends('layout')

@section('content')
    <h1>Edit Barang: {{ $item->name }}</h1>

    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <p>
            <label>Nama Barang:</label><br>
            <input type="text" name="name" value="{{ old('name', $item->name) }}">
            @error('name') <br><small>{{ $message }}</small> @enderror
        </p>
        <p>
            <label>Jumlah:</label><br>
            <input type="number" name="quantity" value="{{ old('quantity', $item->quantity) }}">
            @error('quantity') <br><small>{{ $message }}</small> @enderror
        </p>
        <p>
            <label>Catatan:</label><br>
            <input type="text" name="notes" value="{{ old('notes', $item->notes) }}">
        </p>
        <button type="submit" class="button">Update</button>
    </form>
@endsection
