<!DOCTYPE html>
<html>
<head>
    <title>Daftar Belanja</title>
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 20px;
        }

        /* Header biru */
        .header-title {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 28px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        /* Tombol */
        .button {
            background-color: #007bff;
            color: white;
            padding: 10px 16px;
            text-decoration: none;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            display: inline-block;
            margin-bottom: 10px;
            text-align: left;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .button.danger {
            background-color: #dc3545;
        }

        .button.danger:hover {
            background-color: #c82333;
        }

        /* Tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            margin-top: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f1f1f1;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        form {
            display: inline;
        }

        p {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- Judul utama -->
    <div class="header-title">Sistem Daftar Barang Belanja</div>

    <!-- Layout dua kolom -->
    <div style="display: flex; gap: 20px;">
        <!-- Sidebar -->
        <div style="width: 200px;">
            <a href="{{ route('items.index') }}" class="button" style="display: block;">
                <i class="fas fa-list" style="margin-right: 5px;"></i> Daftar Belanja
            </a>
            <a href="{{ route('items.create') }}" class="button" style="display: block;">
                <i class="fas fa-plus-circle" style="margin-right: 5px;"></i> Tambah Barang
            </a>
        </div>

        <!-- Konten utama -->
        <div style="flex: 1;">
            @yield('content')
        </div>
    </div>
</body>
</html>
