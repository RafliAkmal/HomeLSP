<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index(){
        $this->authCheck();
        return view('pendaftaran');
    }
}
