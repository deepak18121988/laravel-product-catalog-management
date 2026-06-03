<!DOCTYPE html>
<html>
<head>
    <title>Frontend</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@include('frontend.partials.header')

{{ $slot }}

@include('frontend.partials.footer')

</body>
</html>