<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
</head>

<body>

    <h1>Dashboard Admin</h1>

    <p>
        Selamat datang,
        {{ auth()->user()->nama }}
    </p>

    <p>
        Role:
        {{ auth()->user()->role }}
    </p>

    <a href="{{ route('admin.lapangan.index') }}">
        Kelola Lapangan
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