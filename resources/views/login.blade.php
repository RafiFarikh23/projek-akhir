<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - SolidSport</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            background: linear-gradient(
                135deg,
                #198754,
                #0d6efd
            );
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }

        .login-card {
            background: white;
            padding: 40px;

            border-radius: 15px;

            box-shadow:
                0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .logo {
            text-align: center;
            margin-bottom: 10px;

            font-size: 32px;
            font-weight: bold;

            color: #198754;
        }

        .logo span {
            color: #222;
        }

        .subtitle {
            text-align: center;

            color: #777;

            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;

            margin-bottom: 8px;

            font-weight: bold;
            color: #333;
        }

        input {
            width: 100%;

            padding: 13px 14px;

            border: 1px solid #ddd;

            border-radius: 7px;

            font-size: 15px;

            outline: none;

            transition: 0.3s;
        }

        input:focus {
            border-color: #198754;

            box-shadow:
                0 0 0 3px rgba(25, 135, 84, 0.1);
        }

        .error {
            background: #f8d7da;

            color: #842029;

            padding: 12px;

            border-radius: 7px;

            margin-bottom: 20px;

            font-size: 14px;
        }

        .login-btn {
            width: 100%;

            padding: 13px;

            border: none;

            border-radius: 7px;

            background: #198754;

            color: white;

            font-size: 16px;

            font-weight: bold;

            cursor: pointer;

            transition: 0.3s;
        }

        .login-btn:hover {
            background: #157347;
        }

        .back {
            display: block;

            text-align: center;

            margin-top: 25px;

            color: #198754;

            text-decoration: none;

            font-size: 14px;
        }

        .back:hover {
            text-decoration: underline;
        }

        .info {
            margin-top: 25px;

            padding: 12px;

            background: #f5f5f5;

            border-radius: 7px;

            text-align: center;

            font-size: 12px;

            color: #777;
        }
    </style>

</head>

<body>

<div class="login-container">

    <div class="login-card">

        <div class="logo">
            Solid<span>Sport</span>
        </div>

        <p class="subtitle">
            Login untuk melanjutkan
        </p>


        {{-- Pesan error --}}

        @if($errors->any())

            <div class="error">

                {{ $errors->first() }}

            </div>

        @endif


        {{-- Form Login --}}

        <form action="{{ route('login.process') }}" method="POST">

            @csrf


            <div class="form-group">

                <label for="email">
                    Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email"
                    required
                    autofocus
                >

            </div>


            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >

            </div>


            <button
                type="submit"
                class="login-btn"
            >
                Login
            </button>

        </form>


        <a
            href="{{ route('landing') }}"
            class="back"
        >
            ← Kembali ke Landing Page
        </a>


        <div class="info">
            Silakan login menggunakan akun yang telah terdaftar.
        </div>

    </div>

</div>

</body>

</html>