<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teste CRUD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="create.php">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="changes.php">Database/Update</a>
            </li>
        </ul>
    </nav>
    <div class="d-flex justify-content-center" style="margin-top: 30px;">
    <div class="text-center" style="width: 500px; height: 300px">
        <form action="loginrequest.php" method="POST">
            <h1 class="text-center">Login</h1>
            <br>
            <label for="usernamelog">Username / Email</label>
            <input type="text" name="usernamelog" id="username" class="form-control">
            <br>
            <label for="passwordlog">Password</label>
            <input type="password" name="passwordlog" id="password" class="form-control">
            <br>
            <button type="submit" class="btn btn-dark">Login</button>
        </form>
    </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>