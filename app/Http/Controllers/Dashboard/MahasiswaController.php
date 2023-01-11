<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\DataMhs;
use Exception;

class MahasiswaController extends Controller
{
    public function index() {
        if (!Session::has('isLoggedIn')) {
            return redirect()->to('login');
        }

        $url      = env('APP_ENDPOINT_MHS');
        $nim      = session('user_username');
        $auth     = env('APP_AUTH');
        $endpoint = $url . '/' . $nim . '/' . $auth;

        $response       = Http::get($endpoint);
        $dataMhs        = json_decode($response);
        $dataMhsSiakad  = $dataMhs->isi;

        foreach($dataMhsSiakad as $data)
        {
            $nim = $data->nim;
            $nama = $data->namaLengkap;
            $prodi = $data->namaProdi;
            $fakultas = $data->namaFakultas;
            $angkatan =$data->angkatan;
        }

        $arrData = [
            'title'             => 'Verifikasi',
            'active'            => 'Home',
            'verifikasi_active' => 'active',
          ];

        // dd($dataMhsSiakad);
        return view("home.index", $arrData);
    }
}