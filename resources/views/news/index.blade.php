@extends('layouts.main')

@section('content')
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
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


    <div class="latest-news mt-150 mb-150">
        <div class="container bg-opacity-20">
            <div class="row">
                @foreach ($news as $item)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-latest-news">
                            <a href="{{ route('news.show', $item->id) }}">
                                @if ($item->bg)
                                    <div class="latest-news-bg"
                                        style="background-image: url('{{ Storage::url($item->bg) }}');"></div>
                                @else
                                    <div class="latest-news-bg" style="background-image: url('default-image.jpg');"></div>
                                    <!-- Default image -->
                                @endif
                            </a>
                            <div class="news-text-box">
                                <h3><a href="{{ route('news.show', $item->id) }}">{{ $item->title }}</a></h3>
                                <p class="blog-meta">
                                    <span class="author"><i class="fas fa-user"></i> Admin</span>
                                    <span class="date"><i class="fas fa-calendar"></i>
                                        {{ $item->created_at->format('d F, Y') }}</span>
                                </p>
                                <p class="excerpt">{{ Str::limit($item->content, 150) }}</p>
                                <a href="{{ route('news.show', $item->id) }}" class="read-more-btn">read more <i
                                        class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
