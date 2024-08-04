<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PyPlant</title>

    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>
    <header>
        {{-- navbar --}}
        <nav>
            <a href="{{ url('main') }}" class="logo"><img width="150px" src="{{ asset('images/pyplant_logo.png') }}"  alt=""></a>
            {{-- <a href="{{ url('tes') }}" class="icon-orang"><img width="30px" src="{{ asset('images/orang.png') }}"  alt=""></a> --}}
        </nav>
    </header>

    <div class="container" id="container">
        {{-- form daftar --}}
        <div class="form-container sign-up">
            <form method="POST" action="{{ route('register.submit') }}">
                @csrf
                <h1>Buat Akun Anda</h1>
                <input type="text" name="Username"
                placeholder="Username" required>
                <input type="text" name="Password"
                placeholder="Kata Sandi" required>
                <button>Daftar</button>
            </form>
        </div>

        {{-- form masuk --}}
        <div class="form-container sign-in">
            <form method="POST" action="{{ route('masuk_proses.submit') }}">
                @csrf
                <h1>Masuk</h1>
                <input type="text"
                placeholder="Username" name="Username" required>
                <input type="password"  name="Password"
                placeholder="Kata Sandi" required>
                <button>Masuk</button>
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Selamat Datang Kembali!</h1>
                    <p>Masukkan kembali akun yang telah Anda buat sebelumnya.</p>
                    <button class="hidden" id="login">Masuk</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Halo!</h1>
                    <p>Buat akun Anda terlebih dahulu agar bisa lebih mengenal PyPlant.</p>
                    <button class="hidden" id="register">Daftar</button>
                </div>
            </div>
        </div>

    </div>

    {{-- javascript --}}
    <script type="text/javascript">

    document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('container');
    const registerBtn = document.getElementById('register');
    const loginBtn = document.getElementById('login');

    // console.log('Container element:', container);
    // console.log('Register button element:', registerBtn);
    // console.log('Login button element:', loginBtn);

        if (registerBtn) {
            registerBtn.addEventListener('click', function() {
                console.log('Button Register clicked');
                container.classList.add("active");
            });
        }

        if (loginBtn) {
            loginBtn.addEventListener('click', function() {
                console.log('Button Login clicked');
                container.classList.remove("active");
            });
        }
    });

    </script>
    
</body>
</html>