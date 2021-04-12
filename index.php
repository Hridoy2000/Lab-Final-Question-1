<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
</head>
<body>
    <form action=" " method="POST">
        ID<input type="text" name="id"><br>
        Name<input type="text" name="name"><br>
        Age<input type="email" name="email"><br>
        Username<input type="text" name="username"><br>
        Password<input type="password" name="password"><br>
        <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['SUBMIT'])){
            $id=$_POST['id'];
            $name=$_POST['name'];
            $age=$_POST['age'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $res=mysqli_query($mysqli);
        }
    ?>
    
</body>
</html>