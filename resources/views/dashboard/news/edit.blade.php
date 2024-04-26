@extends('dashboard.layouts.main')
@section('container')
<div class="col-lg-4">
    
</div>
    <form action="/dashboard/news/{{ $news->slug }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-4">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter name" value="{{ $news->title }}">

        @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="slug" class="form-label">slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="slug" value="{{ $news->slug }}"> 
        </div>
        
        @error('slug')
        <div class="invalid-feedback">{{ $message }}</div>
         @enderror

        <div class="form-group">
            <label for="imageUpload">Gambar</label>
            <div class="custom-file">
                <input name="img" type="file" class="custom-file-input  @error('img') is-invalid @enderror" id="imageUpload" value="{{ $news->img }}" accept="image/*">
                <label class="custom-file-label" for="imageUpload"></label>

                <div id="image-preview" class="mt-2">
                    <img id="previewImage" src="{{ asset('storage/'.$news->img) }}" alt="" style="max-height: 300px; max-width: 300px;">
                </div> <!-- Container untuk pratinjau gambar -->
                <div id="error-message" class="text-danger"></div> 
                @error('img')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>


        <label for="body" class="form-label">Body</label>
        <input id="body" type="hidden" name="body" value="{{ $news->body }}">
        <trix-editor input="body"></trix-editor>

        <button class="btn btn-primary mt-5" type="submit">Update Post</button>
    </form>

    <script>
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

            // Event listener untuk menampilkan gambar saat diklik
            previewImage.addEventListener('click', function() {
                window.open(previewImage.src); // Membuka gambar dalam jendela baru saat gambar di-klik
            });
        };
    </script>
@endsection
