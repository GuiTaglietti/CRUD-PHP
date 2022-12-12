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
    <h1 class="text-center" style="margin-top: 100px">Sign up end test</h1>
    <?php
        include("config.php");
        $name = $_POST["username"];
        $email = $_POST["email"];
        $passw = md5($_POST["password"]);
        $cquery = $con->prepare("INSERT INTO Usuarios (username, email, password) VALUES ((?), (?), (?))");
        $cquery->bind_param("sss", $name, $email, $passw);
        if(!$cquery->execute()){
            echo "<script>alert('Error query!');window.location.href = 'changes.php'</script>";
        }
        else{
            echo "<script>alert('Success!');window.location.href = 'changes.php'</script>";
        }
    ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>