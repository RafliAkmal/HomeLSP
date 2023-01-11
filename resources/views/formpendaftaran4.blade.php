
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logo_lsp.png">
  <link rel="icon" type="image/png" href="../assets/img/logo_lsp.png">
  <title>
    Dashboard | LSP-P1 UNJ
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/stepbar.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</head>


<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100">
  </div>

  
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Halaman</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Pendaftaran</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Pendaftaran</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Selamat Datang, {{ session('user_name') }}</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <a class="btn-link" href="pendaftaran"> 
        <button class="btn btn-icon btn-sm btn-secondary mx-4" type="button">
          <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
          <span class="btn-inner--text">Kembali</span>
        </button>
      </a>

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
  <section class="mt-5" style="min-height: 40vh;">
        <div class="container">
          <div class="row d-flex">
            <div class="col">
              <ul class="justify-content-center">
                <li>
                    <i class="icon uil uil-capture"></i>
                    <div class="progress one active">
                        <p></p>
                        <i class="uil uil-check"></i>
                    </div>
                    <p class="text">Pemilihan Skema</p>
                </li>
                <li>
                    <i class="icon uil uil-clipboard-notes"></i>
                    <div class="progress two active">
                        <p></p>
                        <i class="uil uil-check"></i>
                    </div>
                    <p class="text">Persyaratan</p>
                </li>
                <li>
                    <i class="icon uil uil-credit-card"></i>
                    <div class="progress three">
                        <p></p>
                        <i class="uil uil-check"></i>
                    </div>
                    <p class="text">APL 0.1</p>
                </li>
                <li>
                    <i class="icon uil uil-exchange"></i>
                    <div class="progress four">
                        <p></p>
                        <i class="uil uil-check"></i>
                    </div>
                    <p class="text">APL 0.2</p>
                </li>
                <li>
                    <i class="icon uil uil-map-marker"></i>
                    <div class="progress five">
                        <p></p>
                        <i class="uil uil-check"></i>
                    </div>
                    <p class="text">Pemberkasan</p>
                </li>
            </ul>
            </div>
          </div>
         

                <h4 class="fw-bolder" style="color: #7D8F69;">Pengisian APL.01 Permohonan Sertifikasi Kompetensi</h1>
                <h5 class="mt-4 mb-2" style="color: #547153">Silakan Mengisi Data APL.01 Terlebih Dahulu</h5>
                <h6 class="fw-bolder mt-2 mb-2" style="color: #547153">Bagian 1 : Rincian Data Pemohon Sertifikasi</h6>
                <h6 class="mt-2 mb-2" style="color: #547153">a. Data Pribadi</h6>
                
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nama</label>
                    <input class="form-control" type="text" value="" id="example-text-input">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nomor KTP/NIK/Paspor</label>
                    <input class="form-control" type="text" value="" id="example-text-input">
                  </div>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Tempat Lahir</label>
                    <input class="form-control" type="text" value="" id="example-text-input">
                  </div>
                 <div class="form-group">
                  <label for="example-date-input" class="form-control-label">Tanggal Lahir</label>
                  <input class="form-control" type="date" value="" id="example-date-input">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option disabled selected>---Pilih Jenis Kelamin---</option>
                      <option>Laki-laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Kebangsaan</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option disabled selected>---Pilih Kebangsaan---</option>
                      <option>Indonesia</option>
                      <option>Kebangsaan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Alamat Lengkap (Sesuai KTP)</label>
                    <input class="form-control" type="text" value="" id="example-text-input">
                  </div>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Kode Pos</label>
                    <input class="form-control" type="text" value="" id="example-text-input">
                  </div>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">No. Telp Rumah</label>
                    <input class="form-control" type="text" value="" id="example-text-input">
                  </div>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">E-mail</label>
                    <input class="form-control" type="text" value="" id="example-text-input">
                  </div>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">No. Handphone</label>
                    <input class="form-control" type="text" value="" id="example-text-input">
                  </div>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Kualifikasi Pendidikan</label>
                    <input class="form-control" type="text" value="" id="example-text-input">
                  </div>

                  <h6 class="mt-2 mb-2" style="color: #547153">b. Data Pekerjaan Sekarang</h6>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Kualifikasi Pendidikan</label>
                    <input class="form-control" type="text" value="" id="example-text-input">
                  </div>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Jabatan</label>
                    <input class="form-control" type="text" value="" id="example-text-input">
                  </div>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Alamat Kantor</label>
                    <input class="form-control" type="text" value="" id="example-text-input">
                  </div>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Kode Pos Kantor</label>
                    <input class="form-control" type="text" value="" id="example-text-input">
                  </div>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">No. Telp Kantor</label>
                    <input class="form-control" type="text" value="" id="example-text-input">
                  </div>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">E-mail Kantor</label>
                    <input class="form-control" type="text" value="" id="example-text-input">
                  </div>
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Fax Kantor</label>
                    <input class="form-control" type="text" value="" id="example-text-input">
                  </div>

                  <h6 class="fw-bolder mt-6 mb-2" style="color: #547153">Bagian 2 : Data Sertifikasi</h6>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Judul Skema</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option disabled selected>--- Pelaksanaan Program Pelatihan Tatap Muka ---</option>
                      <option></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Nomor Skema</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option disabled selected>--- 03/SS.II/PEND./LSPP1-UNJ/2020 ---</option>
                      <option></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Tujuan Asesmen</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option disabled selected>--- Sertifikasi ---</option>
                      <option></option>
                    </select>
                  </div>

                  <h6 class="fw-bolder mt-6 mb-2" style="color: #547153">Daftar Unit Kompetensi Sesuai Kemasan</h6>
                  <div class="card">
                    <div class="table-responsive">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kode Unit</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul Unit</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">SKKNI</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xs">1</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">P. 854900.011.01</p>
                            </td>
                            <td>
                              <span class="badge badge-dot me-4">
                                <i class="bg-info"></i>
                                <span class="text-dark text-xs">Menyusun Program Pelatihan</span>
                              </span>
                            </td>
                            <td class="align-middle text-center">
                              <div class="d-flex align-items-center">
                                <span class="me-2 text-xs">SKKNI No. 161/2015</span>
                                <div>
                                </div>
                              </div>
                            </td>
                          </tr>
                  
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xs">2</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">P. 854900.013.01</p>
                            </td>
                            <td>
                              <span class="badge badge-dot me-4">
                                <i class="bg-success"></i>
                                <span class="text-dark text-xs">Mendesain Media Pembelajaran</span>
                              </span>
                            </td>
                            <td class="align-middle text-center">
                              <div class="d-flex align-items-center">
                                <span class="me-2 text-xs">SKKNI No. 161/2015</span>
                                <div>
                                </div>
                              </div>
                            </td>
                          </tr>
                  
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xs">3</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">P. 854900.016.01</p>
                            </td>
                            <td>
                              <span class="badge badge-dot me-4">
                                <i class="bg-danger"></i>
                                <span class="text-dark text-xs">Merencanakan Penyajian Materi Pelatihan</span>
                              </span>
                            </td>
                            <td class="align-middle text-center">
                              <div class="d-flex align-items-center">
                                <span class="me-2 text-xs">SKKNI No. 161/2015</span>
                                <div>
                                </div>
                              </div>
                            </td>
                          </tr>
                  
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xs">4</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">P. 854900.016.01</p>
                            </td>
                            <td>
                              <span class="badge badge-dot me-4">
                                <i class="bg-danger"></i>
                                <span class="text-dark text-xs">Merencanakan Penyajian Materi Pelatihan</span>
                              </span>
                            </td>
                            <td class="align-middle text-center">
                              <div class="d-flex align-items-center">
                                <span class="me-2 text-xs">SKKNI No. 161/2015</span>
                                <div>
                                </div>
                              </div>
                            </td>
                          </tr>
                  
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xs">5</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">P.854900.031.01</p>
                            </td>
                            <td>
                              <span class="badge badge-dot me-4">
                                <i class="bg-info"></i>
                                <span class="text-dark text-xs">Mengelola Bahan Pelatihan</span>
                              </span>
                            </td>
                            <td class="align-middle text-center">
                              <div class="d-flex align-items-center">
                                <span class="me-2 text-xs">SKKNI No. 161/2015</span>
                                <div>
                                </div>
                              </div>
                            </td>
                          </tr>
                  
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xs">6</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">P.854900.032.01</p>
                            </td>
                            <td>
                              <span class="badge badge-dot me-4">
                                <i class="bg-success"></i>
                                <span class="text-dark text-xs">Mengelola Media Pelatihan</span>
                              </span>
                            </td>
                            <td class="align-middle text-center">
                              <div class="d-flex align-items-center">
                                <span class="me-2 text-xs">SKKNI No. 161/2015</span>
                                <div>
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xs">7</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">P.854900.033.01</p>
                            </td>
                            <td>
                              <span class="badge badge-dot me-4">
                                <i class="bg-success"></i>
                                <span class="text-dark text-xs">Mengelola Peralatan Pelatihan</span>
                              </span>
                            </td>
                            <td class="align-middle text-center">
                              <div class="d-flex align-items-center">
                                <span class="me-2 text-xs">SKKNI No. 161/2015</span>
                                <div>
                                </div>
                              </div>
                            </td>
                          </tr>
                  
                        </tbody>
                      </table>
                    </div>
                    </div>

                    <h6 class="fw-bolder mt-6 mb-2" style="color: #547153">Bagian 3: Bukti Kelengkapan Persyaratan Dasar Pemohon</h6>
                    <div class="card">
                      <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                          <thead>
                            <tr>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Bukti Persyaratan Dasar</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Memenuhi Syarat</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tidak Memenuhi Syarat</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tidak Ada</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="d-flex px-2">
                                  <div class="my-auto">
                                    <h6 class="mb-0 text-xs">1</h6>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-xs font-weight-bold mb-0">Kartu Tanda Penduduk (KTP)</p>
                              </td>
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input mx-auto" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                              </td>
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input mx-auto" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                              </td>
                    
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input mx-auto" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                              </td>
                            </tr>
                    
                            <tr>
                              <td>
                                <div class="d-flex px-2">
                                  <div class="my-auto">
                                    <h6 class="mb-0 text-xs">2</h6>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-xs font-weight-bold mb-0">Kartu Tanda Mahasiswa (KTM) UNJ</p>
                              </td>
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input mx-auto" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                              </td>
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input mx-auto" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                              </td>
                    
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input mx-auto" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                              </td>
                            </tr>
                    
                            <tr>
                              <td>
                                <div class="d-flex px-2">
                                  <div class="my-auto">
                                    <h6 class="mb-0 text-xs">3</h6>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-xs font-weight-bold mb-0">Foto kopi Daftar Hasil Studi (DHS)</p>
                              </td>
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input mx-auto" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                              </td>
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input mx-auto" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                              </td>
                    
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input mx-auto" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                              </td>
                            </tr>
                    
                            <tr>
                              <td>
                                <div class="d-flex px-2">
                                  <div class="my-auto">
                                    <h6 class="mb-0 text-xs">4</h6>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-xs font-weight-bold mb-0">Bukti telah melaksanakan PKM atau PKL</p>
                              </td>
                              <td>
                                <td>
                                  <div class="form-check">
                                    <input class="form-check-input mx-auto" type="checkbox" value="" id="flexCheckDefault">
                                  </div>
                                </td>
                                <td>
                                  <div class="form-check">
                                    <input class="form-check-input mx-auto" type="checkbox" value="" id="flexCheckDefault">
                                  </div>
                                </td>
                            </tr>
                    
                          </tbody>
                        </table>
                      </div>
                      </div>

                  <div class="row ">
                    <div class="col align-self-end">
                      
                      <button class="btn btn-success mt-3" type="submit">Berikutnya</button>
                      
                      
                    </div>
                  </div>
                </form>
        </div>
    </section>

            

          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
               Copyright © 2023 Developed by
                <a href="https://pustikom.unj.ac.id/" class="font-weight-bold" target="_blank">UPT TIK UNJ</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>


</body>

</html>