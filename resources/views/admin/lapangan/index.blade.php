<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Lapangan - SolidSport</title>

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
            max-width: 1100px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        h1 {
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            background: #198754;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .btn:hover {
            background: #157347;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background: #eee;
        }

        .edit {
            background: #0d6efd;
            color: white;
            padding: 6px 10px;
            text-decoration: none;
            border-radius: 4px;
        }

        .hapus {
            background: #dc3545;
            color: white;
            padding: 6px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .success {
            background: #d1e7dd;
            color: #0f5132;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .aksi {
            display: flex;
            gap: 5px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Data Lapangan SolidSport</h1>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('lapangan.create') }}" class="btn">
        + Tambah Lapangan
    </a>

    <table>

        <tr>
            <th>No</th>
            <th>Nama Lapangan</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Fasilitas</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        @forelse($lapangan as $item)

        <tr>

            <td>
                {{ $loop->iteration }}
            </td>

            <td>
                {{ $item->nama_lapangan }}
            </td>

            <td>
                {{ $item->jenis }}
            </td>

            <td>
                Rp {{ number_format($item->harga, 0, ',', '.') }}
            </td>

            <td>
                {{ $item->fasilitas }}
            </td>

            <td>
                {{ $item->status }}
            </td>

            <td>

                <div class="aksi">

                    <a href="{{ route('lapangan.edit', $item->id_lapangan) }}"
                       class="edit">
                        Edit
                    </a>

                    <form action="{{ route('lapangan.destroy', $item->id_lapangan) }}"
                          method="POST"
                          onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="hapus">
                            Hapus
                        </button>

                    </form>

                </div>

            </td>

        </tr>

        @empty

        <tr>
            <td colspan="7" style="text-align:center;">
                Belum ada data lapangan.
            </td>
        </tr>

        @endforelse

    </table>

</div>

</body>
</html>