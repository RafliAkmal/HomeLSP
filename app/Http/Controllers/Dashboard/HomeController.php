<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use App\Models\PengajuanCuti;
use App\Models\PengunduranDiri;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  public function index ()
  {
    if (!Session::has('isLoggedIn') && !Auth::check()) {
      return redirect()->to('login');
    }

    $arrData = [
      'title'             => 'Dashboard',
      'active'            => 'Home',
      'home_active'       => 'active',
    ];

    return view('home.index', $arrData);

  }
}