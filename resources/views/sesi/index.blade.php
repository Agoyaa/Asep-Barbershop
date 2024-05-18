<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/png" href="assets/img/Logo_Asep.png">
    <title>Asep Barbershop | {{ $title }}</title>
    <link rel="stylesheet" href="css/login.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="form-wrapper">
        <main class="form-side">
            <a href="/" title="Home">
                <img src="assets/img/logo_baru.png" alt="Barber" class="logo" style="width: 160px" />
            </a>
            <form class="my-form" action="/sesi/login" method="POST">
                @csrf
                @if (session('error'))
                    <script>
                        window.onload = function() {
                            // alert("{{ session('error') }}");
                        }
                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                        });
                        Toast.fire({
                            icon: "error",
                            title: "Nama atau password yang dimasukkan salah!"
                        });
                    </script>
                @endif
                <div class="form-welcome-row">
                    <h1>Welcome back!</h1>
                    <h2>Login to your account</h2>
                </div>
                <div class="divider">
                    <div class="divider-line"></div>
                    or
                    <div class="divider-line"></div>
                </div>
                <div class="text-field">
                    <label for="name">Name</label>
                    <input type="name" id="name" value="{{ Session::get('name') }}" name="name"
                        autocomplete="off" placeholder="Your Name" required />
                </div>
                <div class="text-field">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Your password" required />
                    <div class="error-message">
                        Minimum 6 characters at least 1 Alphabet and 1 Number
                    </div>
                </div>
                <button name="submit" class="my-form__button my-button--primary" type="submit">Login</button>
            </form>
        </main>
    </div>
</body>

</html>
