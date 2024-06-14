<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 File Upload Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <h2 class="mb-4">Laravel 10 File Upload Example</h2>
        <form action="{{ route('file-upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3" >
                <label for= 'berkas' class="form-label">Pilih Berkas</label>
                <input type="file" name="berkas" class="form-control" id="berkas">
                @error('berkas')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>

        </form>
    </div>
</body>

</html>
