<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <link rel="stylesheet icon" href="{{ asset('azwis') }}/img/ico.ico" />
    <link rel="stylesheet" href="{{ asset('azwis') }}/css/main.css" />
    @yield('css')
</head>

<body>
<!--PAGELOADER START-->
<div class="preloader">
    <div class="preloader_animation">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
            <path
                d="M316.54,550.47q-.36-11.67-.49-23.35c-.32-29.6-3.9-54.78-20.56-80.11C267,403.74,257.7,355.76,259.33,304.82c2.28-71.37,41-119.16,106.45-129.85,27.08-4.43,53.58.75,77.24,13.22,39.56,20.84,77,20.66,116.95.4,36.4-18.44,75.57-21.17,113.88-4,49.7,22.24,68.94,64.74,72.32,115.8,3.4,51.34-5.7,100.28-34.33,144.21-15.55,23.86-22.15,49.18-21.54,78.24,1.56,74.77-2,149.53-26.7,221-7.93,22.95-21.69,44.37-35.56,64.59-8.61,12.55-22.56,22.56-40,16.29-18.35-6.58-21.13-23-24-40Q550.06,703.18,534.28,622c-2.4-12.27-7.56-24.4-13.58-35.43-4-7.3-11.45-14.23-18.13-18.78-26,23.21-34.19,59-40.75,91.83-8.53,42.71-13.64,86.1-20.28,129.19C439.2,804,435,818.11,418.83,824.61s-27.9-2.15-38.31-12.55c-28.2-28.15-41-64.47-47.69-102.06A1109.44,1109.44,0,0,1,316.54,550.47Zm280,246.39c24.2-16.59,33.23-39.12,40.48-62.18,21.11-67.18,26.58-136.72,25.11-206.41-.78-37,7.41-69.24,26-100.65C713.82,384.28,721.42,336.8,714.4,287c-6.48-46-36.84-78.7-82.21-81.59-20.48-1.3-43.19,4.24-62.15,12.78-45.39,20.44-89.11,22.89-133.8-.28-8.25-4.28-17.45-6.93-26.44-9.5-56.13-16.06-106.5,12.85-117.76,70.09-10.35,52.6-3.56,103.36,25.44,149.94,14.71,23.62,25.76,48.14,26.61,77.23,1.51,51.85,3.64,103.8,8.78,155.39,5,50.37,18.57,96.89,53.31,134.69,12.22-24.76,13-56.28,17.8-83.54,5.45-31.19,11.2-62.34,18.55-93.14,5.59-23.39,18.55-46.1,32.5-66.1,14.54-20.84,38.8-20.33,55.17-.66,10.4,12.5,20.06,27.18,24.82,42.51,11.42,36.79,21,74.28,28.92,112C589.9,735.18,592.16,764.35,596.57,796.87Z">
            </path>
            <path
                d="M373.39,245c24.16,1.24,8.7,24.67,1.95,35a66.12,66.12,0,0,0-10.54,31.47c-1.73,24,5.75,48.89,16.55,70,5.17,10.11,16.85,31.45-1.32,36.23-11.24,3-21.82-11-26.53-19.34-8.17-14.48-12.69-31-15.79-47.19a157.15,157.15,0,0,1,4.49-75.53c3.89-12.67,15.61-30.93,30.59-30.71Z">
            </path>
        </svg>
    </div>
</div>
<!--PAGELOADER END-->

<!--NAVBAR START-->
<header class="header">
    <div class="header__main">
        <div class="wrapper">
            <div class="header__main__holder">
                <div class="header__main__holder__brand">
                    <a href="{{ route('front.home') }}" class="header__main__holder__logo">
                        <img src="{{ asset('azwis') }}/img/navbar/logo.png" class="header__main__holder__logo__web img-fluid"
                             alt="{{ env('APP_NAME') }}">

                    </a>
                    <a href="{{ route('lang.swithcher',['locale'=>'az']) }}">AZ</a> -
                    <a href="{{ route('lang.swithcher',['locale'=>'en']) }}">EN</a> -
                    <a href="{{ route('lang.swithcher',['locale'=>'ru']) }}">RU</a>
                </div>
                <div class="header__main__holder__navigation">

                    <ul class="header__main__holder__navigation__list" role="navigation">
                        <li class="header__main__holder__navigation__list__item">
                            <a href="{{ route('front.home') }}" class="header__main__holder__navigation__list__item__link active">Ana S??hif??</a>
                        </li>
                        <li class="header__main__holder__navigation__list__item">
                            <a href="about.html" class="header__main__holder__navigation__list__item__link">Haqq??m??zda</a>
                        </li>
                        <li class="header__main__holder__navigation__list__item">
                            <a href="emax.html" class="header__main__holder__navigation__list__item__link">Xidm??tl??rimiz</a>
                        </li>
                        <li class="header__main__holder__navigation__list__item">
                            <a href="packages.html" class="header__main__holder__navigation__list__item__link">Paketl??rimiz</a>
                        </li>
                        <li class="header__main__holder__navigation__list__item">
                            <a href="blog.html" class="header__main__holder__navigation__list__item__link">Bloq</a>
                        </li>
                        <li class="header__main__holder__navigation__list__item">
                            <a href="partners.html" class="header__main__holder__navigation__list__item__link">Partnyorlar</a>
                        </li>
                        <li class="header__main__holder__navigation__list__item">
                            <a href="contact.html" class="header__main__holder__navigation__list__item__link ">??laq??</a>
                        </li>
                    </ul>

                </div>
                <div class="header__main__holder__action">

                    <div class="menu-toggle web">
                        <span class="trigger"></span>
                    </div>
                    <div class="menu-toggle-mobile">
                        <span class="trigger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<header class="vs-menu-wrapper position-re overfollow-hidden">
    <div class="vs-menu-area">
        <button class="vs-menu-toggle text-theme vs-active">
            <i class="fas fa-times-circle"></i>
        </button>
        <div class="mobile-logo">
            <a class="logo imgLoad" href="{{ route('front.home') }}">
                <img src="{{ asset('azwis') }}/img/navbar/logo.png" alt="logo" />
            </a>
        </div>

        <ul class="menu-items">
            <li class="nav-item">
                <a class="nav-link vs-mobile-menu" href="{{ route('front.home') }}">Ana S??hif??</a>
            </li>
            <li class="nav-item">
                <a class="nav-link vs-mobile-menu" href="about.html">Haqq??m??zda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link vs-mobile-menu" href="emax.html" role="button" aria-haspopup="true"
                   aria-expanded="false">Xidm??tl??rimiz</a>
            </li>
            <li class="nav-item">
                <a class="nav-link vs-mobile-menu active" href="packages.html">Paketl??rimiz</a>
            </li>
            <li class="nav-item">
                <a class="nav-link vs-mobile-menu active" href="blog.html">Bloq</a>
            </li>
            <li class="nav-item">
                <a class="nav-link vs-mobile-menu active" href="partners.html">Partnyorlar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link vs-mobile-menu active" href="contact.html">??laq??</a>
            </li>
        </ul>

        <select class="selectpicker" id="lang" data-width="fit"
                onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
            <option class="option" data-content="Az">Az</option>
            <option class="option" data-content="Ru">Ru</option>
            <option class="option" data-content="En">En</option>
        </select>
    </div>
