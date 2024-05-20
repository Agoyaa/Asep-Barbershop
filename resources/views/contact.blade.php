@extends('layouts.main')

@section('konten')

    <!-- hero area -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">You Can Book Us Here or Ask Any Question</p>
                            <h1>Contact us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end hero area -->

    <!-- contact form -->
    <div class="contact-from-section mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="form-title">
                        <h2>Book Here!</h2>
                        <p> Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis
                            ipsum minus voluptate? Dolore, esse natus!</p>
                    </div>
                    <div id="form_status"></div>
                    <div class="contact-form">
                        @if ($errors->any())
                            <div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('booking.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="no_handphone">No Handphone</label>
                                <input type="text" class="form-control" id="no_handphone" name="no_handphone"
                                    value="{{ old('no_handphone') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal"
                                    value="{{ old('tanggal') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="jamcukur">Jam Cukur</label>
                                <select class="form-control" id="jamcukur" name="jamcukur" required>
                                    @php
                                        $jamMulai = 9; // 09:00
                                        $jamAkhir = 20; // 20:00
                                    @endphp
                                    @for ($jam = $jamMulai; $jam <= $jamAkhir; $jam++)
                                        @if ($jam != 12)
                                            <option value="{{ sprintf('%02d:00', $jam) }}"
                                                {{ old('jamcukur') == sprintf('%02d:00', $jam) ? 'selected' : '' }}>
                                                {{ sprintf('%02d:00', $jam) }}
                                            </option>
                                        @endif
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-form-wrap">
                        <div class="row mb-4">
                            <div class="contact-form-box mr-2">
                                <h4><i class="fas fa-map"></i> Our Headquarter</h4>
                                <p><a href="https://maps.app.goo.gl/EHYTggzNHZjP5SUp7" class="bawah">Jl. Raya
                                        Nagreg-Limbangan, Ciaro</p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="contact-form-box mr-2">
                                <h4><i class="far fa-clock"></i> Shop Hours</h4>
                                <p>Open From Monday - Sunday<br>10AM-9PM(8.30 Last Order)</p>
                            </div>

                        </div>
                        <div class="row mb-4">
                            <div class="contact-form-box mr-2">
                                <h4><i class="fas fa-address-book"></i> Contact</h4>
                                <p><a href="https://wa.me/6281280777736" class="bawah"\n>089762532633</a>
                                    <br>Asepbrb@gmail.com
                                </p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end contact form -->
@endsection
