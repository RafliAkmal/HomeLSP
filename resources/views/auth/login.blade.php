@extends('layouts.front')

@section('content')

<style>body {background-color: #F7F9EE;}</style>

  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start" style="background-color: #F7F9EE">
                  <h3 class="font-weight-bolder" style="color: #547153">LSP-P1 UNJ</h3>
                  <h5 class="font-weight-bolder" style="color: #547153">Universitas Negeri Jakarta</h5>
                  <p class="mb-0" style="color: #343E37">Masukkan akun Siakad anda</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="/attemptLogin" class="d-flex flex-column gap-2">
                    @csrf
                    <div class="mb-3">
                        <input type="username" style="background-color: #E6E5A4" class="form-control form-control-lg @error('username') is-invalid @enderror" placeholder="Username" aria-label="Username"
                        name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <input type="password" style="background-color: #E6E5A4" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password"
                      name="password" required autocomplete="current-password">

                      @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-2 mb-10" style="background-color: #7D8F69">Masuk</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                <div class="position-relative h-100 m-6 px-7 mb-10 border-radius-lg d-flex flex-column justify-content-center overflow-hidden">
                    <img src="assets/img/logo_lsp.png" alt="">
                </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection