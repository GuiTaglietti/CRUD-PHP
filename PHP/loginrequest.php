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
        <div style="width: 500px;">
        <?php 
            include("config.php");
            $userlog = $_POST["usernamelog"];
            $passwlog = md5($_POST["passwordlog"]);
            $fquery = $con->prepare("SELECT * FROM Usuarios WHERE username = (?) AND password = (?) OR email = (?) AND password = (?)");
            $fquery->bind_param("ssss", $userlog, $passwlog, $userlog, $passwlog);
            $fquery->execute();
            if($fquery->get_result()->num_rows <= 0){
                echo "<h1 style='color: red;'>Error: Incorrect username/email and/or password!</h1>";
            }
            else{
                echo "<script>alert('Successful login!');window.location.href = 'editusers.php'</script>";
            }
        ?>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>