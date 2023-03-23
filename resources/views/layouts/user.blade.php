<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ecommerce</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css ')}}">

    <link rel="stylesheet" href="{{asset('css/main.css ')}}">

    <link rel="stylesheet" href="{{asset('css/owl-carousel.css ')}}">

    <link rel="stylesheet" href="{{asset('css/lightbox.css ')}}">
    <link rel="stylesheet" href="https://kit.fontawesome.com/a27e1ce134.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{route('dashboard')}}">Home page</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item dropdown">
                    <a class="btn btn-outline-dark" style="width: 100px; height: 40px; padding-top: 5px; margin-top: 15px;" href="{{route('cart')}}">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                    </a>
                </li>
            </ul>
            <form action="{{route('logout')}}" method="POST" class="mt-3">
                @csrf
                <button class="btn btn-dark">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>




@yield('user')





<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="first-item">
                    <ul>
                        <li><a href="#">Location</a></li>
                        <li><a href="#">Find us in google</a></li>
                        <li><a href="#">Subscribe</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>Shopping &amp; Categories</h4>
                <ul>
                    <li><a href="#">Men’s Shopping</a></li>
                    <li><a href="#">Women’s Shopping</a></li>
                    <li><a href="#">Kid's Shopping</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">Homepage</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Help &amp; Information</h4>
                <ul>
                    <li>
                        <div class="col-lg-5 rounded-pill">
                            <fieldset>
                                <input name="email" type="text" id="email" placeholder="Your Email Address" required="">
                            </fieldset>
                        </div>
                    </li>
                </ul>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>

{{-- Bootstrap --}}
<script src="{{asset('js/popper.js ')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('js/owl-carousel.js ')}}"></script>
<script src="{{asset('js/accordions.js')}}"></script>
<script src="{{asset('js/datepicker.js')}}"></script>
<script src="{{asset('js/scrollreveal.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js ')}}"></script>
<script src="{{asset('js/imgfix.min.js ')}}"></script>
<script src="{{asset('js/slick.js')}}"></script>
<script src="{{asset('js/lightbox.js ')}}"></script>
<script src="{{asset('js/isotope.js ')}}"></script>

<script src="{{asset('js/custom.js ')}}"></script>
<script src="https://kit.fontawesome.com/a27e1ce134.js" crossorigin="anonymous"></script>

</body>
</html>
