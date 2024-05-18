<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="image/png" href="assets/img/Logo_Asep.png">
    <title>Admin - Booking List</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
    }

    body {
        padding: 3rem 7% 0;
        background-image: url(../assets/img/TFSH.png);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        font-family: "Poppins", sans-serif;
    }

    body::after {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        content: "";
        background-color: #07212e;
        z-index: -1;
        opacity: 0.6;
    }

    .header {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 3rem;
    }

    .header>i {
        color: #fff;
        cursor: pointer;
    }

    /* Keranjang Belanja */
    .cart-container {
        position: fixed;
        top: 0;
        left: -100%;
        width: 100%;
        max-width: 250px;
        height: 100%;
        background-color: #fff;
        transition: right 0.5s ease;
        z-index: 100;
        padding: 20px;
        transition: 0.5s ease;
    }

    .cart-container.active {
        left: 0;
        transition: 0.5s ease;
    }

    @media screen and (max-width: 820px) {
        .cart-container {
            width: 50%;
        }
    }

    .header h1 {
        font-size: 64px;
        font-weight: 700;
        line-height: 1.3;
        color: #fff;
    }

    .items {
        display: flex;
        flex-direction: column;
        margin-top: 2rem;
        gap: 40px;
    }

    .profile {
        margin-bottom: 20px;
    }

    .profile h2 {
        display: flex;
        flex-direction: row;
        gap: 10px;
        color: #333;
    }

    .profile h2 p {
        font-size: 18px;
    }

    .profile h2 p span {
        color: burlywood;
    }

    .list a {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 10px;
        color: #333;
    }

    .list a :not(i) {
        font-size: 20px;
    }

    .list a:hover {
        color: burlywood;
    }

    .tabel {
        display: flex;
        flex-direction: column;
        background-color: rgba(255, 255, 255, 0.1);
        -webkit-backdrop-filter: blur(2px);
        backdrop-filter: blur(2px);
    }

    thead>tr>th {
        padding: 15px;
        text-align: center;
        font-weight: 700;
        color: burlywood;
    }

    tbody>tr>td {
        padding: 5px 0;
        text-align: center;
        font-weight: 500;
        color: #ddd;
    }

    @media and screen(max-width:540px) {}
</style>

<body>
    <div class="header">
        <i id="cart" style="font-size:28px"><i class="fas fa-list"></i></i>
        <div class="cart-container">
            <div class="items">
                <div class="profile">
                    <h2><i data-feather="user"></i>
                        <p> Halo, <span>{{ auth()->user()->name }}</span></p>
                    </h2>
                </div>
                <div class="list">
                    <a href="/admin"><i data-feather="table"></i>
                        <p> Booking List</p>
                    </a>
                </div>
                <div class="list">
                    <a href=""><i data-feather="paperclip"></i>
                        <p> Newspaper</p>
                    </a>
                </div>
                <div class="list">
                    <a href="/sesi/logout"><i data-feather="arrow-left-circle"></i>
                        <p> Log Out</p>
                    </a>
                </div>
            </div>
        </div>
        <h1>Booking List</h1>
    </div>

    @if (Session::has('success'))
        <script>
            window.onload = function() {
                const error = "{{ Session::get('success') }}";
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
                    icon: "success",
                    title: error
                });
            }
        </script>
    @endif
    <div class="tabel">
        <table border="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>No Handphone</th>
                    <th>Jam Cukur</th>
                    <th>Diterima Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->no_handphone }}</td>
                        <td>{{ $booking->jamcukur }}</td>
                        <td>{{ $booking->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        feather.replace();
    </script>
    <script>
        // Add event listener to document to hide cart when clicked outside
        const cart = document.querySelector('#cart');
        const cartContainer = document.querySelector('.cart-container');

        document.addEventListener('click', function(e) {
            if (!cart.contains(e.target) && !cartContainer.contains(e.target)) {
                cartContainer.classList.remove('active');
            }
        });

        document.querySelector('#cart').onclick = () => {
            cartContainer.classList.toggle('active');
        };
    </script>
</body>

</html>
