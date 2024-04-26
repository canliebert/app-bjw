@extends('dashboard.layouts.main')
@section('container')
<div class="col-lg-4">
    
</div>
    <form action="/dashboard/news" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-4">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter name" value="{{ old('title') }}">

        @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="slug" class="form-label">slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="slug" value="{{ old('slug') }}"> 
        </div>
        
        @error('slug')
        <div class="invalid-feedback">{{ $message }}</div>
         @enderror

        <div class="form-group">
            <label for="imageUpload">Gambar</label>
            <div class="custom-file">
                <input name="img" type="file" class="custom-file-input  @error('img') is-invalid @enderror" id="imageUpload" accept="image/*">
                <label class="custom-file-label" for="imageUpload"></label>

                <div id="image-preview" class="mt-2"></div> <!-- Container untuk pratinjau gambar -->
                <div id="error-message" class="text-danger"></div> 
                @error('img')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>


        <label for="body" class="form-label">Body</label>
        <input id="body" type="hidden" name="body">
        <trix-editor input="body"></trix-editor>

        <button class="btn btn-primary mt-5" type="submit">Create Post</button>
    </form>

    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                const fileSize = file.size / 5024; // Ukuran file dalam kilobyte
                if (fileSize > 5024) { // Ukuran maksimum: 1MB
                    document.getElementById("error-message").textContent = "Ukuran gambar terlalu besar (maksimal 1MB).";
                    event.target.value = ""; // Bersihkan input file
                    return;
                }
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgElement = document.createElement("img");
                    imgElement.src = e.target.result;
                    imgElement.alt = "Preview Image";
                    imgElement.classList.add("img-fluid"); // Agar gambar responsif
                    const previewContainer = document.getElementById("image-preview");
                    previewContainer.innerHTML = ""; // Bersihkan kontainer pratinjau sebelumnya
                    previewContainer.appendChild(imgElement);
                    document.getElementById("error-message").textContent = ""; // Bersihkan pesan kesalahan
                };
                reader.readAsDataURL(file);
            }
        }
    
        const inputElement = document.getElementById("imageUpload");
        inputElement.addEventListener("change", previewImage);
    </script>
@endsection