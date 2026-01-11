<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>UAS Sparepart Punk</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: #0f0f0f;
            color: #f1f1f1;
            font-family: 'Oswald', sans-serif;
        }

        .navbar {
            background: #000;
            border-bottom: 3px solid red;
        }

        .navbar-brand {
            color: red !important;
            font-weight: 600;
            letter-spacing: 2px;
        }

        .card {
            background: #1a1a1a;
            border: 2px solid #333;
        }

        .card-header {
            background: #000;
            border-bottom: 2px solid red;
        }

        table th {
            background: #000 !important;
            color: red !important;
            text-transform: uppercase;
        }

        table td {
            background: #1a1a1a;
            color: #f1f1f1;
        }

        .btn-danger {
            background: red;
            border: none;
        }

        .btn-warning {
            background: orange;
            border: none;
            color: black;
        }

        .btn-success {
            background: #0d6efd;
            border: none;
        }

        input {
            background: #111 !important;
            color: white !important;
            border: 1px solid red !important;
        }

        label {
            color: #ff4444;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark mb-4">
    <div class="container">
        <span class="navbar-brand">☠ TOKO SPAREPART LA ☠</span>
    </div>
</nav>

<div class="container mb-5">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
