<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Lapangan - SolidSport</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        h1 {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        .error {
            color: #dc3545;
            margin-top: 5px;
            font-size: 14px;
        }

        button {
            margin-top: 20px;
            background: #198754;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .kembali {
            display: inline-block;
            margin-left: 10px;
            text-decoration: none;
            color: #333;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Tambah Lapangan</h1>

    <form action="{{ route('lapangan.store') }}" method="POST">

        @csrf

        <label>Nama Lapangan</label>

        <input type="text"
               name="nama_lapangan"
               value="{{ old('nama_lapangan') }}"
               placeholder="Masukkan nama lapangan">

        @error('nama_lapangan')
            <div class="error">{{ $message }}</div>
        @enderror


        <label>Jenis</label>

        <input type="text"
               name="jenis"
               value="{{ old('jenis') }}"
               placeholder="Contoh: Futsal">

        @error('jenis')
            <div class="error">{{ $message }}</div>
        @enderror


        <label>Harga</label>

        <input type="number"
               name="harga"
               value="{{ old('harga') }}"
               placeholder="Contoh: 100000">

        @error('harga')
            <div class="error">{{ $message }}</div>
        @enderror


        <label>Fasilitas</label>

        <textarea name="fasilitas"
                  placeholder="Contoh: Lampu, kamar mandi, parkir">{{ old('fasilitas') }}</textarea>

        @error('fasilitas')
            <div class="error">{{ $message }}</div>
        @enderror


        <label>Status</label>

        <select name="status">

            <option value="">-- Pilih Status --</option>

            <option value="tersedia"
                {{ old('status') == 'tersedia' ? 'selected' : '' }}>
                Tersedia
            </option>

            <option value="tidak tersedia"
                {{ old('status') == 'tidak tersedia' ? 'selected' : '' }}>
                Tidak Tersedia
            </option>

        </select>

        @error('status')
            <div class="error">{{ $message }}</div>
        @enderror


        <button type="submit">
            Simpan
        </button>

        <a href="{{ route('lapangan.index') }}" class="kembali">
            Kembali
        </a>

    </form>

</div>

</body>
</html>