<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form method="POST" action="ceklogin.php">
    <section class="gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="typeEmailX">ID</label>
                                <input type="text" id="typeEmailX" class="form-control form-control-lg" placeholder="masukan id admin" name = "id" required>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="typePasswordX">Password</label>
                                <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="masukan password" name = "password" required>
                            </div>

                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    </form> 
</body>
</html>