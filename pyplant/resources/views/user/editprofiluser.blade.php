<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PyPlant</title>

    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('css/user/user-main.css') }}">

    <link rel="stylesheet" href="{{ asset('css/user/edit-profil.css') }}">

    {{-- link font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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

    <div class="judul-profil">
        <h1>Edit Profil</h1>
    </div>

    {{-- card isi profil user --}}
    <div class="card">
        <form action="#" method="#">
            <div class="form-group">
                <label for="nama_tanaman">Username</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Username" required>
            </div>
            <div class="form-group">
                <label for="nama_tanaman">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda">
            </div>
            <div class="form-group">
                <label for="deskripsi_tanaman">Nomor Telepon</label>
                <input type="text" id="nama_tanaman" name="nama_tanaman" placeholder="Masukkan Nomor Telepon Anda">
            </div>
            
            <button type="submit" class="btn" formaction="{{ url('profiluser') }}">Simpan</button>
        </form>
    </div>

</body>
</html>