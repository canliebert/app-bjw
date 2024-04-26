@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="col-lg-8">
        <form action="/dashboard/event" method="post" enctype="multipart/form-data">
            @csrf
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="name">

            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">

            <label for="sub" class="form-label">Sub</label>
            <input type="text" class="form-control" id="sub" name="sub" placeholder="sub">

            <div class="row">
                <div class="col-sm-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="date">
                </div>
            </div>
            
            <div class="form-group">
                <label for="imageUpload">Gambar</label>
                <div class="custom-file">
                    <input name="img" type="file" class="custom-file-input" id="imageUpload" accept="image/*">
                    <label class="custom-file-label" for="imageUpload">Pilih file</label>
                </div>
                <div id="image-preview" class="mt-2"></div>
                <div id="error-message" class="text-danger"></div>
            </div>

            <button class="btn btn-primary mt-5" type="submit">Create Post</button>
        </form>
    </div>
    
    <a href="/dashboard/event">Back</a>
</div>

<script>
    function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
            const fileSize = file.size / 1024; // Ukuran file dalam kilobyte
            if (fileSize > 1024) { // Ukuran maksimum: 1MB
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
