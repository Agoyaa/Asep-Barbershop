@extends('layouts.main')

@section('content')

<div class="hero-area hero-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="hero-text">
                    <div class="hero-text-tablecell">
                        <p class="subtitle">Gudang Inspirasi</p>
                        <h1>Tren Rambut</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-article-section">
                        <div class="single-article-text">
                            <!-- Display the bg image at the top -->
                            <h2>{{ $news->title }}</h2>
                            @if ($news->bg)
                                <div class="single-artcile-bg" style="background-image: url('{{ Storage::url($news->bg) }}'); height: 400px; background-size: cover; background-position: center;"></div>
                            @endif

                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> {{ $news->created_at->format('d F, Y') }}</span>
                            </p>
                            <p>{{ $news->content }}</p>

                            @foreach ($news->subTitles as $subTitle)
                                <div class="sub-title-section mt-4">
                                    @if ($subTitle->sub_title)
                                        <h2>{{ $subTitle->sub_title }}</h2>
                                    @endif
                                    @if ($subTitle->image_path)
                                        <img src="{{ Storage::url($subTitle->image_path) }}" alt="{{ $subTitle->sub_title }}" class="img-fluid">
                                        <p>{{ $news->desc }}</p>

                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-form-wrap position-sticky">
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