<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Pelanggan</title>
</head>

<body>

    <h1>Dashboard Pelanggan</h1>

    <p>
        Selamat datang,
        {{ auth()->user()->nama }}
    </p>

    <p>
        Role:
        {{ auth()->user()->role }}
    </p>

    <a href="{{ route('lapangan.index') }}">
        Lihat Lapangan
    </a>

    <br><br>

    <a href="#">
        Booking Lapangan
    </a>

    <br><br>

    <form action="{{ route('logout') }}" method="POST">
        @csrf

        <button type="submit">
            Logout
        </button>
    </form>

</body>

</html>