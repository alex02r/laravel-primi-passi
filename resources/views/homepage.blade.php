<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Laravel hello world</title>
</head>
<body>
    <div class="container my-5">
        <div class="row jusify-content-center">
            <div class="col-12 text-center">
                <h1>Hello World!</h1>
            </div>
            <div class="col-8">
                <h5>Lista:</h5>
                <ul class="list-unstyled">
                    @foreach ($list as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>