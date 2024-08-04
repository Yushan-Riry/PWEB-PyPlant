<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanaman;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // kembali ke resources -> views -> front
        return view('main');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // navbar
    public function main()
    {
        return view('main');
    }

    //dua menu dari main
    public function menusatumain()
    {
        return view('menusatumain');
    }

    public function menuduamain()
    {
        return view('menuduamain');
    }

    // login
    public function login()
    {
        return view('login');
    }

    // admin
    public function admin()
    {
        return view('admin.admin-main');
    }

    public function profiladmin()
    {
        return view('admin.profiladmin');
    }

    public function sayur()
    {
        $DataSayur['sayur'] = Tanaman::get();

        return view('admin.sayur', [
            'Data' => $DataSayur['sayur'],
            'title' => 'Daftar Sayur'
        ]);
        // return view('admin.sayur',);
    }

    public function buah()
    {
        return view('admin.buah');
    }

    public function bunga()
    {
        return view('admin.bunga');
    }

    public function tambahsayur()
    {
        return view('admin.tambahsayur');
    }

    public function tambahbuah()
    {
        return view('admin.tambahbuah');
    }

    public function tambahbunga()
    {
        return view('admin.tambahbunga');
    }

    public function selengkapnyasayur($id)
    {
        $tanaman = Tanaman::join('jenis_tanaman', 'tanaman.id_jenis_tanaman', '=', 'jenis_tanaman.id_jenis_tanaman')
            ->join('kategori_tanaman', 'tanaman.id_kategori_tanaman', '=', 'kategori_tanaman.id_kategori_tanaman')
            ->join('media_tanam', 'tanaman.id_media_tanam', '=', 'media_tanam.id_media_tanam')
            ->where('tanaman.id_tanaman', $id)
            ->select('tanaman.*', 'jenis_tanaman.nama_jenis_tanaman as nama_jenis', 'kategori_tanaman.nama_kategori_tanaman as nama_kategori', 'media_tanam.nama_media_tanam as nama_media')
            ->firstOrFail();



        return view('admin.selengkapnyasayur', ['tanaman' => $tanaman]);
    }

    public function selengkapnyabuah()
    {
        return view('admin.selengkapnyabuah');
    }

    public function selengkapnyabunga()
    {
        return view('admin.selengkapnyabunga');
    }

    public function editsayur(Request $request, $id)
    {


        $jenisKategori = $request->input('jenis-kategori-tanaman');
        $jenisTanaman = $request->input('jenis-tanaman');
        $jenisMedia = $request->input('jenis-media-tanam');



        $idKategori = 0;
        $idjenisTanaman = 0;
        $idMedia = 0;

        if ($jenisKategori == "sayur") {
            $idKategori = 0;
        } else if ($jenisKategori == "buah") {
            $idKategori = 1;
        } else if ($jenisKategori == "bunga") {
            $idKategori = 2;
        }

        if ($jenisTanaman == "organik") {
            $idjenisTanaman = 0;
        } else if ($jenisTanaman == "anorganik") {
            $idjenisTanaman = 1;
        }

        if ($jenisMedia == "hidroponik") {
            $idMedia = 0;
        } else if ($jenisMedia == "pot") {
            $idMedia = 1;
        } else if ($jenisMedia == "tanah") {
            $idMedia = 2;
        }


        $file = $request->file('gambar');
        $binaryData = file_get_contents($file->getRealPath());


        $data = [
            'id_tanaman' => $request->input('id_tanaman'),
            'id_media_tanam' =>  $idMedia,
            'id_jenis_tanaman' => $idjenisTanaman,
            'id_kategori_tanaman' => $idKategori,
            'nama_tanaman' => $request->input('nama_tanaman'),
            'deskripsi_tanaman' => $request->input('deskripsi_tanaman'),
            'cara_merawat_tanaman' => $request->input('cara_merawat_tanaman'),
            'tanah_tanaman' => $request->input('tanah_tanaman'),
            'cuaca_tanaman' => $request->input('cuaca_tanaman'),
            'gambar_tanaman' => $binaryData

        ];



        $tanaman = Tanaman::findOrFail($id);
        $tanaman->update($data);


        $DataSayur['sayur'] = Tanaman::get();

        return view('admin.sayur', [
            'Data' => $DataSayur['sayur'],
            'title' => 'Daftar Sayur'
        ]);
    }

    public function edit_sayur_get($id)
    {

        $tanaman = Tanaman::join('jenis_tanaman', 'tanaman.id_jenis_tanaman', '=', 'jenis_tanaman.id_jenis_tanaman')
            ->join('kategori_tanaman', 'tanaman.id_kategori_tanaman', '=', 'kategori_tanaman.id_kategori_tanaman')
            ->join('media_tanam', 'tanaman.id_media_tanam', '=', 'media_tanam.id_media_tanam')
            ->where('tanaman.id_tanaman', $id)
            ->select('tanaman.*', 'jenis_tanaman.nama_jenis_tanaman as nama_jenis', 'kategori_tanaman.nama_kategori_tanaman as nama_kategori', 'media_tanam.nama_media_tanam as nama_media')
            ->firstOrFail();

        return view('admin.editsayur', ['tanaman' => $tanaman]);
    }

    public function editbuah()
    {
        return view('admin.editbuah');
    }

    public function editbunga()
    {
        return view('admin.editbunga');
    }

    public function sayuraftertambah(Request $request)
    {
        $jenisKategori = $request->input('jenis-kategori-tanaman');
        $jenisTanaman = $request->input('jenis-tanaman');
        $jenisMedia = $request->input('jenis-media-tanam');

        echo $jenisKategori;

        $idKategori = 0;
        $idjenisTanaman = 0;
        $idMedia = 0;

        if ($jenisKategori == "sayur") {
            $idKategori = 0;
        } else if ($jenisKategori == "buah") {
            $idKategori = 1;
        } else if ($jenisKategori == "bunga") {
            $idKategori = 2;
        }

        if ($jenisTanaman == "organik") {
            $idjenisTanaman = 0;
        } else if ($jenisTanaman == "anorganik") {
            $idjenisTanaman = 1;
        }

        if ($jenisMedia == "hidroponik") {
            $idMedia = 0;
        } else if ($jenisMedia == "pot") {
            $idMedia = 1;
        } else if ($jenisMedia == "tanah") {
            $idMedia = 2;
        }


        $file = $request->file('gambar');
        $binaryData = file_get_contents($file->getRealPath());


        $data = [
            'id_tanaman' => $request->input('id_tanaman'),
            'id_media_tanam' =>  $idMedia,
            'id_jenis_tanaman' => $idjenisTanaman,
            'id_kategori_tanaman' => $idKategori,
            'nama_tanaman' => $request->input('nama_tanaman'),
            'deskripsi_tanaman' => $request->input('deskripsi_tanaman'),
            'cara_merawat_tanaman' => $request->input('cara_merawat_tanaman'),
            'tanah_tanaman' => $request->input('tanah_tanaman'),
            'cuaca_tanaman' => $request->input('cuaca_tanaman'),
            'gambar_tanaman' => $binaryData

        ];


        Tanaman::create($data);


        $DataSayur['sayur'] = Tanaman::get();

        return view('admin.sayur', [
            'Data' => $DataSayur['sayur'],
            'title' => 'Daftar Sayur'
        ]);
    }

    public function buahaftertambah()
    {
        return view('admin.buahaftertambah');
    }

    public function bungaaftertambah()
    {
        return view('admin.bungaaftertambah');
    }

    public function tampilaneditsayur()
    {
        return view('admin.tampilaneditsayur');
    }

    public function tampilaneditbuah()
    {
        return view('admin.tampilaneditbuah');
    }

    public function tampilaneditbunga()
    {
        return view('admin.tampilaneditbunga');
    }

    //user
    public function user()
    {
        return view('user.user-main');
    }

    public function profiluserawal()
    {
        return view('user.profiluserawal');
    }

    public function profiluser()
    {
        return view('user.profiluser');
    }

    public function editprofiluser()
    {
        return view('user.editprofiluser');
    }

    public function ayotanamsayur()
    {
        return view('user.ayotanamsayur');
    }

    public function ayotanambuah()
    {
        return view('user.ayotanambuah');
    }

    public function ayotanambunga()
    {
        return view('user.ayotanambunga');
    }

    public function pilihansayur()
    {
        return view('user.pilihansayur');
    }

    public function pilihanbuah()
    {
        return view('user.pilihanbuah');
    }

    public function pilihanbunga()
    {
        return view('user.pilihanbunga');
    }

    public function tanamsayur()
    {
        return view('user.tanamsayur');
    }

    public function tanambuah()
    {
        return view('user.tanambuah');
    }

    public function tanambunga()
    {
        return view('user.tanambunga');
    }

    public function detailsayur()
    {
        return view('user.detailsayur');
    }

    public function detailbuah()
    {
        return view('user.detailbuah');
    }

    public function detailbunga()
    {
        return view('user.detailbunga');
    }

    public function tanamanku()
    {
        return view('user.tanamanku');
    }

    public function wishplant()
    {
        return view('user.wishplant');
    }

    public function catatantanaman()
    {
        return view('user.catatantanaman');
    }

    public function historytanam()
    {
        return view('user.historytanam');
    }

    public function historycatatan()
    {
        return view('user.historycatatan');
    }

    public function detailcatatansayur()
    {
        return view('user.detailcatatansayur');
    }

    public function detailcatatanbuah()
    {
        return view('user.detailcatatanbuah');
    }

    public function detailcatatanbunga()
    {
        return view('user.detailcatatanbunga');
    }

    public function isidetailcatatansayur()
    {
        return view('user.isidetailcatatansayur');
    }

    public function destroy_sayur(string $id)
    {
        //
        $tanaman = Tanaman::where('id_tanaman', $id)->first();
        if ($tanaman) {
            $tanaman->delete();
            return response()->json(['message' => 'Data berhasil dihapus'], 200);
        } else {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
    }
}
