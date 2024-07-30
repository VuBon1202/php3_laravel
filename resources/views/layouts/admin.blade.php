<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/41dd1b16b5.js"></script>
</head>
<body>
    <div class="container-scroller">
        @include('admin.block.header')
        
        <div class="container-fluid page-body-wrapper">
            <div class="row">
                <div class="col-md-2">
                    @include('admin.block.sidebar')
                </div>
                <div class="col-md-10 main-panel">
                    @yield('content')
                </div>
            </div>
        </div>

        <footer class="footer mt-auto py-3 bg-light">
            <div class="container">
                @include('admin.block.footer')
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-NOS9CjC6JD5qqIcUZdK1TvStEKIRFHfTFTczJlDly0cD+Z4eEnVrGrRmheE7l1Y8" crossorigin="anonymous"></script>
</body>
</html>
