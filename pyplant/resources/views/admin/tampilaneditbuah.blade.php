<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - PyPlant</title>

    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('css/admin/admin-main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/tabel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/selengkapnya.css') }}">

    {{-- link ionic --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    {{-- link font awesome --}}
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css') }}">

</head>
<body>
    {{-- navbar --}}
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name=""></ion-icon></span>
                        <span class="title"><b>PyPlant | Admin</b></span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('sayur') }}">
                        <span class="icon"><ion-icon name="leaf"></ion-icon></span>
                        <span class="title">Sayur</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('buah') }}">
                        <span class="icon"><ion-icon name="nutrition"></ion-icon></span>
                        <span class="title">Buah</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('bunga') }}">
                        <span class="icon"><ion-icon name="flower"></ion-icon></span>
                        <span class="title">Bunga</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('main') }}">
                        <span class="icon"><ion-icon name="exit"></ion-icon></span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- card deskripsi lengkap --}}
    <div class="card-selengkapnya">
        <form action="#" method="#">
            <div class="gambar">
                <img src="{{ asset('images/apel.jpg') }}" alt="">
            </div>

            <div class="judul-tanaman">
                <h1>Apel</h1>
                <p>FRT1</p>
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

            <div class="btn-edit">
                <button type="submit" class="btn" formaction="{{ url('editbuah') }}">
                    <i class="fa fa-pencil"></i>
                </button>
            </div>
        </form>
    </div>

        {{-- javascript --}}
        <script type="text/javascript">

        let list = document.querySelectorAll(".navigation li");

        function activeLink(){
            list.forEach((item) => {
                item.classList.remove("hovered");
            })
            this.classList.add("hovered");
        }

        list.forEach(item => item.addEventListener("mouseover", activeLink))

        </script>

</body>
</html>