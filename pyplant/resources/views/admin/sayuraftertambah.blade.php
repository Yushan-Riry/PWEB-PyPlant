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

    <div class="judul">
        <h1>Sayur</h1>
        <form action="{{ url('tambahsayur') }}">
        <button class="tambah">
            +
        </button>
    </div>

    {{-- tabel --}}
    <div class="table">
        <section class="table_body">
            <table>
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Gambar </th>
                        <th> Nama Sayur </th>
                        <th> Deskripsi </th>
                        <th>  </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> VGT1 </td>
                        <td><img src="{{ asset('images/sawi.jpg') }}" alt=""></td>
                        <td> Sawi </td>
                        <td> <a href="{{ url('selengkapnyasayur') }}" style="text-decoration: none;color:black"><u>Selengkapnya</u></a> </td>
                        <td>
                            <button type="delete" class="delete-button" formaction="{{ url('sayur') }}">
                                <i class="fas fa-trash-alt"></i> 
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td> VGT2 </td>
                        <td><img src="{{ asset('images/wortel.jpg') }}" alt=""></td>
                        <td> Wortel </td>
                        <td> <a href="{{ url('#') }}" style="text-decoration: none;color:black"><u>Selengkapnya</u></a> </td>
                        <td>
                            <button type="delete" class="delete-button" formaction="{{ url('sayur') }}">
                                <i class="fas fa-trash-alt"></i> 
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
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