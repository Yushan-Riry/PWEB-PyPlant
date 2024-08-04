<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - PyPlant</title>

    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('css/admin/admin-main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/tambah.css') }}">

    {{-- link ionic --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


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

    {{-- card tambah data --}}
    <div class="card">
        <form action="#" method="#">
            <div class="form-group">
                <label for="jenis-kategori-tanaman">Kategori Tanaman</label>
                <select id="jenis-kategori-tanaman" name="jenis-kategori-tanaman" required>
                    <option value="sayur">Sayur</option>
                    <option value="buah">Buah</option>
                    <option value="bunga">Bunga</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jenis-tanaman">Jenis Tanaman</label>
                <select id="jenis-tanaman" name="jenis-tanaman" required>
                    <option value="organik">Organik</option>
                    <option value="anorganik">Anorganik</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jenis-media-tanam">Media Tanam</label>
                <select id="jenis-media-tanam" name="jenis-media-tanam" required>
                    <option value="hidroponik">Hidroponik</option>
                    <option value="pot">Pot</option>
                    <option value="tanah">Tanah</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama_tanaman">Nama Tanaman</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Tanaman" required>
            </div>
            <div class="form-group">
                <label for="nama_tanaman">ID Tanaman</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan ID Tanaman" required>
            </div>
            <div class="form-group">
                <label for="deskripsi_tanaman">Deskripsi</label>
                <input type="text" id="nama_tanaman" name="nama_tanaman" placeholder="Masukkan Deskripsi Tanaman" required>
            </div>
            <div class="form-group">
                <label for="cara_merawat">Cara Merawat</label>
                <textarea type="text" id="cara_merawat" name="cara_merawat" placeholder="Masukkan Cara Merawat Tanaman" required></textarea>
            </div>
            <div class="form-group">
                <label for="jenis_tanah">Tanah</label>
                <textarea type="text" id="jenis_tanah" name="jenis_tanah" placeholder="Masukkan Jenis Tanah Tanaman" required></textarea>
            </div>
            <div class="form-group">
                <label for="cuaca_tanaman">Cuaca</label>
                <textarea type="text" id="cuaca_tanaman" name="cuaca_tanaman" placeholder="Masukkan Jenis Cuaca Tanaman" required></textarea>
            </div>
            <div class="form-group">
                <label for="umur">Masukkan Gambar</label>
                <input type="file" id="gambar" name="gambar" accept="image/*" required>
            </div>
            
            <button type="submit" class="btn" formaction="{{ url('tampilaneditbunga') }}">Simpan</button>
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