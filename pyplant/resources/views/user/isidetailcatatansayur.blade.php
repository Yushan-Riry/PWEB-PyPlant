<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PyPlant</title>

    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('css/user/user-main.css') }}">

    <link rel="stylesheet" href="{{ asset('css/user/catatantanaman.css') }}">

    <link rel="stylesheet" href="{{ asset('css/user/wishplant.css') }}">

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

    {{-- card catatan tanaman --}}
    <div class="card-container">
        <div class="card">
            <img src="{{ asset('images/tumbuh.jpeg') }}" alt="">
            <div class="card-content">
                <p>Hari ini aku mulai menanam biji sawi, semoga tubuh subur dan lebat!</p>
            </div>
        </div>
</div>

</body>
</html>