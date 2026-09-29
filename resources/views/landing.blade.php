<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SolidSport - Booking Lapangan Olahraga</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #222;
            background: #ffffff;
        }

        /* ================= NAVBAR ================= */

        nav {
            width: 100%;
            height: 70px;
            background: #ffffff;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 7%;

            position: fixed;
            top: 0;
            left: 0;

            z-index: 1000;

            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: #198754;
            text-decoration: none;
        }

        .logo span {
            color: #222;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 30px;
            list-style: none;
        }

        .nav-menu a {
            text-decoration: none;
            color: #333;
            font-size: 15px;
            transition: 0.3s;
        }

        .nav-menu a:hover {
            color: #198754;
        }

        .login-btn {
            background: #198754;
            color: white !important;

            padding: 10px 20px;
            border-radius: 7px;
        }

        .login-btn:hover {
            background: #157347;
        }


        /* ================= HERO ================= */

        .hero {
            min-height: 100vh;

            display: flex;
            align-items: center;

            padding: 100px 7% 50px;

            background:
                linear-gradient(
                    90deg,
                    rgba(0,0,0,0.75),
                    rgba(0,0,0,0.35)
                ),
                linear-gradient(
                    135deg,
                    #198754,
                    #0d6efd
                );
        }

        .hero-content {
            max-width: 650px;
            color: white;
        }

        .hero-content h1 {
            font-size: 55px;
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .hero-content h1 span {
            color: #8ff0b7;
        }

        .hero-content p {
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 30px;
            color: #eeeeee;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
        }

        .btn-primary {
            display: inline-block;

            padding: 13px 25px;

            background: #198754;
            color: white;

            border-radius: 7px;

            text-decoration: none;
            font-weight: bold;

            transition: 0.3s;
        }

        .btn-primary:hover {
            background: #157347;
            transform: translateY(-2px);
        }

        .btn-secondary {
            display: inline-block;

            padding: 13px 25px;

            border: 1px solid white;

            color: white;

            border-radius: 7px;

            text-decoration: none;
            font-weight: bold;
        }

        .btn-secondary:hover {
            background: white;
            color: #198754;
        }


        /* ================= SECTION ================= */

        section {
            padding: 80px 7%;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 35px;
            margin-bottom: 10px;
        }

        .section-title p {
            color: #777;
        }


        /* ================= FEATURES ================= */

        .features {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 25px;
        }

        .feature-card {
            background: white;

            padding: 30px;

            border-radius: 10px;

            text-align: center;

            box-shadow:
                0 5px 20px rgba(0,0,0,0.08);

            transition: 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            width: 60px;
            height: 60px;

            margin: auto;
            margin-bottom: 20px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #e8f7ef;

            color: #198754;

            border-radius: 50%;

            font-size: 25px;
        }

        .feature-card h3 {
            margin-bottom: 10px;
        }

        .feature-card p {
            color: #777;
            line-height: 1.6;
        }


        /* ================= ABOUT ================= */

        .about {
            background: #f7f7f7;

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 60px;

            align-items: center;
        }

        .about-content h2 {
            font-size: 35px;
            margin-bottom: 20px;
        }

        .about-content p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        .about-box {
            background: #198754;
            color: white;

            padding: 50px;

            border-radius: 15px;

            text-align: center;
        }

        .about-box h3 {
            font-size: 35px;
            margin-bottom: 10px;
        }


        /* ================= CTA ================= */

        .cta {
            background: #198754;

            color: white;

            text-align: center;
        }

        .cta h2 {
            font-size: 35px;
            margin-bottom: 15px;
        }

        .cta p {
            margin-bottom: 25px;
        }

        .cta .btn-primary {
            background: white;
            color: #198754;
        }


        /* ================= FOOTER ================= */

        footer {
            background: #111;
            color: #aaa;

            padding: 30px 7%;

            text-align: center;
        }

        footer strong {
            color: white;
        }


        /* ================= RESPONSIVE ================= */

        @media(max-width: 768px) {

            .nav-menu {
                gap: 12px;
            }

            .nav-menu a {
                font-size: 13px;
            }

            .hero-content h1 {
                font-size: 40px;
            }

            .features {
                grid-template-columns: 1fr;
            }

            .about {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>


<!-- ================= NAVBAR ================= -->

<nav>

    <a href="{{ route('landing') }}" class="logo">
        Solid<span>Sport</span>
    </a>

    <ul class="nav-menu">

        <li>
            <a href="{{ route('landing') }}">
                Home
            </a>
        </li>

        <li>
            <a href="#fitur">
                Fitur
            </a>
        </li>

        <li>
            <a href="#tentang">
                Tentang
            </a>
        </li>

        <li>
            <a href="{{ route('lapangan.index') }}">
                Lapangan
            </a>
        </li>

        <li>
            <a href="{{ route('login') }}" class="login-btn">
                Login
            </a>
        </li>

    </ul>

</nav>


<!-- ================= HERO ================= -->

<section class="hero">

    <div class="hero-content">

        <h1>
            Booking Lapangan
            <span>Lebih Mudah</span>
        </h1>

        <p>
            SolidSport membantu kamu menemukan dan memesan
            lapangan olahraga dengan cepat, mudah, dan praktis.
        </p>

        <div class="hero-buttons">

            <a href="{{ route('lapangan.index') }}"
               class="btn-primary">

                Lihat Lapangan

            </a>

            <a href="#tentang"
               class="btn-secondary">

                Tentang Kami

            </a>

        </div>

    </div>

</section>


<!-- ================= FITUR ================= -->

<section id="fitur">

    <div class="section-title">

        <h2>
            Kenapa SolidSport?
        </h2>

        <p>
            Semua kebutuhan booking lapangan dalam satu platform.
        </p>

    </div>


    <div class="features">


        <div class="feature-card">

            <div class="feature-icon">
                ⚡
            </div>

            <h3>
                Mudah & Cepat
            </h3>

            <p>
                Proses pemesanan lapangan dibuat sederhana
                sehingga kamu dapat melakukan booking dengan cepat.
            </p>

        </div>


        <div class="feature-card">

            <div class="feature-icon">
                📅
            </div>

            <h3>
                Jadwal Terorganisir
            </h3>

            <p>
                Lihat jadwal lapangan dan tentukan waktu
                yang sesuai dengan kebutuhanmu.
            </p>

        </div>


        <div class="feature-card">

            <div class="feature-icon">
                🏆
            </div>

            <h3>
                Beragam Lapangan
            </h3>

            <p>
                Temukan berbagai jenis lapangan olahraga
                yang tersedia di SolidSport.
            </p>

        </div>


    </div>

</section>


<!-- ================= TENTANG ================= -->

<section id="tentang" class="about">

    <div class="about-content">

        <h2>
            Tentang SolidSport
        </h2>

        <p>
            SolidSport adalah sistem informasi yang dirancang
            untuk membantu proses pemesanan lapangan olahraga
            secara lebih terstruktur.
        </p>

        <p>
            Pengguna dapat melihat informasi lapangan,
            jadwal, melakukan booking, serta mengelola
            pembayaran melalui sistem.
        </p>

        <a href="{{ route('lapangan.index') }}"
           class="btn-primary">

            Lihat Lapangan

        </a>

    </div>


    <div class="about-box">

        <h3>
            SolidSport
        </h3>

        <p>
            Sport Field Booking System
        </p>

    </div>

</section>


<!-- ================= CTA ================= -->

<section class="cta">

    <h2>
        Siap Bermain?
    </h2>

    <p>
        Temukan lapangan yang sesuai dan mulai booking sekarang.
    </p>

    <a href="{{ route('lapangan.index') }}"
       class="btn-primary">

        Mulai Booking

    </a>

</section>


<!-- ================= FOOTER ================= -->

<footer>

    <p>
        © {{ date('Y') }}
        <strong>SolidSport</strong>.
        All Rights Reserved.
    </p>

</footer>


</body>

</html>