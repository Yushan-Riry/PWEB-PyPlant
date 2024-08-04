<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PyPlant</title>

    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('css/menudua-main.css') }}">

    {{-- box icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

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
    </section>

    {{-- tentang --}}
    <section class="tentang" id="tentang">
        <div class="container-tentang">
            <div class="mobile-img">
                <img src="{{ asset('images/mob-hidroponik.jpeg') }}" alt="">
            </div>
            <div class="tentang-text">
                <h2>Berikut Tampilan Mobile dari PyPlant</h2>
                <p>
                    Tampilan Page Sayur (Hidroponik)
                </p>
            </div>
        </div>
    </section>

    {{-- mobile --}}
    <section class="mobile" id="mobile">
        <div class="container-mobile">
            <div class="mobile-text">
                <h2>Berikut Tampilan Mobile dari PyPlant</h2>
                <p>
                    Tampilan Page Deskripsi Salah Satu Tanaman
                </p>
            </div>
            <div class="mobile-img2">
                <img src="{{ asset('images/mob-deskripsi.jpeg') }}" alt="">
            </div>
        </div>
    </section>

    {{-- tentang --}}
    <section class="tentang" id="tentang">
        <div class="container-tentang">
            <div class="mobile-img">
                <img src="{{ asset('images/mob-media.jpeg') }}" alt="">
            </div>
            <div class="tentang-text">
                <h2>Berikut Tampilan Mobile dari PyPlant</h2>
                <p>
                    Tampilan Page Media Tanam
                </p>
            </div>
        </div>
    </section>

    {{-- mobile --}}
    <section class="mobile" id="mobile">
        <div class="container-mobile">
            <div class="mobile-text">
                <h2>Berikut Tampilan Mobile dari PyPlant</h2>
                <p>
                    Tampilan Page Fitur Tanggal (Notifkasi)
                </p>
            </div>
            <div class="mobile-img2">
                <img src="{{ asset('images/mob-tanggal.jpeg') }}" alt="">
            </div>
        </div>
    </section>

        {{-- tentang --}}
        <section class="tentang" id="tentang">
            <div class="container-tentang">
                <div class="mobile-img">
                    <img src="{{ asset('images/mob-waktu.jpeg') }}" alt="">
                </div>
                <div class="tentang-text">
                    <h2>Berikut Tampilan Mobile dari PyPlant</h2>
                    <p>
                        Tampilan Page Fitur Waktu (Notifkasi)
                    </p>
                </div>
            </div>
        </section>

    {{-- footer --}}
    <footer>
        <section class="footer" id="footer">
            <p>&#169; Project Pemrograman Web Kelompok 10.</p>
        </section>
    </footer>
</body>
</html>