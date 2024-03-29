<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Laravel hello world</title>
</head>
<body>
    <header class="bg-dark text-white">
        <div class="container py-3">
            <div class="row justify-content-between align-items-center">
                <div class="col-4">
                    <h1><i class="fas fa-list"></i> List</h1>
                </div>
                <div class="col-6">
                    <ul class="list-unstyled d-flex">
                        @foreach ($list as $item)
                            <li class="mx-3 fs-5">{{ strtoupper($item) }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </header>
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