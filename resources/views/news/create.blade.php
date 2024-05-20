<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="image/png" href="assets/img/Logo_Asep.png">
    <title>Admin - Add News</title>
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

    .contact-form {
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

    /* Container and Row */
    .container {
        display: block;
        background-color: rgb(255, 255, 255);
        padding: 4px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(2px);

    }

    .row {
        margin-right: 15px;
        margin-left: 15px;
        margin-top: 10px;
        padding: 0;
    }

    /* Form Floating Elements */
    .form-floating {
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .form-floating input,
    .form-floating textarea {
        border-radius: 4px;
        border: 1px solid #ced4da;
        background-color: #fff;
        box-shadow: none;
    }

    .form-floating textarea {
        resize: none;
    }

    .form-floating label {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        padding: 1rem 0.75rem;
        pointer-events: none;
        border: 1px solid transparent;
        transition: all 0.1s ease-in-out;
    }

    /* Adjustments for input fields */
    .form-floating input:focus,
    .form-floating textarea:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .form-floating input:focus~label,
    .form-floating textarea:focus~label {
        opacity: 0.65;
        transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
    }

    /* Button Styling */
    .btn-secondary,
    .btn-primary {
        padding: 10px 20px;
        border-radius: 5px;
    }

    .btn-secondary {
        margin-bottom: 15px;
    }

    /* Error Alert */
    .alert.alert-danger {
        margin-top: 20px;
    }

    /* Custom File Input */
    .custom-file-input {
        margin-bottom: 10px;
    }

    .custom-file-label::after {
        content: "Browse";
        border-left: 1px solid #ced4da;
        border-radius: 0 0.25rem 0.25rem 0;
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }

    .form-group.text-center {
        margin-top: 20px;
    }

    /* Sub-title Container */
    #sub-title-container {
        margin-top: 20px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .container {
            padding: 15px;
        }

        .form-floating label {
            padding: 1rem 0.5rem;
        }
    }
</style>
</head>

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
                    <a href="/create"><i data-feather="paperclip"></i>
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
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="form_status"></div>
                <div class="contact-form">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
    
                    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                                value="{{ old('title') }}" required>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="bg" name="bg" placeholder="Background" required>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="content" name="content" placeholder="Content" style="height: 100px;" required>{{ old('content') }}</textarea>
                        </div>
                        <div id="sub-title-container">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="sub_title_0" name="sub_titles[0][sub_title]" placeholder="Sub Title" required>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="desc_0" name="sub_titles[0][desc]" placeholder="Desc" required>
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" id="image_0" name="sub_titles[0][image]" required>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="button" id="add-sub-title" class="btn btn-secondary mb-3">Add Sub Title</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <script>
        feather.replace();
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    let subtitleIndex = 1; // Start from 1 since 0 is already in the initial form
    const addSubtitleButton = document.getElementById('add-sub-title');
    const subtitleContainer = document.getElementById('sub-title-container');

    addSubtitleButton.addEventListener('click', function() {
        const subtitleHtml = `
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="sub_title_${subtitleIndex}" name="sub_titles[${subtitleIndex}][sub_title]" placeholder="Sub Title" required>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="desc_${subtitleIndex}" name="sub_titles[${subtitleIndex}][desc]" placeholder="Desc" required>
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" id="image_${subtitleIndex}" name="sub_titles[${subtitleIndex}][image]" required>
            </div>
        `;
        subtitleContainer.insertAdjacentHTML('beforeend', subtitleHtml);
        subtitleIndex++;
    });
});

    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentDate = new Date();

            document.querySelectorAll('table tbody tr').forEach(function(row) {
                const tanggal = row.querySelector('td:nth-child(3)').innerText;
                const jamCukur = row.querySelector('td:nth-child(4)').innerText;

                const bookingDateTime = new Date(`${tanggal}T${jamCukur}`);

                if (bookingDateTime < currentDate) {
                    row.style.display = 'none';
                }
            });
        });
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
