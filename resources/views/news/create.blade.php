@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create News</h1>
        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" class="form-control" required></textarea>
            </div>
            <div id="sub-titles-container">
                <div class="form-group">
                    <label for="sub_titles[]">Sub Title:</label>
                    <input type="text" name="sub_titles[]" class="form-control" required>
                    <label for="images[]">Image:</label>
                    <input type="file" name="images[]" class="form-control" required>
                </div>
            </div>
            <button type="button" id="add-sub-title" class="btn btn-secondary">Add Sub Title</button>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

    <script>
        document.getElementById('add-sub-title').addEventListener('click', function() {
            var container = document.getElementById('sub-titles-container');
            var div = document.createElement('div');
            div.classList.add('form-group');
            div.innerHTML = `
                <label for="sub_titles[]">Sub Title:</label>
                <input type="text" name="sub_titles[]" class="form-control" required>
                <label for="images[]">Image:</label>
                <input type="file" name="images[]" class="form-control" required>
            `;
            container.appendChild(div);
        });
    </script>
@endsection
