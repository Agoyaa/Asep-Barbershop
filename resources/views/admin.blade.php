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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        padding: 2rem 7%;
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

    h1 {
        text-align: center;
        font-size: 64px;
        font-weight: 700;
        line-height: 1.3;
        color: #fff;
        margin-bottom: 3rem;
    }

    .tabel {
        display: flex;
        flex-direction: column;
        background-color: rgba(255, 255, 255, 0.1);
        -webkit-backdrop-filter: blur(2px);
        backdrop-filter: blur(2px);
    }

    table {
        color: #ddd;
    }

    thead>tr>th {
        padding: 15px;
        text-align: center;
    }

    tbody>tr>td {
        padding: 5px 0;
        text-align: center;
    }

    @media and screen(max-width:540px) {}
</style>

<body>
    <h1>Booking List</h1>

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
                    <th>Created At</th>
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
</body>

</html>
