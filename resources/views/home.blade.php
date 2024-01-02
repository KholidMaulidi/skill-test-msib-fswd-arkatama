<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to My Laravel App</h1>
    <form action="{{ url('/daftar-pengguna') }}" method="POST">
        @csrf
        <label for="userData">Enter User Data (Name Age City): </label>
        <input type="text" name="data" id="userData" required>
        <button type="submit">Submit</button>
    </form>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
</body>
</html>
