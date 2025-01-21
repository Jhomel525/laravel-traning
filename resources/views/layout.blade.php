<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sample Crud')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f5e9; /* Light green background */
            color: #2e7d32; /* Dark green text */
        }

        .navbar {
            background-color: #388e3c; /* Green navbar */
        }

        .navbar-brand, .nav-link {
            color: white !important;
        }

        .nav-link:hover {
            color: #c8e6c9 !important; /* Lighter green on hover */
        }

        .footer {
            background-color: #1b5e20; /* Darker green footer */
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }

        .content {
            margin-top: 20px;
        }

        .btn-green {
            background-color: #4caf50;
            color: white;
            border: none;
        }

        .btn-green:hover {
            background-color: #66bb6a;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar-expand-lg navbar-dark">
        <div class="container-fluid">
        <a href="{{ route('posts.index') }}">Posts</a>
        <a href="{{ route('categories.index') }}">Categories</a>
        </div>
        <hr>
        </nav>

    <!-- Content -->
    <div class="container content">
        @yield('content')
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2025. All Rights Reserved.</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
