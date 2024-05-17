@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>News</h1>
        @foreach ($news as $item)
            <div class="news-item">
                <h2>{{ $item->title }}</h2>
                <p>{{ $item->content }}</p>
                @foreach ($item->subTitles as $subTitle)
                    <h3>{{ $subTitle->sub_title }}</h3>
                    <img src="{{ Storage::url($subTitle->image_path) }}" alt="{{ $subTitle->sub_title }}" style="width: 100%;">
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
