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
        <h1>Database</h1>
        <?php
            include("config.php");
            $res = $con->query("SELECT * FROM Usuarios");
            if($res->num_rows > 0){
                echo "<table class='table table-hover table-bordered'>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Username</th>";
                echo "<th>Email</th>";
                echo "<th>Password (Encrypted)</th>";
                echo "<th>Actions (Update/Delete)</th>";
                echo "</tr>";
                while ($row = $res->fetch_object()) {
                    echo "<table class='table table-hover table-bordered'>";
                    echo "<tr>";
                    echo "<td>".$row->ID."</td>";
                    echo "<td>".$row->username."</td>";
                    echo "<td>".$row->email."</td>";
                    echo "<td>".$row->password."</td>";
                    echo "<td><button onclick=\"window.location.href = 'delete.php';\" style='background-color: red; color: white; border: 1px solid black;'>Delete</button>
                              <button onclick=\"window.location.href = 'update.php';\" style='background-color: green; color: white; border: 1px solid black;'>Update</button>
                          </td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            else{
                echo "<script>alert('Error query')</script>";
            }
        ?>
    </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>