<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIE SABI | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3f3f3;
            font-family: 'Poppins', sans-serif;
        }

        /* Navbar */
        .navbar {
            background-color: #7a0000;
        }

        .navbar-brand, .nav-link, .btn-daftar {
            color: #fff !important;
        }

        .btn-daftar {
            background-color: #b30000;
            border: none;
            padding: 5px 20px;
            border-radius: 4px;
            transition: 0.3s;
        }

        .btn-daftar:hover {
            background-color: #ff0000;
        }

        /* Login Card */
        .login-card {
            background-color: #a05200;
            color: #fff;
            border-radius: 12px;
            padding: 40px;
            width: 350px;
            margin: 80px auto;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .login-card h2 {
            text-align: center;
            color: #ffcc33;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .form-control {
            border-radius: 8px;
            border: none;
        }

        .btn-signin {
            background-color: #7a0000;
            color: #fff;
            width: 100%;
            border-radius: 8px;
            padding: 8px 0;
        }

        .btn-google {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 100%;
            padding: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            color: #000;
        }

        .btn-google:hover {
            background-color: #f8f8f8;
        }

        .register-link {
            font-size: 0.85rem;
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color: #fff;
            font-weight: 600;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid px-5">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" width="100" class="me-2">
                <span>MIE SABI</span>
            </a>
            <div class="ms-auto">
                <a href="{{ route('register') }}" class="btn-daftar">DAFTAR</a>
            </div>
        </div>
    </nav>