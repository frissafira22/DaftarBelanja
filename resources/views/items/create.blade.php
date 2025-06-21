@extends('layout')

@section('content')
    <h1>Tambah Barang Belanja</h1>

    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <p>
            <label>Nama Barang:</label><br>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name') <br><small>{{ $message }}</small> @enderror
        </p>
        <p>
            <label>Jumlah:</label><br>
            <input type="number" name="quantity" value="{{ old('quantity') }}">
            @error('quantity') <br><small>{{ $message }}</small> @enderror
        </p>
        <p>
            <label>Catatan (opsional):</label><br>
            <input type="text" name="notes" value="{{ old('notes') }}">
        </p>
        <button type="submit" class="button">Tambah</button>
    </form>
@endsection
