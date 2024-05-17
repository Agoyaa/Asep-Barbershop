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
                <img src="img/logo.webp" alt="KWU X REO" class="logo" style="width: 128px" />
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
                            title: "Email dan password yang dimasukkan salah!"
                        });
                    </script>
                @endif
                <div class="form-welcome-row">
                    <h1>Welcome back!</h1>
                    <h2>Login to your account</h2>
                </div>
                <div class="socials-row">
                    <a href="#" title="Use Google">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36" height="36"
                            viewBox="0 0 48 48">
                            <path fill="#fbc02d"
                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                            <path fill="#e53935"
                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                            </path>
                            <path fill="#4caf50"
                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                            </path>
                            <path fill="#1565c0"
                                d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                        </svg>
                        Continue with Google
                    </a>
                </div>
                <div class="divider">
                    <div class="divider-line"></div>
                    or
                    <div class="divider-line"></div>
                </div>
                <div class="text-field">
                    <label for="email">Email</label>
                    <input type="email" id="email" value="{{ Session::get('email') }}" name="email"
                        autocomplete="off" placeholder="you@example.com" required />
                    <div class="error-message">Email in incorrect format</div>
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
