<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insurance Form</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="https://kit.fontawesome.com/e20943e3ff.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<div class="" id="home">
    <div class="filter"></div>
    <nav class="navbar a navbar-expand-lg navbar-light ">
        <div class="container nav-wrapper">
            <a class="navbar-brand" href="#">
                <img src="{{ url('/storage/img/logoipsum.svg') }}" alt="">
            </a><button class="btn custom-button" onclick="window.location.href='/'">Powrót na stronę główną</button>
        </div>
    </nav>
    <div class="container subnav-hr"></div>
</div>
<section class="container" style="margin-top: 15px;" id="form">
    <v-app id="app">
        <insurance-form_onepage></insurance-form_onepage>
    </v-app>
</section>
<footer class="py-5">
    <div class="row text-center text-md-left align-items-center">
        <div class="col-md-6 order-3 order-md-1 py-2 px-5">
            <img src="{{ url('/storage/img/logoipsum.svg') }}" alt="">
            <p class="section-content mt-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</p>
            <div class="ico-wrapper">
                <i class="fab fa-instagram-square text-primary mr-3"></i>
                <i class="fab fa-facebook-square text-primary mx-3"></i>
                <i class="fab fa-twitter-square text-primary mx-3"></i>
            </div>
        </div>
        <div class="col-md-3 order-2 order-md-2 py-2 px-4 align-items-center">
            <h3>Linda J. Lazaro</h3>
            <p>ul. Graniczna 117<br>
                86-055 Solec Kujawski<br>
                JLazaro@jourrapide.com<br>
                jourrapide.com</p>
        </div>
        <div class="col-md-3 order-1 order-md-3 py-2 px-4 align-items-center">
            <h3>Contact</h3>
            <p>+48 2311 2312 12<br>
                +44 2324 1232 23<br>
                fax: 1213 1212 12</p>
        </div>
    </div>
</footer>
<!-- Back to top button -->
<a id="button"></a>
</body>
<script>
    var relative_url = '{{url('/')}}';
    var global_lang = 'pl';
</script>
<script src="{{ mix('/js/app.js') }}" defer></script>
</html>
