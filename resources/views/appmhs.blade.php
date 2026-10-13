<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Praktikum Laravel')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f6f9;
            color: #222;
        }

        nav {
            background: #173b70;
            padding: 16px 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        main {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background: #e9eef5;
        }

        .alert {
            padding: 12px;
            margin: 15px 0;
            border-radius: 5px;
        }

        .alert-sukses {
            background: #d1e7dd;
            color: #0f5132;
        }

        .alert-bahaya {
            background: #f8d7da;
            color: #842029;
        }

        .alert-info {
            background: #cff4fc;
            color: #055160;
        }

        footer {
            text-align: center;
            padding: 20px;
        }
    </style>

    @stack('styles')
</head>
<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    <footer>
        Praktikum Laravel &copy; {{ date('Y') }}
    </footer>

    @stack('scripts')
</body>
</html>  ini app.blade.php