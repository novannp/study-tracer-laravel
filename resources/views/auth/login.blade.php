@include('layouts.styles')

<body class="d-flex flex-column theme-light">
    <script src="./dist/js/demo-theme.min.js?1674944800"></script>

    <div class="page page-center">
        <div class="container container-tight py-4">
            @if( session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    <a href="#" class="alert-link">{{ session('message') }}</a>
                </div>
            @endif
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img
                        src="{{ asset('tabler/img/logo_itg.png') }}" height="100" alt=""></a>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Masuk</h2>
                    <form action="/login" method="post">
                        @csrf   
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" placeholder="Masukkan alamat email"
                                autocomplete="off">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">
                                Kata sandi
                                {{-- <span class="form-label-description">
                                    <a href="./forgot-password.html">I forgot password</a>
                                </span> --}}
                            </label>
                            <div class="input-group input-group-flat">
                                <input name="password" type="password" class="form-control" placeholder="Masukkan kata sandi"
                                    autocomplete="off">
                                <span class="input-group-text">
                                    <a href="#" class="link-secondary" data-bs-toggle="tooltip"
                                        aria-label="Show password" data-bs-original-title="Show password">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            <path
                                                d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7">
                                            </path>
                                        </svg>
                                    </a>
                                </span>
                            </div>
                        </div>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Masuk</button>
                        </div>
                    </form>
                </div>

                <div class="text-center text-muted mt-3">
                    Tidak punya akun? <a href="/register" tabindex="-1">Daftar</a>
                </div>
                <br>

            </div>
        </div>


        <!-- Libs JS -->
        <!-- Tabler Core -->
        <script src="./dist/js/tabler.min.js?1674944800" defer=""></script>
        <script src="./dist/js/demo.min.js?1674944800" defer=""></script>

</body>
