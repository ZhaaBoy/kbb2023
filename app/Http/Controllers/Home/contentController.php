<?php

namespace App\Http\Controllers\Home;

use App\Models\acara;
use App\Models\artikel;
use Illuminate\Http\Request;
use App\Models\jadwal_sharing;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class contentController extends Controller
{
    public function  home()
    {
        return view('include-content.home');
    }

    public function tentang()
    {

        return view('include-content.tentang');
    }


    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
        // mengambil data dari table pegawai sesuai pencarian data
        $dosens = DB::table('dosens')
            ->where('nama', 'like', "%" . $cari . "%")
            ->paginate();
        // mengirim data pegawai ke view index
        return view('include-content.data_dosen', compact('dosens', 'footers'));
    }


    public function sharing()
    {
        $sharings = jadwal_sharing::all();
        return view('include-content.sharing', compact('sharings'));
    }

    public function tutorial()
    {
        return view('include-content.tutorial');
    }

    public function agenda()
    {
        $acaras = acara::all();
        return view('include-content.agenda', compact('acaras'));
    }

    public function artikel()
    {
        $artikels = artikel::all();
        return view('include-content.artikel', compact('artikels'));
    }

    public function klinik()
    {
        return view('include-content.klinik');
    }

    public function detailAgenda(acara $acara)
    {
        return view('include-content.detail_agenda', compact('acara'));
    }

    public function detailArtikel(artikel $artikel)
    {

        return view('include-content.detail_artikel', compact('artikel'));
    }

}
