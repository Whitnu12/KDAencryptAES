<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <h2>Encrypted Files</h2>
        <table>
            <thead>
                <tr>
                    <th>File Name</th>
                    <th>description</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($file as $encryptedFile)
                    <tr>
                        <td>{{ $encryptedFile->filename }}</td>
                        <td>{{ $encryptedFile->description }}</td>

                        <td>
                            <form action="{{ route('download', $encryptedFile->id) }}" method="POST">
                                @csrf
                                <input type="password" name="decryption_key" placeholder="Enter Decryption Key" required>
                                <button type="submit">Download</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
