<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chức năng đăng nhập</title>
    <style>
        .form{
            margin: 0 auto;
            width: 400px;
            border: 1px solid #CDCDCD;
            text-align: center;
            background-color: aliceblue;
        }
        input{
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="form">
        <form method = "get" action = "<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div>Login</div>
            <div><input type = "text" placeholder = "username" name = "username"></div>
            <div><input type = "password" placeholder="password" name = "password"></div>
            <div><input type = "submit" value = "Sig in" name = "sigin"></div>
        </form>

        <?php
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $username = $_GET['username'];
            $password = $_GET['password'];
            if($username == "admin" && $password == "admin"){
                echo "<h2>Welcome <span style='color: red'>".$username."</span> to Website</h2>";
            }
            else{
                echo "<h2><span style='color: red'>Sig in Error</span></h2>";
            }
        }
        ?>
    </div>
</body>
</html>
