<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="app/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="app/login.css">
</head>

<body>
    <login>

        <div class="container">
            <div class="row">
                <div class="col text-start ">
                    <a href="index.php" class="nav-link text-dark ">
                        <h3>Shop</h3>
                    </a>
                </div>
                <div class="col text-end mt-2">
                    <a href="" class="nav-link text-dark">
                        <h5>Need Help?</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid form-container text-center">
            <div class="form">
                <form action="">
                    <p>Login</p>

                    <div class="email">
                        <input type="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="password">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>

                    <div class="submit">
                        <button class="btn" type="submit">Login</button>
                    </div>
                </form>
                <div class="signuplink text-dark">
                    <span><small class="text-dark">New To Shop?<a href="signup.php"> Sign Up</a></small></span>
                </div>
            </div>
        </div>


        </div>



        </signup>

















        <?php
        include('user/body/footer.php')
        ?>

</body>

</html>