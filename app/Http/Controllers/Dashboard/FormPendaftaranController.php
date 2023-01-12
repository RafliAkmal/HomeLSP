<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class FormPendaftaranController extends Controller
{
    public function skema(){
        $skema = HTTP::get(env("APP_APILSP") . "skema")['data'];
        // $skema = $skema->response();
        $this->authCheck();
        // if (!Session::has('isLoggedIn') && !Auth::check()) {
        //     return redirect()->to('login');
        //     }
        return view('formpendaftaran1',[
            'skema' => $skema
        ]); 
    }

    // public function persyaratan1(){
    //     if (!Session::has('isLoggedIn') && !Auth::check()) {
    //         return redirect()->to('login');
    //         }
    //     return view('formpendaftaran2');
    // }

    public function persyaratan2(){
        if (!Session::has('isLoggedIn') && !Auth::check()) {
            return redirect()->to('login');
            }
        return view('formpendaftaran3');
    }

    public function apl01(){
        if (!Session::has('isLoggedIn') && !Auth::check()) {
            return redirect()->to('login');
            }
        return view('formpendaftaran4');
    }

    public function apl02(){
        if (!Session::has('isLoggedIn') && !Auth::check()) {
            return redirect()->to('login');
            }
        return view('formpendaftaran5');
    }
    
    public function pemberkasan(){
        if (!Session::has('isLoggedIn') && !Auth::check()) {
            return redirect()->to('login');
            }
        return view('formpendaftaran6');
    }

    public function storePendaftaran(Request $request){
        $this->authCheck();
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
            $email =$data->email;
        }

        $createAsesi = [
            "idSkema" => $request->idSkema,
            "nama" => $nama,
            "nim" => $nim,
            "email" => $email
        ]; 

        $response = Http::post(env('APP_APILSP') . "dataAsesi", $createAsesi);
        $hasilRespons        = json_decode($response);

            return redirect()->route('createDatadiri');
        
    }

    public function createDatadiri(Request $request){
        $this->authCheck();
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
            $kelamin = $data->kelamin;
            $fakultas = $data->namaFakultas;
            $angkatan =$data->angkatan;
            $email =$data->email;
            $tempatLahir =$data->tempatLahir;
            $tanggalLahir = $data->tanggalLahir;
            $nik = $data->nik;
            $hpm = $data->hpm;
            $alamat = $data->alamat;
        }
        
        if ($kelamin === "L") {
            $kelamin = "Laki-laki";
        }
        else {
         $kelamin = "Perempuan";   
        }
        

            return view('/formpendaftaran2', [
                "nama" => $nama,
                "kelamin" => $kelamin,
                "nim" => $nim,
                "fakultas" => $fakultas,
                "prodi" => $prodi,
                "tempatLahir" => $tempatLahir,
                "tanggalLahir" => $tanggalLahir,
                "nik" => $nik,
                "hpm" => $hpm,
                "alamat" => $alamat,
            ]);
        
    }

    public function storeDatadiri(Request $request){
        $this->authCheck();
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
            $kelamin = $data->kelamin;
            $fakultas = $data->namaFakultas;
            $angkatan =$data->angkatan;
            $email =$data->email;
            $tempatLahir =$data->tempatLahir;
            $tanggalLahir = $data->tanggalLahir;
            $nik = $data->nik;
            $hpm = $data->hpm;
            $alamat = $data->alamat;
        }

        $createDatadiri = [
            "idPendaftaran" => $request->idPendaftaran,
            "nama" => $nama,
            "kelamin" => $kelamin,
            "nim" => $nim,
            "fakultas" => $fakultas,
            "prodi" => $prodi,
            "tempatLahir" => $tempatLahir,
            "tanggalLahir" => $tanggalLahir,
            "nik" => $nik,
            "hpm" => $hpm,
            "alamat" => $alamat,
        ]; 

        $response = Http::post(env('APP_APILSP') . "dataDiri", $createDatadiri);
        $hasilRespons        = json_decode($response);

            return redirect()->route('createDatadiri');
        
    }

}
