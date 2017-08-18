<?php
$nameErr = $emailErr = $genderErr = "";
$name = $email = $website = $comment = $gender = "";
$isPost = ($_SERVER["REQUEST_METHOD"] == "POST");
if($isPost){
    if(empty($_POST['name'])){
        $nameErr = "Name is required";
    }else{
        $name = test_input($_POST["name"]);
    }

    if(empty($_POST['email'])){
        $emailErr = "Email is required";
    }else{
        $email = test_input($_POST['email']);
    }

    if(empty($_POST['website'])){
        $website = "";
    }else{
        $website = test_input($_POST['website']);
    }

    if(empty($_POST['comment'])){
        $comment = "";
    }else{
        $comment = test_input($_POST['comment']);
    }

    if(empty($_POST['gender'])){
        $genderErr = "Gender is required";
    }else{
        $gender = test_input($_POST['gender']);
    }

}

function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check Error</title>
</head>
<body>
<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type = "text" name = "name">
    <span class = "error"><?php echo $nameErr; ?></span>
    <br><br>

    Email:
    <input type = "text" name = "email">
    <span class = "error"><?php echo $emailErr; ?></span>
    <br><br>

    Website:
    <input type = "text" name = "website">
    <br><br>

    Comment:
    <textarea name = "comment" rows = "5" cols = "40"></textarea>
    <br><br>

    Gender:
    <input type = "radio" name = "gender" value = "Female">Female
    <input type = "radio" name = "gender" value = "Male">Male
    <span class = "error"><?php echo $genderErr; ?></span>
    <br><br>
    <button type="submit">Gửi</button>
</form>
</body>
</html>


