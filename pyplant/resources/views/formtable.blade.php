<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PyPlant</title>

        {{-- link bootstrap --}}
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    </head>
    <body style="padding: 100px">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Sayur</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Cara Merawat</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">SYR1</th>
                    <td>Sawi</td>
                    <td>ini deskripsi sawi</td>
                    <td><a href="{{ url('#') }}" style="text-decoration: none;color:black"><u>cara merawat sawi</u></a></td>
                    <td>
                        <button class="btn btn-success btn-sm ml-2">Edit</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">SYR2</th>
                    <td>Wortel</td>
                    <td>ini deskripsi wortel</td>
                    <td><a href="{{ url('#') }}" style="text-decoration: none;color:black"><u>cara merawat wortel</u></a></td>
                    <td>
                        <button class="btn btn-success btn-sm ml-2">Edit</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">SYR3</th>
                    <td>Kangkung</td>
                    <td>ini deskripsi kangkung</td>
                    <td><a href="{{ url('#') }}" style="text-decoration: none;color:black"><u>cara merawat kangkung</u></a></td>
                    <td>
                        <button class="btn btn-success btn-sm ml-2">Edit</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>