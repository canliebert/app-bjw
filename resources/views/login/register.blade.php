<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->    
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->    
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->    
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <span class="login100-form-title p-b-49">
                        Register
                    </span>

                @if(session('registererror'))
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        {{ session('registererror') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <form class="login100-form validate-form" action="/register" method="post">
                    @csrf

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Full Name is required">
                        <span class="label-input100">Full Name</span>
                        <input class="input100" type="text" name="name" placeholder="Enter your full name" value="{{ old('name') }}">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Enter your username" value="{{ old('username') }}">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="wrap-input100 validate-input" data-validate="Email is required">
                        <span class="label-input100">Email Address</span>
                        <input class="input100" type="email" name="email" placeholder="Enter your email address" value="{{ old('email') }}">
                        <span class="focus-input100" data-symbol="&#xf15a;"></span>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="wrap-input100 validate-input" data-validate="WhatsApp (WA) is required">
                        <span class="label-input100">WhatsApp</span>
                        <input class="input100" type="text" name="wa" placeholder="Enter your WhatsApp number" value="{{ old('wa') }}">
                        <span class="focus-input100" data-symbol="&#xf15a;"></span>
                    </div>
                    @error('wa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-group">
                        <label for="imageUpload">Gambar</label>
                        <div class="custom-file">
                            <input name="img" type="file" class="custom-file-input" id="imageUpload" accept="image/*">
                            <label class="custom-file-label" for="imageUpload">Pilih file</label>
                        </div>
                        <div id="image-preview" class="mt-2"></div>
                        <div id="error-message" class="text-danger"></div>
                    </div>
                    

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Enter your password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button id="registerButton" class="login100-form-btn">
                                Register
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>
    @if (session('registersuccess'))
        <script>                
            alert('Registration successful! Please log in.');
        </script>
    @endif
    
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main_login.js"></script>

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
    

</body>
</html>
