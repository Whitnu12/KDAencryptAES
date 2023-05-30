<!DOCTYPE html>
<html>
<head>
    <title>File Encryption</title>
</head>
<body>
    <h1>File Encryption</h1>


    <hr>

    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <label for="file">Pilih File PDF:</label>
        <input type="file" name="file" accept=".pdf" required>

        <br>
        <label for="deskripsi">Deskripsi:</label>
        <input type="text" name="description" required>

        <label for="encryption_key">Kunci Enkripsi:</label>
        <input type="text" name="encryption_key" required>
        <label>min 16 key</label>
        <br>
        <button type="submit">Encrypt File</button>
    </form>

    <a class="nav-link" href="{{ route('decrypt') }}">Decrypt</a>

</body>
</html>
