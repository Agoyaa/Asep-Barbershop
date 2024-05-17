@extends('layouts.main')

@section('konten')
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
    <!-- hero area -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Pala kau pasti kweccauuu!!!</p>
                            <h1>Asep Barbershop</h1>
                            <div class="hero-btns">
                                <a href="gallery" class="boxed-btn">Gallery</a>
                                <a href="news" class="bordered-btn">Tren Rambut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->

    <!-- features list section -->
    <div class="list-section pt-80 pb-80">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="content">
                            <h3><a href="https://maps.app.goo.gl/EHYTggzNHZjP5SUp7" class="bawah">Jl. Raya
                                    Nagreg-Limbangan, Ciaro</h3>
                            <p>Our Headquarter</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <!-- <a href="https://wa.me/6281280777736"> -->
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <!-- <a href="https://wa.me/6281280777736"> -->
                            <h3><a href="https://wa.me/ernnn" class="bawah">(022)8456722</a></h3>
                            <h3><a href="https://wa.me/6281280777736" class="bawah"\n>089762532633</a></h3>
                            <p>Get support all day</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="list-box d-flex justify-content-start align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <div class="content">
                            <h3>Open From Monday - Sunday</h3>
                            <p>10AM-9PM(8.30 Last Order)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end features list section -->

    <!-- product section -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Our</span> service</h3>
                        <p>Anda Puas, Kami Lemas.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="assets/img/haircut2.png" alt="Haircut"></a>
                        </div>
                        <h3>Haircut </h3>
                        <p class="product-price"><span>pengalaman potong rambut yang keren abis dan kece parah</span> Rp.
                            40.000 </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="assets/img/hairtreatment2.png" alt=""></a>
                        </div>
                        <h3>Hair Treatment</h3>
                        <p class="product-price"><span>Treatment untuk rambut yang sudah rusak akibat bahan kimia</span> Rp.
                            70.000 </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="assets/img/haircolor2.png" alt=""></a>
                        </div>
                        <h3>Hair Color</h3>
                        <p class="product-price"><span>Buat warna rambutmu menjadi berkilau dan berwarna</span> Rp. 150.000
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product section -->

    <!-- featured section -->
    <div class="feature-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="featured-text mt-1">
                        <h2 class="subtitle">Kenapa Harus <img src="assets/img/Logo_Asep2.png" alt="">Asep
                            Barbershop?</h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-6 mb-md-5 mt-2">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-user-secret"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Barberman Profesional</h3>
                                        <p>Memiliki barberman profesional yang ahli dan mempunyai pengalaman untuk
                                            memberikan hasil potongan rambut yang berkualitas dan sesuai dengan keinginan
                                            anda.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5 mb-md-5 mt-2">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-money-bill-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Best Price</h3>
                                        <p>Menawarkan harga terbaik di pasaran dengan berbagai layanan yang ada bagi anda
                                            yang mencari kualitas yang baik dengan harga yang terjangkau.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5 mb-md-5 mt-2">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-hand-holding-heart"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Family frendly</h3>
                                        <p>Lingkungan yang nyaman dan aman untuk semua anggota keluarga. Ini bisa mencakup
                                            fasilitas seperti area bermain anak-anak atau layanan khusus untuk anak-anak.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-sync-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Quick Refund</h3>
                                        <p>Menjanjikan kecepatan dalam proses pengembalian uang jika anda tidak puas dengan
                                            layanan yang diberikan dan memberikan jaminan bagi yang khawatir dengan layanan
                                            kami.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end featured section -->
@endsection
