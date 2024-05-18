<!DOCTYPE html>
<html>
<head>
    <title>Admin - Booking List</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
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

    <table border="1">
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
</body>
</html>
