@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="col-lg-8">
        <form action="/dashboard/event" method="post" enctype="multipart/form-data">
            @csrf
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="name">

            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="username">

            <label for="wa" class="form-label">wa</label>
            <input type="wa" class="form-control" id="wa" name="wa" placeholder="wa">


            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="password">

            
            <div class="form-group">
                <label for="imageUpload">Gambar</label>
                <div class="custom-file">
                    <input name="imgprofile" type="file" class="custom-file-input" id="imageUpload" accept="image/*">
                    <label class="custom-file-label" for="imageUpload">Pilih file</label>
                </div>
                <div id="image-preview" class="mt-2"></div> <!-- Container untuk pratinjau gambar -->
                <div id="error-message" class="text-danger"></div> <!-- Pesan kesalahan ukuran gambar -->
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
