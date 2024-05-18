<!DOCTYPE html>
<html>
<head>
    <title>Create Booking</title>
</head>
<body>
    <h1>Create Booking</h1>

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
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}"><br><br>
        <label for="no_handphone">No Handphone:</label>
        <input type="text" id="no_handphone" name="no_handphone" value="{{ old('no_handphone') }}"><br><br>
        <label for="jamcukur">Jam Cukur (HH:MM):</label>
        <input type="text" id="jamcukur" name="jamcukur" value="{{ old('jamcukur') }}"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
