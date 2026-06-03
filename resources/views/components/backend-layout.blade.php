<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Admin Panel</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body>

    <div class="container-fluid">

        <div class="row">

            <!-- Sidebar Section -->
            <div class="col-md-2 p-0">

                @include('admin.partials.sidebar')

            </div>

            <!-- Content Section -->
            <div class="col-md-10">

                <div class="p-4">

                    {{ $slot }}

                </div>

            </div>

        </div>

    </div>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Global Toast Functions -->
    <x-admin-toast />
</body>

</html>