<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

    <img src="/public/img/bookstore-library-wordpress-themes-1.jpg"  alt="">

<nav class="navbar navbar-expand-lg bg-body-tertiary container mt-2">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link active text-3xl" aria-current="page" href="{{route('categories.index')}}">Danh Mục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('customeres.index')}}">Khách Hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('products.index')}}">Sách</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

</body>
</html>


