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
                <a class="nav-link active" href="create.php">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="changes.php">Database/Update</a>
            </li>
        </ul>
    </nav>
    <div class="d-flex justify-content-center" style="margin-top: 30px;">
    <div class="text-center" style="width: 500px; height: 300px">
        <form action="createrequest.php" method="POST">
            <h1 class="text-center">Create user</h1>
            <br>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control">
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
            <br>
            <button type="submit" class="btn btn-dark">Submit user</button>
        </form>
    </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>