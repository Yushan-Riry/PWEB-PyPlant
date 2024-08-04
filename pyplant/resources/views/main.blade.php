<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PyPlant</title>

    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    {{-- box icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>


<body>
    {{-- beranda --}}
    <section class="beranda" id="beranda">
        <div class="circle"></div>
        <header>
            <a href="{{ url('main') }}" class="logo"><img width="150px" src="{{ asset('images/pyplant_logo.png') }}"  alt=""></a>
            <div class="bx bx-menu" id="menu-icon"></div>

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

        <div class="content">
            <div class="textBox">
                <h2>Selamat Datang di PyPlant!</h2>
                <p>
                    Mari menanam dan merawat tanaman <br>
                    dengan cara yang cepat, tepat, dan mudah <br>
                    bersama PyPlant.
                </p>
                <a href="{{ url('menusatumain') }}">Selengkapnya</a>
            </div>

            <div class="imgBox">
                <img src="{{ asset('images/sayur.png') }}" class="gambar" alt="">
            </div>
        </div>

        <ul class="tigabawah">
            <li><img src="{{ asset('images/sayur.png') }}" onclick="imgSlider('{{ asset('images/sayur.png') }}'); 
            changeCircleColor('#017143')" alt=""></li>
            <li><img src="{{ asset('images/buah.png') }}" onclick="imgSlider('{{ asset('images/buah.png') }}');
            changeCircleColor('#eb7495')" alt=""></li>
            <li><img src="{{ asset('images/bunga.png') }}" onclick="imgSlider('{{ asset('images/bunga.png') }}');
            changeCircleColor('#d752b1')" alt=""></li>
        </ul>

    </section>

    {{-- tentang --}}
    <section class="tentang" id="tentang">
        <div class="heading">
            <span>Tentang Kami</span>
            <h1>"PyPlant"</h1>
        </div>
        <div class="container-tentang">
            <div class="tentang-img">
                <img src="{{ asset('images/pyplant-main-1.jpg') }}" alt="">
            </div>
            <div class="tentang-text">
                <h2>Happy Plant</h2>
                <p>Happy Plant atau yang kami singkat dengan sebutan PyPlant ini merupakan project yang kami tujukan bagi para pemula 
                    dalam dunia pertanian. Project ini menyediakan panduan langkah demi langkah dalam menanam dan merawat tanaman. 
                    Selain itu, project kami juga memberikan informasi terkait cuaca dan kondisi tanah agar dapat lebih memudahkan 
                    pengguna, membantu mereka untuk membuat keputusan yang lebih baik dalam proses bercocok tanam. Dengan fitur-fitur 
                    yang disediakan.
                </p>
                <p>
                    Project ini kami harapkan dapat menjadi sesuatu hal yang berguna bagi para penggemar pertanian 
                    yang ingin memulai hobi atau usaha pertanian mereka.
                </p>
            </div>
        </div>
    </section>

    {{-- mobile --}}
    <section class="mobile" id="mobile">
        <div class="heading">
            <span>Aplikasi Mobile</span>
            <h1>PyPlant siap menjadi pengingatmu</h1>
        </div>
        <div class="container-mobile">
            <div class="mobile-text">
                <h2>Fitur Notifikasi</h2>
                <p>
                    Salah satu keunggulan utama dari proyek ini adalah kemampuannya untuk memberikan informasi yang relevan terkait 
                    cuaca dan kondisi tanah, yang menjadi faktor kunci dalam keberhasilan bercocok tanam. Dengan demikian, pengguna 
                    dapat membuat keputusan yang lebih baik dalam proses menanam dan merawat tanaman mereka.
                </p>
                <p>
                    Fitur notifikasi di aplikasi mobile juga menjadi salah satu tambahan yang bernilai dalam PyPlant. 
                    Notifikasi ini akan memberi pengguna peringatan atau pemberitahuan penting terkait perawatan tanaman mereka, 
                    seperti waktu yang tepat untuk penyiraman, pemupukan, atau perlindungan terhadap hama dan penyakit.
                </p>
                <a href="{{ url('menuduamain') }}">Selengkapnya</a>
            </div>
            <div class="mobile-img">
                <img src="{{ asset('images/mob-main.jpeg') }}" alt="">
            </div>
        </div>
    </section>

    {{-- kontak --}}
    <section class="kontak" id="kontak">
        <div class="kontak-img">
            <img src="{{ asset('images/kontak.jpg') }}" alt="">
        </div>
        <div class="kontak-text">
            <h2>Kontak Kami</h2>
            <p>
                Berikut merupakan kontak dari kami pengembang project dari PyPlant
            </p>
            <p>
                Riry | Grace
                <br>
                @riry.0403_ | @graceagt_
            </p>
        </div>
    </section>

    {{-- footer --}}
    <footer>
        <section class="footer" id="footer">
            <p>&#169; Project Pemrograman Web Kelompok 10.</p>
        </section>
    </footer>

    {{-- javascript --}}
    <script type="text/javascript">

        // ganti lingkaran
        function imgSlider(anything){
            document.querySelector('.gambar').src = anything;
        }

        // ganti lingkaran
        function changeCircleColor(color){
            const circle = document.querySelector('.circle');
            circle.style.background = color;
        }
    </script>
</body>
</html>