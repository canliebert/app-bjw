@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="col-lg-8">
        <form action="/dashboard/event/{{ $event->slug }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $event->name }}">

            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $event->slug }}">

            <label for="sub" class="form-label">Sub</label>
            <input type="text" class="form-control" id="sub" name="sub" value="{{ $event->sub }}">

            <label for="date" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $event->date }}">

            <div class="form-group">
                <label for="imageUpload">Gambar</label>
                <div class="custom-file">
                    <input name="img" type="file" class="custom-file-input" id="imageUpload" accept="image/*">
                    <label class="custom-file-label d-block" for="imageUpload">
                        <img id="previewImage" src="{{ asset('storage/'. $event->img) }}" alt="Preview Image" class="img-fluid">
                    </label>
                </div>
                <div id="error-message" class="text-danger"></div> <!-- Pesan kesalahan ukuran gambar -->
            </div>

            <button class="btn btn-primary mt-5" type="submit">Update Event</button>
        </form>
    </div>

    <a href="/dashboard/event">Back</a>
</div>

<script>
    // Menampilkan pratinjau gambar saat halaman dimuat
    window.onload = function() {
        const previewImage = document.getElementById('previewImage');
        const inputFile = document.getElementById('imageUpload');

        // Event listener untuk ketika gambar baru dipilih
        inputFile.addEventListener('change', function(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                previewImage.src = e.target.result; // Mengganti src pratinjau gambar dengan gambar yang baru dipilih
            };

            // Memuat gambar yang baru dipilih
            reader.readAsDataURL(file);
        });
    };
</script>
@endsection
