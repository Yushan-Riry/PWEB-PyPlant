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
                <img src="{{ asset('images/sawi.jpg') }}" alt="">
            </div>

            <div class="judul-tanaman">
                <h1>Sawi</h1>
            </div>

            <div class="pilihan">
                <p><b>Kategori Tanaman:</b> Sayur</p>
                <p><b>Jenis Tanaman :</b> Organik</p>
                <p><b>Media Tanam :</b> Hidroponik</p>
            </div>

            <div class="judul-awal">
                <h3>Deskripsi</h3>
                <p> 
                    Sawi adalah sekelompok tumbuhan dari genus Brassica 
                    yang dimanfaatkan daun atau bunganya sebagai bahan pangan, baik segar maupun diolah. 
                </p>

                <h3>Cara Merawat</h3>
                <p>
                    Merawat sawi dengan cara menyiram secara teratur, memberi pupuk, memberikan sinar matahari yang cukup, 
                    membersihkan gulma, mengendalikan hama dan penyakit, menjarang tanaman yang terlalu rapat, 
                    dan memanen daun yang sudah cukup besar untuk dipetik.
                </p>

                <h3>Tanah</h3>
                <p>
                    Tanah yang gembur, kaya akan bahan organik, dan memiliki drainase yang baik. 
                    Tanah yang sedikit asam hingga netral (pH sekitar 6.0-7.0).
                </p>

                <h3>Cuaca</h3>
                <div class="terakhir">
                    <p>
                        Iklim yang sejuk hingga sedang.
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