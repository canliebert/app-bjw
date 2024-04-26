@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="col-lg-8">
        <form action="/dashboard/product/{{ $product->slug }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{ $product->name }}">

            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{ $product->slug }}">

            <label for="desc" class="form-label">Description</label>
            <input type="text" class="form-control" id="desc" name="desc" placeholder="desc" value="{{ $product->desc }}">

            <div class="row">
                <div class="col-sm-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="price" value="{{ $product->price }}">
                </div>
                <div class="col-sm-3">
                    <label for="old_price" class="form-label">Old Price</label>
                    <input type="number" class="form-control" id="old_price" name="old_price" placeholder="old price" value="{{ $product->old_price }}">
                </div>
                <div class="col-sm-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="quantity" value="{{ $product->quantity }}">
                </div>
            </div>
            
            <div class="form-group mt-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category" name="category">
                    <option selected disabled>Select category</option>
                    <option value="Fashion" {{ $product->category == 'Fashion' ? 'selected' : '' }}>Fashion</option>
                    <option value="Electronics" {{ $product->category == 'Electronics' ? 'selected' : '' }}>Electronics</option>
                    <!-- Tambahkan opsi lainnya sesuai dengan kategori yang Anda inginkan -->
                </select>
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="1" id="availability" name="availability" {{ $product->availability ? 'checked' : '' }}>
                <label class="form-check-label" for="availability">
                    Availability
                </label>
            </div>

            <div class="mt-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" class="form-control" id="rating" name="rating" step="0.1" placeholder="rating" value="{{ $product->rating }}">
            </div>

            <div class="mt-3">
                <label for="published_at" class="form-label">Published At</label>
                <input type="datetime-local" class="form-control" id="published_at" name="published_at" value="{{ date('Y-m-d\TH:i:s', strtotime($product->published_at)) }}">
            </div>

            <div class="form-group mt-3">
                <label for="imageUpload">Gambar</label>
                <div class="custom-file">
                    <input name="img" type="file" class="custom-file-input" id="imageUpload" accept="image/*">
                    <label class="custom-file-label" for="imageUpload">Pilih file</label>
                </div>
                <div id="image-preview" class="mt-2"></div>
                <div id="error-message" class="text-danger"></div>
            </div>

            <button class="btn btn-primary mt-5" type="submit">Update Product</button>
        </form>
    </div>
    
    <a href="/dashboard/product">Back</a>
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
