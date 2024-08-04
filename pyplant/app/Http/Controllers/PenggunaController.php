<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function register(Request $request)
    {

        $status = "";

        if (strpos($request->input('Username'), 'Admin') !== false) {
            $status = "1";
        } else {
            $status = "0";
        }
        $pengguna = Pengguna::create([
            'username_pengguna' =>  $request->input('Username'),
            'nama_pengguna' => $request->input('Username'),
            'telp_pengguna' => "00000",
            'password_pengguna' => $request->input('Password'),
            'status_pengguna' => $status,
        ]);



        return redirect('login');
    }

    public function masuk_proses(Request $request)
    {
        $pengguna = Pengguna::where(['username_pengguna' => $request->Username])->first();
        if ($pengguna) {
            $request->session()->put('pengguna', $pengguna);
            if ($pengguna->status_pengguna == "1") {
                return redirect('admin');
            } elseif ($pengguna->status_pengguna == "0") {
                return redirect('user');
            }
        } else {
            return response()->json(['message' => 'username or password is not match']);
        }
    }
}
