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
        <form action="updaterequest.php" method="POST">
            <h1 class="text-center">Update user</h1>
            <br>
            <label for="username">New username</label>
            <input type="text" name="username" id="username" class="form-control">
            <br>
            <label for="email">New email</label>
            <input type="email" name="email" id="email" class="form-control">
            <br>
            <label for="password">New password</label>
            <input type="password" name="password" id="password" class="form-control">
            <br>
            <button type="submit" class="btn btn-dark">Update</button>
        </form>
    </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>