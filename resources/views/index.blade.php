<!doctype html>
<html lang="en">

<head>
    <title>Buku Tamu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/style.css') }}">

    <style>
        /* Menonaktifkan scroll */
        body,
        html {
            overflow: hidden;
            height: 100%;
        }

        .input-group-prepend .input-group-text {
            color: bisque;
            background-color: cadetblue;
            border-radius: 0.100rem;
        }

        .top-right-link {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        a.btn {
            text-transform: none;
        }
    </style>
</head>

<body class="img js-fullheight" style="background-image: url({{ url('/frontend/images/bg.jpg') }});">
    <!-- Link Dashboard di pojok kanan atas -->
    <div class="top-right-link">
        <a href="{{ url('dashboard') }}" class="btn btn-primary">Dashboard</a>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Buku Tamu</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Silahkan Input</h3>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ url('simpan-bukutamu') }}" method="post" class="signin-form">
                            @csrf
                            <!-- Nama -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" name="nama" onkeypress="return hanyaHuruf(event);"
                                        class="form-control" placeholder="Nama" required>
                                </div>
                            </div>

                            <!-- Nomor Telepon -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                    </div>
                                    <input type="number" name="telepon" class="form-control"
                                        placeholder="Nomor Telepon" required>
                                </div>
                            </div>

                            <!-- Alamat -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-home"></i></span>
                                    </div>
                                    <textarea name="alamat" class="form-control" placeholder="Alamat" cols="10" rows="2"></textarea>
                                </div>
                            </div>

                            <!-- Keperluan -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-file-text"></i></span>
                                    </div>
                                    <input type="text" name="keperluan" class="form-control" placeholder="Keperluan"
                                        required>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        required>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Simpan</button>
                            </div>
                        </form>

                        <script>
                            function hanyaHuruf(evt) {
                                var charCode = evt.which || evt.keyCode;
                                if (
                                    (charCode > 64 && charCode < 91) || // A-Z
                                    (charCode > 96 && charCode < 123) || // a-z
                                    charCode == 8 || // Backspace
                                    charCode == 32 // Space
                                ) {
                                    return true;
                                }
                                return false;
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="{{ asset('/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/popper.js') }}"></script>
    <script src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/main.js') }}"></script>
</body>

</html>
