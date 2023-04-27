<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body>
    <main class="p-2 text-center">
        <div class="loginForm w-50 border d-flex flex-column justify-content-center align-items-center p-3">
            <h1 class="">Login</h1>
            <form action="login.php" method="post">
                <ul class="list-group">
                    <li class="list-group-item username">
                        <label for="username">Username: </label>
                        <input type="text" name="username" id="username" required>
                    </li>
                    <li class="list-group-item password">
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password" required>
                    </li>
                    <li class="list-group-item">
                        <button type="submit" class="submitBtn btn btn-primary">Submit</button>
                    </li>
                </ul>
            </form>
        </div>
    </main>
</body>
</html>