</header>
<!--NAVBAR END-->

<!--INDEX START-->
@yield('content')
<!--INDEX END-->

<!--FOOTER START-->
<footer>
    <div class="footer position-re overfollow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="info col-lg-6 col-md-12 col-sm-12">

                    <div class="box col-3 col-md-12 col-sm-12">
                        <h2>Stomatologiyada b??l??d??iniz</h2>
                        <p>Xo??b??xt v?? sa??lam ya??amaq h??r birimiz haqq??d??r.</p>
                        <div class="popup">
                            <a href="javascript:(0)" data-effect="mfp-zoom-in" class="step1 btn">ONLAYN GEYD??YYAT</a>
                        </div>
                    </div>

                    <div class="box col-3 col-md-12 col-sm-12">
                        <h2>ASAN MENYU</h3>
                            <a href="javascript:(0)">Haqq??m??zda</a>
                            <a href="javascript:(0)">Xidm??tl??r</a>
                            <a href="javascript:(0)">Paketl??r</a>
                            <a href="javascript:(0)">Bloq</a>
                            <a href="javascript:(0)">??n ??ox veril??n suallar</a>
                    </div>

                    <div class="box col-3 col-md-12 col-sm-12">
                        <h2>F??AL??YY??T??M??Z</h2>
                        <p>Beyn??lxalq standartlara uy??un tibbi xidm??t sistemini v?? t??f??kk??r??n?? formala??d??rmaq v?? h??yata
                            ke??irm??kd??n
                            ibar??tdir.</p>
                    </div>

                    <div class="box col-3 col-md-12 col-sm-12">
                        <h2>???? SAATLARI</h2>
                        <span> Mon - Tue&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 09:00 - 18:00</span>
                        <span> Wed - Thur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 09:00 - 18:00</span>
                        <span> Fri - Sat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 09:00 - 18:00</span>
                    </div>

                </div>

                <div class="location col-lg-6 col-md-12 col-sm-12">
                    <div class="block">
                        <span>??nvan:
                        @if(app()->getLocale() == 'az')
                            {{ explode('***',\App\Helpers\Options::getOption('unvan'))[0] }}
                        @elseif(app()->getLocale() == 'en')
                            {{ explode('***',\App\Helpers\Options::getOption('unvan'))[1] }}
                        @elseif(app()->getLocale() == 'ru')
                            {{ explode('***',\App\Helpers\Options::getOption('unvan'))[2] }}
                        @endif
                        </span>
                        <span>Telefon: {{ explode('***',\App\Helpers\Options::getOption('tel'))[0] }}</span>
                        <span>Email: <a href="mailto:{{ \App\Helpers\Options::getOption('email') }}">{{ \App\Helpers\Options::getOption('email') }}</a> </span>
                        <div class="button">
                            <a href="javascript:(0)" class="step1 btn">X??rit??d?? bax<i class="fa-solid fa-circle-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom overfollow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="logo">
                        <a href="javascript:(0)" target="_blank"><img src="{{ asset('azwis') }}/img/footer/logowhite.png" alt=""></a>
                    </div>
                </div>
                <div class="copy-right col-md-6 col-sm-6">
                    <h2>{{ __('static.butun_huquqlar_qorunur') }} ?? {{ date('Y') }} <a href="https://corn.az" target="_blank"> <img src="{{ asset('azwis') }}/img/footer/corn2.png"
                                                                                                      alt=""></a></h2>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--FOOTER END-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
<script src="{{ asset('azwis') }}/js/plugins/swiper-bundle.min.js"></script>
<script src="{{ asset('azwis') }}/js/plugins/owl.carousel.js"></script>
<script src="{{ asset('azwis') }}/js/plugins/wow.js"></script>
<script src="{{ asset('azwis') }}/js/plugins/lozad.js"></script>
<script src="{{ asset('azwis') }}/js//main.js"></script>

@yield('js')
</body>
</html>
