<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PyPlant</title>

    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('css/user/user-main.css') }}">

    <link rel="stylesheet" href="{{ asset('css/user/detail-tanaman.css') }}">

    {{-- link font awesome --}}
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css') }}">

</head>
<body>
    {{-- navbar --}}
    <nav>
        <ul>
            <li>
                <a href="{{ url('profiluser') }}" class="logo">
                    <img src="{{ asset('images/orang.png') }}" alt="">
                    <span class="nav-item">Xiao</span>
                </a>
            </li>
            <li>
                <a href="{{ url('ayotanamsayur') }}">
                    <i class="fas fa-water"></i>
                    <span class="nav-item">Ayo Tanam!</span>
                </a>
                {{-- <ul class="sub-menu">
                    <a href="#">
                        <span class="nav-item">Sayur</span>
                    </a>
                    <a href="#">
                        <span class="nav-item">Buah</span>
                    </a>
                    <a href="#">
                        <span class="nav-item">Bunga</span>
                    </a>
                </ul> --}}
            </li>
            <li>
                <a href="{{ url('tanamanku') }}">
                    <i class="fas fa-sun"></i>
                    <span class="nav-item">Tanamanku</span>
                </a>
            </li>
            <li>
                <a href="{{ url('wishplant') }}">
                    <i class="fas fa-seedling"></i>
                    <span class="nav-item">Wishplant</span>
                </a>
            </li>
            <li>
                <a href="{{ url('historytanam') }}">
                    <i class="fas fa-history"></i>
                    <span class="nav-item">History</span>
                </a>
            </li>
            <li>
                <a href="{{ url('main') }}" class="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Logout</span>
                </a>
            </li>  
        </ul>
    </nav>

    {{-- card deskripsi lengkap --}}
    <div class="card-selengkapnya">
        <form action="#" method="#">
            <div class="gambar">
                <img src="{{ asset('images/apel.jpg') }}" alt="">
            </div>

            <div class="judul-tanaman">
                <h1>Apel</h1>
            </div>

            <div class="pilihan">
                <p><b>Kategori Tanaman:</b> Buah</p>
                <p><b>Jenis Tanaman :</b> Organik</p>
                <p><b>Media Tanam :</b> Tanah</p>
            </div>

            <div class="judul-awal">
                <h3>Deskripsi</h3>
                <p> 
                    Apel mengandung berbagai nutrisi penting seperti serat, vitamin C, vitamin A, dan kalium.
                </p>

                <h3>Cara Merawat</h3>
                <p>
                    Merawat pohon apel meliputi penyiraman teratur, pemupukan, penempatan di lokasi yang mendapat 
                    sinar matahari penuh, pemangkasan rutin, pengendalian hama dan penyakit, penjarangan buah, 
                    perlindungan musim dingin, dan pemeliharaan tanah di sekitar pohon.
                </p>

                <h3>Tanah</h3>
                <p>
                    Tanah yang cocok untuk pohon apel adalah tanah yang subur, berdrainase baik, 
                    dan memiliki pH netral hingga sedikit asam, sekitar 6,0 hingga 7,0.
                </p>

                <h3>Cuaca</h3>
                <div class="terakhir">
                    <p>
                        Iklim yang memiliki musim dingin yang sejuk dan musim panas yang hangat.
                    </p>
                </div>
            </div>

            <button type="submit" class="btn" formaction="{{ url('tanamanku') }}">Tanam</button>

            <button class="btn-icon" formaction="{{ url('wishplant') }}">
                <i class="fas fa-seedling"></i>
            </button>

        </form>
    </div>


</body>
</html>