<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row login-container">
            <div class="col-md-6 login-form">
                <div align="center" style="margin-bottom: 20px;">
                    <font face="verdana" size="20" color="white"><b>Agro Weather</b></font>
                </div>
                <form action="loginexec.php" method="POST" autocomplete="off">
                    <div class="form-group" align="center">
                        <input type="text" class="form-control" name="Email" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group" align="center">
                        <div class="pwd">
                            <div class="overlay"></div>
                            <div>
                                <i class="fa fa-lock"></i>
                                <input type="password" class="form-control" name="Password" placeholder="Password" autocomplete="off">
                                <i class="fa fa-eye-slash"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" align="center">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                            <label class="custom-control-label" for="remember" style="color: white;">Ingat kata sandi</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="forgot_password.php">Lupa kata sandi?</a>
                        </div>
                    </div>
                    
                    <div align="center">
                        <button type="submit" class="btn btn-primary btn-login">Masuk</button>
                    </div>
                    <div class="form-group mt-3" align="center">
                        <p style="color: white;">Tidak punya akun? <a href="signup.php">Daftar</a></p>
                    </div>
                    
                </form>
            </div>
            <div class="col-md-6 login-image">
                <img src="img/semuacuaca2.png" alt="Gambar Cuaca">
            </div>
        </div>
    </div>
    
    <script>
        const input = document.querySelector(".pwd input");
        const eye = document.querySelector(".pwd .fa-eye-slash");
        const lock = document.querySelector(".pwd .fa-lock");
        const overlay = document.querySelector(".pwd .overlay");
    
        eye.addEventListener("click", () => {
            if (input.type === "password") {
                input.type = "text";
                eye.classList.remove("fa-eye-slash");
                eye.classList.add("fa-eye");
                setTimeout(() => {
                    lock.style.color = "#111625"; 
                }, 500);
            } else {
                input.type = "password";
                eye.classList.remove("fa-eye");
                eye.classList.add("fa-eye-slash");
                lock.style.color = "#dbdbdb"; 
            }
            overlay.classList.toggle("overlay-cover");
        });
    </script>    
</body>
</html>
