<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pyplant</title>

    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menusatu-main.css') }}">

</head>
<body>
    {{-- beranda --}}
    <section class="beranda" id="beranda">
        <header>
            <a href="{{ url('main') }}" class="logo"><img width="150px" src="{{ asset('images/pyplant_logo.png') }}"  alt=""></a>
    
                {{-- navbar --}}
            <nav>
                <ul class="navbar">
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#mobile">Mobile</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                    <li><a href="{{ url('login') }}" class="icon-orang"><img width="30px" src="{{ asset('images/orang.png') }}"  alt=""></a></li>
                    </ul> 
            </nav>
        </header>

    {{-- card sayur --}}
    <div class="card-container">
        <div class="card">
            <img src="{{ asset('images/sawi.jpg') }}" alt="">
            <div class="card-content">
                <h3>Sawi</h3>
                <a href="{{ url('login') }}" class="btn">Cara Menanam</a>
            </div>
        </div>
    <div class="card">
        <img src="{{ asset('images/wortel.jpg') }}" alt="">
        <div class="card-content">
            <h3>Wortel</h3>
            <a href="{{ url('login') }}" class="btn">Cara Menanam</a>
        </div>
    </div>
    <div class="card">
        <img src="{{ asset('images/kentang.jpeg') }}" alt="">
        <div class="card-content">
            <h3>Kentang</h3>
            <a href="{{ url('login') }}" class="btn">Cara Menanam</a>
        </div>
    </div>

    {{-- card buah --}}
    <div class="card-container">
        <div class="card">
            <img src="{{ asset('images/apel.jpg') }}" alt="">
            <div class="card-content">
                <h3>Apel</h3>
                <a href="{{ url('login') }}" class="btn">Cara Menanam</a>
            </div>
        </div>
    <div class="card">
        <img src="{{ asset('images/anggur.jpg') }}" alt="">
        <div class="card-content">
            <h3>Anggur</h3>
            <a href="{{ url('login') }}" class="btn">Cara Menanam</a>
        </div>
    </div>
    <div class="card">
        <img src="{{ asset('images/jeruk.jpg') }}" alt="">
        <div class="card-content">
            <h3>Jeruk</h3>
            <a href="{{ url('login') }}" class="btn">Cara Menanam</a>
        </div>
    </div>
    
    {{-- card bunga --}}
    <div class="card-container">
        <div class="card">
            <img src="{{ asset('images/anggrek.jpg') }}" alt="">
            <div class="card-content">
                <h3>Anggrek</h3>
                <a href="{{ url('login') }}" class="btn">Cara Menanam</a>
            </div>
        </div>
    <div class="card">
        <img src="{{ asset('images/dahlia.jpg') }}" alt="">
        <div class="card-content">
            <h3>Dahlia</h3>
            <a href="{{ url('login') }}" class="btn">Cara Menanam</a>
        </div>
    </div>
    <div class="card">
        <img src="{{ asset('images/mawar.jpeg') }}" alt="">
        <div class="card-content">
            <h3>Mawar</h3>
            <a href="{{ url('login') }}" class="btn">Cara Menanam</a>
        </div>
    </div>

    {{-- footer --}}
    <footer>
        <section class="footer">
            <p>&#169; Project Pemrograman Web Kelompok 10.</p>
        </section>
    </footer>
    
</div>

    {{-- card slider --}}
    {{-- <section class="container">
        <div class="card__container swiper">
            <div class="card__content">
                <div class="swiper-wrapper">
                    <article class="card__article swiper-slide">
                        <div class="card__image">
                        <img src="assets/img/avatar-1.png" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                        </div>
        
                        <div class="card__data">
                        <h3 class="card__name">Kell Dawx</h3>
                        <p class="card__description">
                            Passionate about development and design, 
                            I carry out projects at the request of users.
                        </p>
        
                        <a href="#" class="card__button">View More</a>
                        </div>
                    </article>
        
                    <article class="card__article swiper-slide">
                        <div class="card__image">
                        <img src="assets/img/avatar-2.png" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                        </div>
        
                        <div class="card__data">
                        <h3 class="card__name">Lotw Fox</h3>
                        <p class="card__description">
                            Passionate about development and design, 
                            I carry out projects at the request of users.
                        </p>
        
                        <a href="#" class="card__button">View More</a>
                        </div>
                    </article>
        
                    <article class="card__article swiper-slide">
                        <div class="card__image">
                        <img src="assets/img/avatar-3.png" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                        </div>
        
                        <div class="card__data">
                        <h3 class="card__name">Sara Mit</h3>
                        <p class="card__description">
                            Passionate about development and design, 
                            I carry out projects at the request of users.
                        </p>
        
                        <a href="#" class="card__button">View More</a>
                        </div>
                    </article>
        
                    <article class="card__article swiper-slide">
                        <div class="card__image">
                        <img src="assets/img/avatar-4.png" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                        </div>
        
                        <div class="card__data">
                        <h3 class="card__name">Jenny Wert</h3>
                        <p class="card__description">
                            Passionate about development and design, 
                            I carry out projects at the request of users.
                        </p>
        
                        <a href="#" class="card__button">View More</a>
                        </div>
                    </article>

                    <article class="card__article swiper-slide">
                        <div class="card__image">
                        <img src="assets/img/avatar-5.png" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                        </div>
        
                        <div class="card__data">
                        <h3 class="card__name">Lexa Kin</h3>
                        <p class="card__description">
                            Passionate about development and design, 
                            I carry out projects at the request of users.
                        </p>
        
                        <a href="#" class="card__button">View More</a>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Navigation buttons -->
            <div class="swiper-button-next">
                <i class="ri-arrow-right-s-line"></i>
            </div>
            
            <div class="swiper-button-prev">
                <i class="ri-arrow-left-s-line"></i>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
            </div>
        </section> --}}
        
        {{-- javascript --}}
        {{-- <script type="text/javascript">

        let swiperCards = new Swiper(".card__content", {
        loop: true,
        spaceBetween: 32,
        grabCursor: true,

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints:{
            600: {
            slidesPerView: 2,
            },
            968: {
            slidesPerView: 3,
            },
        },
        });
            </script> --}}
    
</body>
</html>