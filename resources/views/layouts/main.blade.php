<!doctype html>
<html>
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">

        <!-- Bootstrap CSS Link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <title>Pencatatan Buku App</title>
    </head>
    <body>
        <div class="card-header bg-light">
            <div class="container col-lg-3 border rounded">
                <div class="display-8" style="text-align: center;">Firman Fawnia Fauzan XI-RPL 2</div>
            </div>
            <div class="display-3" style="text-align: center;">Pencatatan Buku</div>
        </div>
        <div class="container mt-4 bg-light border rounded">
            @yield('list-container')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>