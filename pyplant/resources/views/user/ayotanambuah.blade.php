<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PyPlant</title>

    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('css/user/user-main.css') }}">

    <link rel="stylesheet" href="{{ asset('css/user/ayo-tanam.css') }}">

    {{-- link font awesome --}}
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css') }}">

</head>
<body>
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

    {{-- card --}}
    <div class="card-container">
            <div class="card">
                <img src="{{ asset('images/hidroponik.jpeg') }}" alt="">
                <div class="card-content">
                    <h3>Hidroponik</h3>
                    <a href="{{ url('pilihanbuah') }}"></a>
                    <p>
                        Hidroponik adalah metode menanam tanpa tanah yang menggunakan larutan nutrisi untuk tanaman. 
                        Metode ini hemat air, memungkinkan kontrol nutrisi yang lebih baik, dan cocok untuk pertanian perkotaan 
                        karena penghematan ruang.
                    </p>
                </div>
            </div>
        <div class="card">
            <img src="{{ asset('images/pot.jpeg') }}" alt="">
            <div class="card-content">
                <h3>Pot</h3>
                <a href="{{ url('pilihanbuah') }}"></a>
                <p>
                    Pot adalah wadah untuk menanam tanaman, terbuat dari berbagai bahan seperti tanah liat, plastik, atau keramik. 
                    Memungkinkan tanaman tumbuh di dalam atau di luar ruangan dan memudahkan pemindahan.
                </p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/tanah.jpeg') }}" alt="">
            <div class="card-content">
                <h3>Tanah</h3>
                <a href="{{ url('pilihanbuah') }}"></a>
                <p>
                    Tanah adalah media untuk menamam yang mendukung pertumbuhan tanaman dengan menyediakan nutrisi, air, udara, 
                    dan dukungan bagi akar. Tanah yang baik untuk media tanam memiliki struktur yang longgar dan baik drainasenya, 
                    memungkinkan akar tanaman untuk tumbuh dengan mudah dan menyerap nutrisi yang dibutuhkan. 
                    Akan tetapi, memerlukan ruang yang cukup luas untuk dapat menggunakannya.
                </p>
                {{-- <a href="{{ url('login') }}" class="btn">Ayo Tanam!</a> --}}
            </div>
        </div>
    </div>

</body>
</html>