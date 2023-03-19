@include('layouts.styles')
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

<body class="d-flex flex-column theme-light">
    <script src="./dist/js/demo-theme.min.js?1674944800"></script>

    <div class="page page-center">
        <div class="container container-tight py-4">
            @if (session()->has('error'))
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
                    <h2 class="h2 text-center mb-4">Daftar</h2>
                    <form action="/register" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input name="name" type="text" class="form-control" placeholder="Masukkan nama"
                                autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NIM</label>
                            <input name="nim" type="number" class="form-control" placeholder="Masukkan NIM"
                                autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input name="email" type="email" class="form-control"
                                placeholder="Masukkan alamat email" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <div class="form-label">Program Studi</div>
                            <select name="prodi" class="form-select">
                                @foreach ($data as $prodi)
                                    <option value="{{ $prodi->id }}">{{ $prodi->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tahun Lulus</label>
                            <input name="graduation_year" type="number" class="form-control" placeholder="Masukkan tahun lulus"
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
                                <input name="password" type="password" class="form-control"
                                    placeholder="Masukkan kata sandi" autocomplete="off">
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
                            <button type="submit" class="btn btn-primary w-100">Daftar</button>
                        </div>
                    </form>
                </div>

                <div class="text-center text-muted mt-3">
                    Sudah punya akun?<a href="./sign-up.html" tabindex="-1">Masuk</a>
                </div>
                <br>

            </div>
        </div>


        <!-- Libs JS -->
        <!-- Tabler Core -->
        <script src="./dist/js/tabler.min.js?1674944800" defer=""></script>
        <script src="./dist/js/demo.min.js?1674944800" defer=""></script>

</body>
