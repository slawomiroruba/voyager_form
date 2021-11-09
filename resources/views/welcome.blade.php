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
<div class="header-wrapper" id="home">
    <div class="filter"></div>
    <nav class="navbar a navbar-expand-lg navbar-light ">
        <div class="container nav-wrapper">
            <a class="navbar-brand" href="#">
                <img src="{{ url('/storage/img/logoipsum.svg') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-1 font-weight-bold" id="navbarNavAltMarkup">
                <div class="navbar-nav mr-auto smooth-scrool">
                    <a class="nav-link" href="#home">Home</a>
                    <a class="nav-link" href="#about">O programie</a>
                    <a class="nav-link" href="#isduty">Obowiązkowe?</a>
                    <a class="nav-link" href="#package">Pakiety</a>
                    <a class="nav-link" href="#form">Kontakt</a>
                </div>
                <button class="btn custom-button" onclick="window.location.href='/form'">Formularz</button>
            </div>
        </div>
    </nav>
    <div class="container subnav-hr"></div>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-10 col-md-6 ml-5">
                    <h1 class="main-header">Ubezpieczenie Odpowiedzialności Cywilnej</h1>
                    <p class="main-subheader">Program ubezpieczenia lekarzy i lekarzy dentystów OIL w Warszawie </p>
                    <button class="btn btn-primary custom-button mt-3">Otrzymaj darmową wycenę</button>
                </div>
            </div>
        </div>
    </header>
</div>
<div class="container features">
    <div class="row justify-content-center d-flex flex-wrap">
        <div class="col-sm-12 col-md-6 col-lg-3  custom-card">
            <i class="fas fa-users" mb-1></i>
            <p>230<br>klientów</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 custom-card">
            <i class="fas fa-flag-usa mb-1"></i>
            <p>12<br>krajów</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 custom-card">
            <i class="fas fa-building mb-1"></i>
            <p>77<br>oddziałów</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 custom-card">
            <i class="fas fa-shopping-bag mb-1"></i>
            <p>140<br>produktów</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 custom-card">
            <i class="fas fa-gavel mb-1"></i>
            <p>972<br>opinii</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 custom-card d-md-none">
            <i class="fas fa-user-tie mb-1"></i>
            <p>543<br>klientów</p>
            {{--            https://vrlps.co/MLm64dl/cp--}}
        </div>
    </div>

</div>
<section class="container" id="about">
    <h1 class="section-header">O programie</h1>
    <div class="row mt-6 d-flex align-items-center">
        <div class="col-md-5 text-center mt-4">
            <img class="img_section-type-1" src="{{ url('/storage/img/female-doctor.webp') }}" alt="female doctor">
        </div>
        <div class="col-md-6 text-center text-md-left mx-4 ml-md-3">
            <h1 class="section-subheader ">OIL w Warszawie zapewnia bezpłatne ubezpieczenie OC dla lekarzy i lekarzy
                dentystów.</h1>
            <p class="section-content">Program został przygotowany przez PZU SA we współpracy z Okręgową Izbą
                Lekarską w Warszawie (dalej zwaną: OIL w Warszawie). Do Programu może przystąpić każdy lekarz i lekarz
                dentysta, który jest członkiem OIL w Warszawie.</p>
            <button class="btn btn-primary custom-button mt-3">Otrzymaj darmową wycenę</button>
        </div>
    </div>
</section>
<section class="container" id="isduty">
    <h1 class="section-header duty">Obowiązkowe czy nie?</h1>
    <div class="row mt-6 d-flex">
        <div class="row row-cols-1 mt-4 row-cols-sm-2 d-flex flex-wrap justify-content-center">
            <div class="col-11 mb-4 col-mb-6">
                <div class="card text-center jula-shadow">
                    <div class="card-header bg-primary text-white card-title">
                        <i class="fas fa-syringe"></i>
                        OC Obowiązkowe
                    </div>
                    <div class="card-body">
                        <p class="card-text section-content">Warunki tego ubezpieczenia reguluje Rozporządzenie Ministra
                            Finansów z dnia
                            29 kwietnia 2019r. w sprawie obowiązkowego ubezpieczenia odpowiedzialności cywilnej podmiotu
                            wykonującego działalność leczniczą (Dz. U 2019, poz. 866). Warunki tego ubezpieczenia
                            reguluje Rozporządzenie Ministra Finansów z dnia 29 kwietnia 2019r. </p>
                        <button class="btn btn-primary custom-button mt-3">Szczegóły</button>
                    </div>
                </div>
            </div>
            <div class="col-11 mb-4 col-mb-6">
                <div class="card text-center jula-shadow">
                    <div class="card-header bg-primary text-white card-title">
                        <i class="fas fa-stethoscope"></i>
                        OC Nieobowiązkowe
                    </div>
                    <div class="card-body">
                        <p class="card-text section-content">Warunki tego ubezpieczenia reguluje Rozporządzenie Ministra
                            Finansów z dnia
                            29 kwietnia 2019r. w sprawie obowiązkowego ubezpieczenia odpowiedzialności cywilnej podmiotu
                            wykonującego działalność leczniczą (Dz. U 2019, poz. 866). Warunki tego ubezpieczenia
                            reguluje Rozporządzenie Ministra Finansów z dnia 29 kwietnia 2019r. </p>
                        <button class="btn btn-outline-primary custom-button mt-3">Szczegóły</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container" id="package">
    <h1 class="section-header">Pakiet</h1>
    <div class="row mt-6 d-flex align-items-center">
        <div class="col-md-6 text-center text-md-left mx-4 mr-md-3">
            <h1 class="section-subheader ">OIL w Warszawie zapewnia bezpłatne ubezpieczenie OC dla lekarzy i lekarzy
                dentystów.</h1>
            <p class="section-content">Program został przygotowany przez PZU SA we współpracy z Okręgową Izbą
                Lekarską w Warszawie (dalej zwaną: OIL w Warszawie). Do Programu może przystąpić każdy lekarz i lekarz
                dentysta, który jest członkiem OIL w Warszawie.</p>
            <button class="btn btn-primary custom-button mt-3">Otrzymaj darmową wycenę</button>
        </div>
        <div class="col-md-5 text-center mt-4">
            <img class="img_section-type-1" src="{{ url('/storage/img/female-doctor.webp') }}" alt="female doctor">
        </div>
    </div>
</section>
<section class="container" id="form">
    <h1 class="section-header">Formularz wyceny</h1>
    <v-app id="app">
        <insurance-form></insurance-form>
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
<script>
    var btn = $('#button');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, '300');
    });

</script>
<script src="{{ mix('/js/app.js') }}" defer></script>
</html>
