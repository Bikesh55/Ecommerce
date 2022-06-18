<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Ecommerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>

                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/auth/login')}}">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/auth/register')}}">Register <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <button type="button" class="btn btn-primary" style="margin-right: 25px;">
                Cart
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    99+
                </span>
            </button>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

    </nav>

    <!-- Card views for products -->
    <div class="container" style="margin-top:60px;">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Name</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>